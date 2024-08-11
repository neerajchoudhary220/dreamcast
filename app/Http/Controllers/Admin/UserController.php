<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Event\ResponseEvent;

class UserController extends Controller
{
    public function index(){
        $roles = Role::pluck('name','id');
        return view('admin.users.index',compact('roles'));
    }

    public function save(UserFormRequest $request){
        try {
            DB::beginTransaction();
           $inputs = $request->only('name','email','phone_number','description');
           if($request->hasFile('image')){
            $inputs['image']= $request->file('image')->store('user_images');
           }
           $user = User::create($inputs);
           $user->roles()->attach($request->role);
            DB::commit();         
            return response()->json([
                'message'=>'User created successfully',
                'data'=>$user
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error'=>$e->getMessage(),$e->getCode()]);
            
        }
    }

    public function list(Request $request){
        if($request->ajax()){
            $_order = request('order');
            $_columns = request('columns');
            $order_by = $_columns[$_order[0]['column']]['name'];
            $order_dir = $_order[0]['dir'];
            $search = request('search');
            $skip = request('start');
            $take = request('length');

            $query = User::query();
            if (isset($search['value'])) {
                $query->where('name', 'like', '%' . $search['value'] . '%');
            };

            $data = $query->orderBy($order_by, $order_dir)->skip($skip)->take($take)->get();
            $recordsTotal = $query->count();

            $recordsFiltered = $query->count();

            foreach ($data as $d) {
                $image=($d->image)? storage::url($d->image):asset('assets/images/placeholder.webp');
                $d->name="<div class=''><img src='$image' alt='userImg' width='50%' height='50%' class='mr-3' />$d->name</div>";
                $d->role = $d->roles()->first()->name;
                // $d->action=view('admin.users.action',compact('d'))->render();
            }


            return [
                "draw" => request('draw'),
                "recordsTotal" => $recordsTotal,
                'recordsFiltered' => $recordsFiltered,
                "data" => $data,
            ];
        }
    }


    public function checkAlreadyExists(Request $request){
       
        if($request->type==='phone_number'){
            $is_exists = User::where('phone_number',$request->phone_number)->first();
        }
        else if($request->type==='email'){
            $is_exists = User::where('email',$request->email)->first();
        }
        if($is_exists){
            return "false";
        }
       
        return "true";
    }

    public function delete(User $user){
        DB::beginTransaction();

        try {

            $user->roles()->detach();
            if($user->image){
                Storage::delete($user->image);
            }
            $user->delete();
            DB::commit();
            return response()->json(['message'=>'User deleted successfully']);
        } catch (\Exception $e) {
            return response()->json(['error'=>$e->getMessage(),$e->getCode()]);
        }
    }

}
