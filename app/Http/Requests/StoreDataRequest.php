<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataRequest extends FormRequest
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
            'profile_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'passport_image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_name' => 'nullable|string|max:255',
            'middle_name' => 'nullable|string|max:255',
            'birth_date' => 'required|date',
            'birth_place' => 'required|string|max:255',
            'gender' => 'required|string|in:male,female',
            'nationality' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'passport_number' => 'required|string|max:255',
            'passport_type' => 'required|string|max:255',
            'passport_date' => 'required|date',
            'passport_expire_date' => 'required|date',
            'passport_issue_place' => 'required|string|max:255',
            'mobile_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'emergency_contact_name' => 'required|string|max:255',
            'emergency_contact_country' => 'nullable|string|max:255',
            'emergency_contact_city' => 'nullable|string|max:255',
            'emergency_contact_address' => 'required|string|max:255',
            'emergency_contact_email' => 'required|email|max:255',
            'emergency_contact_home_phone' => 'required|string|max:255',
            'emergency_contact_mobile_phone' => 'required|string|max:255',
            'emergency_contact_postal_code' => 'required|string|max:255',
            'emergency_contact_postal_box' => 'required|string|max:255',
            'profession' => 'required|string|max:255',
            'currnet_job_title' => 'required|string|max:255',
            'entry_type' => 'required|string|max:255',
            'entry_port' => 'required|string|max:255',
            'entry_date' => 'required|date|after:today',
        ];
    }
}
