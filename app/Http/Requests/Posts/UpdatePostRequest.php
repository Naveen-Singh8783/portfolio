<?php

namespace App\Http\Requests\Posts;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
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
            'title'=>'required',
            'description'=>'required',
            'dob'=>'required',
            'address'=>'required',
            'email'=>'required',
            'phonenum'=>'required',
            'noofprojects'=>'required',
            'content'=>'required',
            'classten'=>'reruired',
            'classtw'=>'reruired',
            'university'=>'reruired',
            'projectonename'=>'reruired',
            'projecttwoname'=>'reruired',
            'projectthreename'=>'reruired',
            'projectone'=>'reruired',
            'projecttwo'=>'reruired',
            'projectthree'=>'reruired',
            'experienceone'=>'reruired',
            'experiencetwo'=>'reruired',
            'experiencethree'=>'reruired',
            'category' => 'required'
        ];
    }
}
