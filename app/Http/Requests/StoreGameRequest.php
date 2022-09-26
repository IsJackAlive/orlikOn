<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
            'name' => 'required|string|min:3|max:25',
            'date' => 'required|date',
            'max_players' => 'required|integer|min:1',
            'description' => 'required|string|min:3|max:250',
            'hour_start' => 'required|integer|min:0|max:24',
            'hour_end' => 'required|integer|min:0|max:24',
            'user_id' => 'min:0',
            'pitch_id' => 'min:0',
        ];
    }
}
