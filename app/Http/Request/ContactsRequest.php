<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ContactsRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules(): array
    {
        return [

            'email' => ['required','string', 'email'],
            'name' => ['required', 'string', 'min:2' ],
            'gender' => ['required', 'in:Feminin,Masculin,Altele'],
            'messageText' => ['string', 'min:2', 'required']
        ];
    }
}