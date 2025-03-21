<?php

namespace App\Http\Requests;

use Dom\XPath;
use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'content' => 'required|max:255',
            'category' => 'required|in:MUST,自習,レビュー,プライベート,その他',
        ];
    }

    public function messages()
    {
        return[
            'content.required' => 'ToDoが入力されていません。',
            'content.max' => 'ToDoは :max 文字以内で入力してください。',
            'category.required' => 'カテゴリーを選択してください。',
            'category.in' => '有効なカテゴリーを選択してください。',
        ];
    }
}


