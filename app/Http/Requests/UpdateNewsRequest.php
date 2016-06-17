<?php

namespace Caventel\Http\Requests;

use Caventel\Http\Requests\Request;

class UpdateNewsRequest extends Request
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
            'title' => 'required|min:8|max:250',
            'body' => 'required|min:60',
        ];
    }
}
