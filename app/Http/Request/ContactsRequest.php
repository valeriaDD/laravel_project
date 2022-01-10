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

            'email' => ['string', 'email', 'required'],
            'name' => ['string', 'min:2', 'required'],
            'message' => ['string', 'min:2', 'required']
        ];
    }
}