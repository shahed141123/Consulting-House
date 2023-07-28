<?php

namespace App\Http\Requests\Industry;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class IndustryWatchRequest extends FormRequest
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
            'user_id' => 'nullable|exists:users,id',
            'category_id' => 'nullable|exists:industry_watch_categories,id',
            'sector_id' => 'nullable|exists:industry_sectors,id',
            'industry_id' => 'nullable|exists:industries,id',
            'profile_type_id' => 'nullable|json',
            'featured' => 'nullable|in:0,1',
            'badge' => 'nullable|string',
            'title' => 'required|string',
            'header' => 'nullable|string',
            'tags' => 'nullable|json',
            'content' => 'required|string',
            'short_description' => 'nullable|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:5120',
            'published_at' => 'nullable|date',
            'author_name' => 'nullable|string',
            'views' => 'integer|min:0',
            'status' => 'required|in:draft,published',
            'meta_tags' => 'nullable|json',
            'author_email' => 'nullable|email',
            'word_count' => 'nullable|integer|min:0',
            'reading_time' => 'nullable|integer|min:0',
        ];
    }

    public function messages()
    {
        return [
            'user_id.exists'       => 'The selected user is invalid.',
            'category_id.exists'   => 'The selected category is invalid.',
            'sector_id.exists'     => 'The selected sector is invalid.',
            'industry_id.exists'   => 'The selected industry is invalid.',
            'profile_type_id.json' => 'The profile type ID must be a valid JSON array.',
            'featured.in'          => 'The featured field must be either 0 or 1.',
            'image.image'          => 'The image must be a valid image file.',
            'image.mimes'          => 'The image must be a file of type: jpeg, png, jpg.',
            'image.max'            => 'The image size must not exceed 5120 KB.',
            'status.required'      => 'The status field is required.',
            'status.in'            => 'The status must be either "draft" or "published".',
            'author_email.email'   => 'The author email must be a valid email address.',
        ];
    }

    public function attributes()
    {
        return [
            'user_id'           => 'user',
            'category_id'       => 'category',
            'sector_id'         => 'sector',
            'industry_id'       => 'industry',
            'profile_type_id'   => 'profile type',
            'featured'          => 'featured',
            'badge'             => 'badge',
            'title'             => 'title',
            'header'            => 'header',
            'tags'              => 'tags',
            'content'           => 'content',
            'short_description' => 'short description',
            'image'             => 'image',
            'published_at'      => 'published date',
            'author_name'       => 'author name',
            'views'             => 'views',
            'status'            => 'status',
            'meta_tags'         => 'meta tags',
            'author_email'      => 'author email',
            'word_count'        => 'word count',
            'reading_time'      => 'reading time',
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
