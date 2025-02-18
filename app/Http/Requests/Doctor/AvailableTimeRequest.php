<?php

namespace App\Http\Requests\Doctor;

use Illuminate\Foundation\Http\FormRequest;

class AvailableTimeRequest extends FormRequest
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
            'day' => 'required|string|in:saturday,sunday,monday,tuesday,wednesday,thursday,friday',
            'start_time' => 'required|before:end_time',
            'end_time' => 'required|    after:start_time',
            'duration' => 'required|integer',
        ];

    }

    public function messages(): array
    {
        return [
            'start_time.after' => 'The start time must be before the end time.',
            'end_time.before' => 'The end time must be after the start time.',
            'duration.integer' => 'The duration must be an integer.',
        ];
    }
}
