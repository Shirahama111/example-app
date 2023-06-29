<?php

namespace App\Http\Requests\Tweet;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLikesRequest extends FormRequest
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
            //
        ];
    }

    // ログイン中のユーザーIDを取得
    public function userId(): int
    {
        return (int) $this->route('userId');
    }

    // ツイートIDを取得
    public function tweetId(): int
    {
        return (int) $this->route('tweetId');
    }
}
