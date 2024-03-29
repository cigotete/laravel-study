<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required',
            'url' => [
                'required',
                Rule::unique('projects')->ignore( $this->route('project'))
            ],
            'description' => 'nullable',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => __('The project needs a title.'),
        ];
    }
}
