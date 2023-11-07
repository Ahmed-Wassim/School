<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ParentRequest extends FormRequest
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
            'email' => 'string|email',
            'password' => 'required|string',
            'fname' => 'required|string|max:50',
            'lname' => 'required|string|max:50',
            'national_id' => 'required|numeric',
            'phone' => 'required|string',
            'dob' => 'required|date',
        ];
    }
}
