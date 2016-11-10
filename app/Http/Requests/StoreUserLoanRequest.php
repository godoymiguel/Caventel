<?php

namespace Caventel\Http\Requests;

use Caventel\Http\Requests\Request;

class StoreUserLoanRequest extends Request
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
            'user_ci'          => 'required|min:1|integer',
            'typeLoan'         => 'required|min:1|max:250|string',
            'term'             => 'required|min:12|max:300|integer',
            'amountAwarded'    => 'required|min:1|numeric'
        ];
    }
}
