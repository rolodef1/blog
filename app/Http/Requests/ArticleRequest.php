<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        switch($this->method()){
            case 'POST':
            $rules = [
            'title'=>'min:8|max:250|required|unique:articles',
            'category_id'=>'required',
            'content'=>'min:60|required',
            'image'=>'image|required'
            ];
            break;
            case 'PUT':
            $rules = [
            'title'=>'min:8|max:250|required',
            'category_id'=>'required',
            'content'=>'min:60|required',          
            ];
            break;
        }
        return $rules;
    }
}
