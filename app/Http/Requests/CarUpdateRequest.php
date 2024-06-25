<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarUpdateRequest extends FormRequest
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
            'mark' => 'required|string|min:3',
            'model' => 'required|string|max:15',
            'year' => 'nullable|integer|between:1980,' . date('Y'),
            'description' => 'nullable|string',
        ];
    }

    public function messages()
    {
        return [
            'mark.required' => 'Пожалуйста, укажите марку авто',
            'year.*' => 'Неправильный год',
            'year.between' => 'Направильный диапазон для года',
        ];
    }
}
