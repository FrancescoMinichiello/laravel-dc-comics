<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
            "name" => "required|string|alpha:ascii|min:3|max:100",
            "last_name" => "required|string|alpha:ascii|min:3|max:100",
            "address" => "required|string|min:5",
            "phone_number" => "required|numeric|min:9|",
            "email" => "required|string|email",
            "age" => "required|numeric|string",
            "nationality" => "required|string|alpha:ascii",
        ];
    }
}
