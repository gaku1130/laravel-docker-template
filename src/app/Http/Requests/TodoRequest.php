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
        // contentは何を指しているか
        // このバリデーションはどこで行われているのか
        return [
            'content' => 'required|max:255',
        ];
    }

    public function messages()
    {
        // バリデーションが行われた後にどこのページに飛ぶのか、どのようなふろーで行われているのか。

        return[
            'content.required' => 'ToDoが入力されていません。',
            'content.max' => 'ToDoは :max 文字以内で入力してください。',
        ];
    }
}


