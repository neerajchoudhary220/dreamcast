<?php

namespace App\Http\Controllers;

use App\Jobs\CategoryJob;
use Illuminate\Http\Request;

class TestController extends Controller
{
    
    public function index(){
   CategoryJob::dispatch();

    //     $myArray =[
    //         'name' => 'John Doe',
    //         'age' => 30,
    //         'city' => 'New York'  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data  // replace with actual data
    //     ];

    //     $newArr = [
    //         'fruit'=>'Mango',
    //         'price'=>'300'
    //     ];
    //     array_push($myArray,$newArr);

    //     $IndexArra =['Apple','Banana','Cherry','Cornflower'];
    //     $indexArray2 =['Grapes','Lemon','Orange'];

    //    array_push($IndexArra,"grapes","Banana");
    //    foreach($IndexArra as $arr){
    //     echo $arr;
    //     echo "<br>";
    //    }
    //     dd($IndexArra);
    //     dd($myArray);
    //     // dd($myArray);
    //     return "hello this is working";
    }
}
