<?php

namespace App\Http\Requests\Blog;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class BlogPostRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'category_id' => 'required|exists:blog_categories,id',
            'industry_id' => 'nullable|string',
            'profile_type_id' => 'nullable|string',
            'featured' => 'nullable|in:0,1',
            'badge' => 'nullable|string',
            'title' => 'required|string',
            'header' => 'nullable|string',
            'tags' => 'nullable|string',
            'content' => 'required|string',
            'short_description' => 'nullable|string',
            'image' => 'sometimes|image|mimes:jpeg,png,jpg|max:5120',
            'published_at' => 'nullable|date',
            'views' => 'nullable|integer|min:0',
            'is_published' => 'nullable|boolean',
            'meta_tags' => 'nullable|json',
            'source' => 'nullable|string',
            'source_url' => 'nullable|url',
            'author_name' => 'nullable|string',
            'author_email' => 'nullable|email',
            'word_count' => 'nullable|integer|min:0',
            'reading_time' => 'nullable|integer|min:0',
        ];
    }

    public function messages()
    {
        return [
            'user_id.required' => 'The :attribute field is required.',
            'user_id.exists' => 'The selected :attribute is invalid.',
            'category_id.required' => 'The :attribute field is required.',
            'category_id.exists' => 'The selected :attribute is invalid.',
            'image.image' => 'The :attribute must be an image file.',
            'image.mimes' => 'The :attribute must be a file of type: :values.',
            'image.max' => 'The :attribute may not be greater than :max kilobytes.',
            'published_at.date' => 'The :attribute must be a valid date.',
            'views.integer' => 'The :attribute must be an integer.',
            'views.min' => 'The :attribute must be at least :min.',
            'is_published.boolean' => 'The :attribute field must be true or false.',
            'meta_tags.json' => 'The :attribute must be a valid JSON string.',
            'source_url.url' => 'The :attribute format is invalid.',
            'author_email.email' => 'The :attribute must be a valid email address.',
            'word_count.integer' => 'The :attribute must be an integer.',
            'word_count.min' => 'The :attribute must be at least :min.',
            'reading_time.integer' => 'The :attribute must be an integer.',
            'reading_time.min' => 'The :attribute must be at least :min.',
        ];
    }

    public function attributes()
    {
        return [
            'user_id'           => 'User Name',
            'category_id'       => 'Category Name',
            'industry_id'       => 'Industry Name',
            'profile_type_id'   => 'Profile Type',
            'featured'          => 'Featured',
            'badge'             => 'Badge',
            'title'             => 'Title',
            'header'            => 'Header',
            'tags'              => 'Tags',
            'content'           => 'Content',
            'short_description' => 'Short Description',
            'image'             => 'Image',
            'published_at'      => 'Published At',
            'views'             => 'Views',
            'is_published'      => 'Is Published',
            'meta_tags'         => 'Meta Tags',
            'source'            => 'Source',
            'source_url'        => 'Source URL',
            'author_name'       => 'Author Name',
            'author_email'      => 'Author Email',
            'word_count'        => 'Word Count',
            'reading_time'      => 'Reading Time',
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
