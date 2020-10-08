<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'image' => 'mimes:jpeg,jpg,png,gif|max:10240',
            'name' => 'required',
            'work_link' => 'required',
            'age' => 'required',
            'prefectures_id' => 'required',
            'genre_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'image.mimes' => 'ファイルタイプをjpeg,jpg,png,gifに設定してください。',
            'image.max' => 'ファイルサイズを10MB以下に設定してください。',
            'name.required' => '名前を入力してください',
            'work_link.required' => '過去作品のリンクを入力してください',
            'age.required' => '年齢を選択してください',
            'prefectures_id.required' => 'お住まいを選択してください',
            'genre_id.required' => 'ジャンルを選択してください' 
        ];
    }
}
