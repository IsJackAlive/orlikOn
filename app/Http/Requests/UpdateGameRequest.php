<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGameRequest extends FormRequest
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
            // Tak było na labach
            'name' => 'required|string|min:3|max:25',
            'date' => 'required|date',
            'max_players' => 'required|integer|min:1',
            'description' => 'required|string|min:3|max:250',
            'hour_start' => 'required|date_format:H:i',
            'hour_end' => 'required|date_format:H:i|after:hour_start',
            // 'user_id' => $this->game->user,
            // 'pitch_id' => $this->game->pitch,
        ];
    }
}
