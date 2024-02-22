<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmailTemplateRequest extends FormRequest
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
            'configkey' => 'required|string|max:255',
            'value' => 'required|string|max:255',
            'type_name' => 'required|string|max:255',
            'type_slug' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'email_subject' => 'required|string|max:255',
            'email_body' => 'required|string',
        ];
    }
    public function messages(): array
    {
        return [
            'configkey.required' => 'The config key field is required',
            'value.required' => 'The value field is required',
            'type_name.required' => 'The type name field is required',
            'type_slug.required' => 'The type slug field is required',
            'title.required' => 'The title field is required',
            'description.required' => 'The description field is required',
            'email_subject.required' => 'The email subject field is required',
            'email_body.required' => 'The email body field is required',
        ];
    }
}
