<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use function Illuminate\Support\Facades\Response;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        $tweet = $tweetService->getTweets();

        return view('tweet.index')
            ->with('tweets', $tweet);
    }
}
