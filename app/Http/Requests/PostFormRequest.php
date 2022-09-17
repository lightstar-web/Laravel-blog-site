<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
        $rules = [
            'title' => 'required|max:255|unique:posts,title,' . $this->id,
            'excerpt' => 'required',
            'body' => 'required',
            'min_to_read' => 'min:1|max:30',
        ];

        if ($this->method() === 'POST') {
            $rules['image'] = ['required', 'mimes:jpg,png,jpeg', 'max:1024'];
        } else {
            $rules['image_path'] = ['mimes:jpg,png,jpeg', 'max:1024'];
        }

        return $rules;
    }
}
