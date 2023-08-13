<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|string|max:255',
            'image' => 'required|image',
            'category_id' => 'required|integer',
            'content' => 'required|string',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Tiêu đề bài viết không được để trống',
            'title.max' => 'Tiêu đề bài viết không quá 255 kí tự',
            'image.required' => 'Ảnh của bài viết không được để trống',
            'image.image' => 'Ảnh của bài viết phải có dạng ảnh',
            'category_id.required' => 'Danh mục bài viết không được để trống',
            'category_id.integer' => 'Danh mục bài viết không được để trống',
            'content.required' => 'Nội dung bài viết không được để trống',
        ];
    }
}
