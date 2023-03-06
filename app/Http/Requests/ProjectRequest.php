<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
        $project = $this->route()->parameter('project');

        $rules = [
            'name' => 'required',
            'slug' => 'required|unique:projects',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];

        if ($project) {
            $rules['slug'] = 'required|unique:projects,slug,' . $project->id;
        }

        if ($this->status == 2) {
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tags' => 'required',
                'extract' => 'required',
                'body' => 'required',
                'goal' => 'required'
            ]);
        }

        return $rules;
    }
}
