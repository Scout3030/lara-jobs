<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class JobPostRequest extends FormRequest
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
            "title" => "required|min:10",
            "job_type_id" => [
                'required',
                Rule::exists('job_types', 'id')
            ],
            "deadline" => "required|date|after:now",
            "salary" => "nullable|min:1",
            "vacancies" => "min:1",
            "experience_id" => [
                'required',
                Rule::exists('experiences', 'id')
            ],
            "tag" => [
                'required',
                Rule::in([1,2,3])
            ],
            "country_id" => [
                'nullable',
                Rule::exists('countries', 'id'),
                Rule::requiredIf(function () {
                    return request()->province_id == null && request()->department_id == null && request()->country_id == null;
                })
            ],
            "department_id" => [
                'nullable',
                Rule::exists('departments', 'id')
            ],
            "province_id" => [
                'nullable',
                Rule::exists('provinces', 'id')
            ],
            "description" => "required|min:10",
            "how_to_apply" => "required|min:10",
            "technologies" => "required"
        ];
    }
}
