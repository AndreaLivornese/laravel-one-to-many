<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|max:50',
            'username_creator'=>'required|max:20',
            'link_github'=>'required|max:300',
            'program_langs'=>'max:255',
        ];
    }

    public function messages(){

        return [
            'max'=>'Non si deveno superare i :max caratteri',
            'required'=>'Campo obbligatorio',
        ];

    }
}
