<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class AppointmentRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required','string', 'min:2'],
            'surname' => ['required', 'string', 'min:2' ],
            'email' => ['required', 'string', 'email', 'min:5'],
            'phone' => ['required','numeric' ],
            'kinetotherapeut_id' => ['required', 'exists:kinetotherapists,id'],
            'data' => ['required'],
            'start_time' => ['required'],
        ];
    }
}