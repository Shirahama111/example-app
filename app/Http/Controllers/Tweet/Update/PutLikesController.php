<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\UpdateLikesRequest;

use App\Models\Tweet;

// ユーザーIDも飛ばしているので誰がいいねしたかを保存する処理を今後で追加

class PutLikesController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdateLikesRequest $request)
    {

        $tweet = Tweet::where('id', $request->tweetId())->firstOrFail();
        $tweet->likes++;
        $tweet->save();
        return redirect()->route('tweet.index.each', ['tweetId' => $tweet->id])->with('feedback.success', "いいねしました");
    }
}
