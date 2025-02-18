<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequset extends FormRequest
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
            'username' => 'string|max:255',
            'name' => 'string|max:255',
           // 'email' => 'email|unique:doctors,email,',
            'phone' => 'string|max:255',
            'address' => 'string|max:255',
            'about' => 'string|max:1000',
            'experience' => 'array',
            'website' => 'string|max:255',
            'twitter' => 'string|max:255',
            'facebook' => 'string|max:255',
            'linkedin' => 'string|max:255',
        ];
    }
}
