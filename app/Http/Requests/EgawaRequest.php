<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EgawaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if ($this->path() == 'egawa') {
            //特定のリクエストのみtrueにする
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        //validationの設定

        return [
            'name' => 'required',
            'mail' => 'email',
            'age' => 'numeric|between:0,150',
        ];
    }

    public function messages() {

        return [
            'name.required' => '名前は必ず入力して下さい。',
            'mail.email' => 'メールアドレスが必要です。',
            'age.numeric' => '年齢は数字で入力してください。',
            'age.between' => '年齢は0～150の間で入力してください。'
        ];
    }
}
