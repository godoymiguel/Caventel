<?php

namespace Caventel\Http\Requests;

use Caventel\Http\Requests\Request;

class StoreLoanPaymentRequest extends Request
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
            //
            'payment'           => 'required|min:1|max:250',
            'payment_number'    => 'required|min:4|max:250|string',
            'bank'              => 'required|string'
        ];
    }
}
