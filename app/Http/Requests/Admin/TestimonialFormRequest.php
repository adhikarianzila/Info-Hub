<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class TestimonialFormRequest extends FormRequest
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
        $rules = [
            'name' =>[
                'required',
                'string',
                'max:200'
            ],
            'title' =>[
                'required',
                'string',
                'max:200'
            ],
            'description' =>[
                'required',
            ],
            'image' =>[
                'required',
                'mimes:jpeg,jpg,png'
            ],
            'navbar_status' =>[
                'nullable',
                'boolean'
            ],
            'status' =>[
                'nullable',
                'boolean'
            ],
        ];
        return $rules;
    }
}
