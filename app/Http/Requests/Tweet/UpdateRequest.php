<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'tweet' => ['required', 'max:140'],
        ];
    }

    // ツイート文を取得
    public function tweet(): String
    {
        return $this->input('tweet');
    }

    // ツイートIDを取得
    public function tweetId(): int
    {
        return (int) $this->route('tweetId');
    }
}
