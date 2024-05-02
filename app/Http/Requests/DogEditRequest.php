<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DogEditRequest extends FormRequest
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
        'name'=> 'min:1|max:20|string',
        'age'=>'integer|min:0|max:100',
        'img'=>'image|max:2048',
        'descriprion'=>'min:1|max:200|string',
        ];
    }
}
