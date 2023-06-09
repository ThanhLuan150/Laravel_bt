<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string,
     */
    public function rules()
    {
        return [
            'roomname' => 'required|string|max:255',
            'des' => 'required|string|max:255',
            'price' => 'required|numeric',
            'img' => 'required|string|max:255'
        ];
    }
}