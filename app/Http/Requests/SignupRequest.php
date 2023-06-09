<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SignupRequest extends FormRequest
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
            'name'=>'required|max:255|string',
            'age'=>'numeric',
            'date'=>'string',
            'phone'=>'numeric',
            'web'=>'string',
            'address'=>'string'
        ];
    }
    public function messages(){
        return [
            'name.string'=>'Vui lòng điền tên cho đúng ',
            'age.numeric'=>'Vui lòng nhập tuổi cho đúng',
            'date.string'=>'Vui lòng điện lại ngày tháng',
            'phone.numeric'=>'Vui lòng kiểm tra lại số điện thoại',
            'web.string'=>'Vui lòng nhập lại ký tự cho đúng',
            'address.string'=> 'Vui lòng nhập lại địa chỉ'
        ];
    }
}
