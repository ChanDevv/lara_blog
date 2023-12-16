<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'bail|required|unique:posts|max:255',
            'description' => 'required|max:255',
        ];
    }
    /**
 * Get the error messages for the defined validation rules.
 *
 * @return array
 */
public function messages()
{
    return [
        'title.required' => 'A title is required',
        'title.max:255' => 'Do not type over 255',
        'title.unique:posts' => 'Use another name',
        'description.required' => 'A message is required',
    ];
}


    // public function messages()
    // {
    //     $messages = [
    //         'title.required' => 'Put it your fucking Title!',
    //         'title.max:255' => "Fuck Don't enter above 255",
    //         'description.required' => 'Put it your fucking Title!',
    //     ];
    // }
}
