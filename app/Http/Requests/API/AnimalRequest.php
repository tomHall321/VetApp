<?php

namespace App\Http\Requests\API;
use Illuminate\Foundation\Http\FormRequest;

class AnimalRequest extends FormRequest
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
            'name' => ['required', 'string'],
            "type" => ['required', 'string'],
            "date_of_birth"=> ['required'],
            "weight" => ['required', 'numeric'],
            "height" => ['required', 'numeric'],
            "biteyness" => ['required', 'digits_between:1,5'],
            "treatments" => ['required', 'array'],
            "treatments.*" => ['string', 'max:30']
        ];

    }
}