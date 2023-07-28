<?php

namespace App\Http\Requests\Industry;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class industriesRequest extends FormRequest
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
            'parent_id'   => 'nullable|exists:industries,id',
            'sector_id'   => 'nullable|exists:industry_sectors,id',
            'name'        => 'required|string|max:255',
            'logo'        => 'sometimes|image|mimes:jpeg,png,jpg|max:5120',
            'image'       => 'sometimes|image|mimes:jpeg,png,jpg|max:5120',
            'description' => 'nullable|string',
            'link'        => 'nullable|url|max:255',
        ];
    }

    public function messages()
    {
        return [
            'parent_id.exists'  => 'The selected industries does not exist.',
            'sector_id.exists'  => 'The selected industry sector does not exist.',
            'logo.image'        => 'The logo must be an image (jpeg, png, jpg).',
            'logo.max'          => 'The logo may not be greater than :max kilobytes.',
            'image.image'       => 'The image must be an image (jpeg, png, jpg).',
            'image.max'         => 'The image may not be greater than :max kilobytes.',
            'link.url'          => 'The link must be a valid URL.',
            'link.max'          => 'The link may not be greater than :max characters.',
        ];
    }

    public function attributes()
    {
        return [
            'parent_id'   => 'industry',
            'sector_id'   => 'industry sector',
            'name'        => 'Name',
            'logo'        => 'Logo',
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
