<?php

namespace App\Http\Request;

use Illuminate\Foundation\Http\FormRequest;

class ArticlesCommentRequest extends FormRequest
{
    public function authorize() : bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'author_email' => ['required','string', 'email'],
            'messageText' => ['string', 'min:3', 'required']
        ];
    }
}
