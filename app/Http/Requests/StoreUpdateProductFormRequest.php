<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProductFormRequest extends FormRequest
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
            "category_id" => "required|exists:categories,id",
            "name"        => "required|min:3|max:60|unique:products,name,{$this->product}",
            //"url"         => "required|min:3|max:60|unique:products,url,{$this->product}",
            "price"       => "required|numeric",
            "description" => "max:2000"
        ];
    }
}