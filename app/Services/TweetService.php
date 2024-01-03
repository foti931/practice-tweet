<?php

namespace App\Services;

use App\Models\Tweet;
use function Psy\debug;

class TweetService
{
    public function getTweets()
    {
        return Tweet::orderBy('created_at', 'DESC')->get();
    }

    public function checkOwnTweet(int $userId, int $tweetId) : bool
    {
        $tweet = Tweet::where(
               [
                   ['id', $tweetId],
                   ['user_id', $userId]
               ])
            ->first();

        return isset($tweet);
    }
}

