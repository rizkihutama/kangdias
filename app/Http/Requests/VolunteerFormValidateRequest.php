<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VolunteerFormValidateRequest extends FormRequest
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
            'full_name' => 'required',
            'ig_account' => 'required|unique:volunteers,ig_account',
            'email' => 'required|email:rfc,dns|unique:volunteers,email',
            'phone' => 'required|numeric|digits_between:8,13|unique:volunteers,phone|starts_with:08',
            'motivation' => 'required'
        ];
    }
}
