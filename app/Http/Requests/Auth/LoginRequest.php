<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // Cho phép tất cả các request
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'user_email' => 'required|email', 
            'user_pass' => 'required|string', 
        ];
    }
    public function messages()
    {
        return  [
                'user_email.required' => 'The email field is required',
                'user_pass.required' => 'The password field is required',
                         
            ];
    }
    /**
     * Authenticate the user.
     *
     * @return bool
     */
    public function authenticate()
    {
        // Thực hiện xác thực người dùng ở đây
    }
}

