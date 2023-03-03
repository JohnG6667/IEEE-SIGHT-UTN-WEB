<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        $event = $this->route()->parameter('post');

        $rules = [
            'title' => 'required',
            'slug' => 'required|unique:posts',
            'status' => 'required|in:1,2',
            'file' => 'image'
        ];

        if ($event) {
            $rules['slug'] = 'required|unique:events,slug,' . $event->id;
        }

        if ($this->status == 2) {
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tags' => 'required',
                'extract' => 'required',
                'body' => 'required',
                'entity' => 'required',
                'place' => 'required',
                'event_date' => 'required'
            ]);
        }

        return $rules;
    }
}
