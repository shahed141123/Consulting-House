<?php

namespace App\Http\Requests\Menu;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;

class FrontendMenuRequest extends FormRequest
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
            'name' => 'required|string',
            'url' => 'required|string',
            'parent_id' => 'nullable|exists:frontend_menus,id',
            'order' => 'nullable|integer',
            'icon' => 'nullable|string',
            'target' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'parent_id.exists'  => 'The selected Menu does not exist.',
            'name.required'     => 'The Menu Name is required',
            'url.required'      => 'The Menu URL is required.',
            'order.integer'     => 'The Menu Order Must be positive consecutive number Like 1,2,3.',
        ];
    }

    public function attributes()
    {
        return [
            'name'      => 'Menu Name',
            'url'       => 'Menu URL',
            'parent_id' => 'Name',
            'order'     => 'Ordering Number',
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
