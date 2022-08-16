<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryCreateRequest extends FormRequest
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
            'block_id' => 'nullable|integer',
            'contents' => 'nullable|string',
            'description' => 'nullable|string',
            'file' => 'nullable|string',
            'file2' => 'nullable|string',
            'file3' => 'nullable|string',
            'name' => 'required|string',
            'seo_description' => 'nullable|string',
            'seo_keywords' => 'nullable|string',
            'seo_link' => 'nullable|string',
            'seo_title' => 'nullable|string',
            'sorted' => 'required|integer',
            'url' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return[
            'name.required'=> 'Lütfen başlık alanını boş bırakmayınız.'
        ];
    }
}
