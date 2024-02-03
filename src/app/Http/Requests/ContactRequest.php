<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name' =>['required', 'string'],
            'email' =>['required', 'string', 'email'],
            'post-code' =>['required','numeric'],
            'address' =>['required', 'string'],
            'content' =>['required', 'string', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式で入力してください',
            'post-code.required' => '郵便番号を入力してください',
            'post-code.numeric' => '郵便番号を数値で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'content.required' => 'ご意見を入力してください',
            'content.string' => 'ご意見を文字列で入力してください',
            'content.max' => 'ご意見を120文字以下で入力してください',
        ];
    }
}
