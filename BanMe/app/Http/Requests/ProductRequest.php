<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'product_name' => 'required|alpha|max:255',
            'image' => 'required',
            'category_id' => 'required',
        ];
    }
    public function messages ()
    {
        return [
            'product_name.required' => 'Ten khong duoc de trong',
            'product_name.alpha' => 'Ten chi chua chu cai',
            'product_name.max' => 'Ten toi da 255 ky tu',
            'category_id.required' => 'category khong duoc de trong',
            'image.required'=>'Ảnh không được trống',
        ];
    }
}
