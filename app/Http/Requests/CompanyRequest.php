<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
        switch ($this->method()) {
            case 'GET':
            case 'DELETE':
                return [];
            case 'POST': {
                return [
                    'title' => 'required|min:5',
                    'biography' => "nullable|min:10",
                    'website_url' => "nullable|url",
                    'logo' => 'required|image|mimes:jpg,png'
                ];
            }
            case 'PUT': {
                return [
                    'title' => 'required|min:5',
                    'biography' => "nullable|min:10",
                    'website_url' => "nullable|url"
                ];
            }
        }
    }
}
