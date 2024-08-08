<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>['required','string','min:3','max:255'],
            'email'=>['required','email','unique:users,email,'.$this->route('user')],
            'phone_number' => ['required', 'max:10'],
            'role'=>['required'],
            'description'=>['nullable','string','max:300'],
            'image'=>['nullable','mimes:jpeg,jpg,png','max:2048']
        ];
    }
}
