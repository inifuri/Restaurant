<?php

namespace rest\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username'=>'required',
            'password'=>'required|confirmed'
            'password_confirmation'=>'required'

        ];
    }
    public function messages()
    {
      return [
            'password_confirmation.confirmed'=> 'La :attribute debe coincidir',
            'password.confirmed' => 'La :attribute debe coincidir'
      ];
    }


    public function attributes()
    {
        return [
            'password_confirmation' => 'Confirmar contraseña',
            'password' => 'Contraseña',
        ];
    }
    }
