<?php

namespace Caventel\Http\Requests;

use Caventel\Http\Requests\Request;

class StoreUserRequest extends Request
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
            'ci' => 'required|min:7|unique:users',
            'name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'requiered|unique:users|max:255',
            'password' => 'required|min:8|confirmed|max:255',
            'type' => 'required',
        ];
    }
}
