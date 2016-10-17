<?php

namespace Caventel\Http\Requests;

use Caventel\Http\Requests\Request;

class StoreUserProfileRequest extends Request
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
            'birthdate'         => 'required|date',
            'sex'               => 'required',
            'phone'             => 'required|min:11|max:250',
            'address'           => 'required|min:20|max:250',
            'avatar'            => 'image',
            'emergency_name'    => 'required|min:10|max:250',
            'emergency_phone'   => 'required|min:11|max:250',
            'emergency_address' => 'required|min:20|max:250'
        ];
    }
}
