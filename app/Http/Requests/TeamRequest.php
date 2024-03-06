<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
   

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
	    return [
		    'team.name' => 'required|string|max:100',
		    'image_url' => 'required',
	    ];
    }
     public function messages()
    {
        return [
            'team.name.required' => '名前を入力してください',
            'team.name.string' => '名前は文字列で入力してください',
            'team.name.max' => '名前は50文字以内で入力してください',
            'image_url.required' => '画像を選択してください',
        ];
    }
}
