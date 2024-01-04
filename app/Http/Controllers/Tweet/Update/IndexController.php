<?php

namespace App\Http\Controllers\Tweet\Update;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tweet\UpdateRequest;
use App\Models\Tweet;
use App\Services\TweetService;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, TweetService $service)
    {
        $tweetId = (int)$request->route('tweetId');

        // 所持しているtweetかどうかを判定
        if(!$service->checkOwnTweet($request->user()->id, $tweetId)){
            throw new AccessDeniedHttpException();
        }

        $tweet = Tweet::where('id',$tweetId)->firstOrFail();
        return view('tweet.update')
                ->with('tweet', $tweet);
    }
}
