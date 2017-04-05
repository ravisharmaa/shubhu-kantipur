<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiteConfigRequest extends FormRequest
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
            'footer_desc'   => 'required',
            'fb_link'       =>  'required',
            'g_plus'        =>  'required',
            'twitter'       =>  'required',
            'phone'         =>  'required',
            'email'         =>  'required',
            'website'       =>  'required'
        ];
    }
}
