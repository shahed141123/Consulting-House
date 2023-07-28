<?php

namespace App\Http\Requests\Industry;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class IndustryWatchCategoryRequest extends FormRequest
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
            'name'        => 'required|string|max:255',
            'icon'        => 'sometimes|image|mimes:jpeg,png,jpg|max:5120',
            'image'       => 'sometimes|image|mimes:jpeg,png,jpg|max:5120',
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'icon.image'        => 'The icon must be an image (jpeg, png, jpg).',
            'icon.max'          => 'The icon may not be greater than :max kilobytes.',
            'image.image'       => 'The image must be an image (jpeg, png, jpg).',
            'image.max'         => 'The image may not be greater than :max kilobytes.',
        ];
    }

    public function attributes()
    {
        return [
            'name'        => 'Name',
            'icon'        => 'Icon',
            'image'       => 'Image',
            'description' => 'Description',
            'link'        => 'Link',
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
