<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminCreatePostRequest extends FormRequest
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
            'name_english'=>'bail|Required',
            'name_bangla'=>'bail|Required',
            'division'=>'bail|Required',
            'district'=>'bail|Required',
            'category'=>'bail|Required',
            'description'=>'bail|Required',
            'direction'=>'bail|Required',
            'imageFiles' => 'required',
            'latitude' => 'numeric',
            'langitude' => 'numeric',
            'imageFiles.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'author'=>'bail|Required'
        ];
    }

    public function messages(){
        return [
            'name_english.required' => "Place Name (English) can't be empty",
            'name_bangla.required' => "Place Name (Bangla) can't be empty",
            'division.required' => "Please Select Division",
            'district.required' => "Please Select District",
            'category.required' => "Please Select Category",
            'description.required' => "Description can't be empty",
            'direction.required' => "Direction can't be empty",
            'imageFiles.required' => "Please Select Images",
            'author.required' => "Author can't be empty",
            'imageFiles.mimes' => "Image Format Must be jpeg,png,jpg,gif,svg",
            'imageFiles.max' => "Image Maximum Size 2MB",
            'latitude.numeric' => "Latitude Must be a Number",
            'langitude.numeric' => "longitude Must be a Number"
        
        
        ];
    }
}