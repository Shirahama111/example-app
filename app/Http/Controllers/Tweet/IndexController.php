<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tweet;
use App\Services\TweetService;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // return view('tweet.index')
        //     ->with('name', 'Laravel')
        //     ->with('name2', 'PHP');
        $tweetService = new TweetService();
        $tweets = $tweetService->getTweets();
        // dump($tweets);
        // exit();
        return view('tweet.index')->with('tweets', $tweets);
    }
}
