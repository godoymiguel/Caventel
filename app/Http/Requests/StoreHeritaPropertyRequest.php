<?php

namespace Caventel\Http\Requests;

use Caventel\Http\Requests\Request;

class StoreHeritaPropertyRequest extends Request
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
            'document_code' => 'required|min:4|max:250|string',
            'name'          => 'required|min:4|max:250|string',
            'notary'          => 'required|min:4|max:250|string',
            'recordCard'          => 'required|min:4|max:250|string',
            'price'         => 'required|min:4',
            'address'       => 'required|min:4|max:250|string',
        ];
    }
}
