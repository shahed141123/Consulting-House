<?php

namespace App\Http\Requests\Permission;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class GroupPermissionRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
        ];
    }

     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Please enter your group permission name',
        ];
    }

    /**
     * Get custom attributes for validator errors. ### -----not working
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'name' => 'Group Permission Name',
        ];
    }

    /**
     * Handle a failed validation attempt.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function failedValidation(Validator $validator)
    {
        $this->recordErrorMessages($validator);
        parent::failedValidation($validator);
    }

    /**
     * Record the error messages displayed to the user.
     *
     * @param  \Illuminate\Contracts\Validation\Validator  $validator
     * @return void
     */
    protected function recordErrorMessages(Validator $validator)
    {
        $errorMessages = $validator->errors()->all();

        foreach ($errorMessages as $errorMessage) {
            toastr()->error($errorMessage);
        }
    }
}
