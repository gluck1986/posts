<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StorePostRequest extends Request
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
            'title'=> 'required|max:255',
            'author' => 'required|max:255',
            'content' => 'required'
        ];
    }
    
        /**
     * {@inheritdoc}
     */
    protected function formatValidationErrors(\Illuminate\Validation\Validator $validator)
    {
        return $validator->errors()->all();
    }
}
