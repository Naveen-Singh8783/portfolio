<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostsRequest extends FormRequest
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
        return [
            'title' => 'required|unique:posts',
            'description' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phonenum' => 'required',
            'noofprojects' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'classten' => 'required',
            'classtw' => 'required',
            'university' => 'required',
            'projectonename' => 'required',
            'projecttwoname' => 'required',
            'projectthreename' => 'required',
            'projectone' => 'required',
            'projecttwo' => 'required',
            'projectthree' => 'required',
            'experienceone' => 'required',
            'experiencetwo' => 'required',
            'experiencethree' => 'required',
            'category' => 'required'

        ];
    }
}
