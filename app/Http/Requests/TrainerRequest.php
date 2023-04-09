<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrainerRequest extends FormRequest
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
            "name"=>'required',
            "email"=>'required',
            "phone"=>'required|min:9',
            "education"=>'required',
            "experience"=>'required',
            "description"=>'required',
            "trainer_photo"=> 'mimes:png,jpg,jpeg|max:50000'
        ];
    }
    public function messages()
    {
        return[
            "name.required"=>"Please Enter Your Name",
            "email.required"=>"Please Enter Your Email",
            "phone.min"=>"Please Enter Your Phone",
            "education.required"=>"Please Enter Your Education",
            "experience.required"=>"Please Enter Your Experience",
            "description.required"=>"Please Enter Your Description",
            "trainer_photo.max" => "Your photo size is exceed"
        ];
    }
}
