<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5|max:255',
            'description' => 'nullable|min:5',
            'thumb' => 'nullable|url',
            'price' => 'required|min:3|max:20',
            'sale_date' => 'required|date',
            'series' => 'required|min:3|max:100',
            'type' => 'required',
        ];
    }
    public function messages()
    {
        return [

            'title.required' => 'Il campo Title è obbligatorio',
            'title.min' => 'Il campo Title deve avere almeno :min caratteri',
            'title.max' => 'Il campo Title deve avere massimo :max caratteri',
            'description.min' => 'Il campo Description deve avere minimo :min caratteri',
            'thumb.url' => 'Il campo Image Url deve contenere una url valida',
            'price.required' => 'Il campo Price è obbligatorio',
            'price.min' => 'Il campo Price deve avere almeno :min caratteri',
            'price.max' => 'Il campo Price deve avere massimo :max caratteri',
            'sale_date.required' => 'Il campo Sale Date è obbligatorio',
            'sale_date.date' => 'La data deve essere inserita in questo formato: YYYY-MM-DD ',
            'series.required' => 'Il campo Series è obbligatorio',
            'series.min' => 'Il campo Series deve avere almeno :min caratteri',
            'series.max' => 'Il campo Series deve avere massimo :max caratteri',
            'type.required' => 'Il campo Type è obbligatorio',

        ];
    }
}
