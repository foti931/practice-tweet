<?php

namespace Tests\Unit\Services;

use App\Services\TweetService;
use PHPUnit\Framework\TestCase;
use Mockery;

class TweetServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     * @runInSeparateProcess
     */
    public function test_check_own_test(): void
    {
        $tweetService = new TweetService();

        $mock = Mockery::mock('alias:App\Models\Tweet');
        $mock->shouldReceive('where->first')->andReturn((object)[
                'id' => 1,
                'user_id' =>1
        ]);

        $result = $tweetService->checkOwnTweet(1,1);
        $this->assertTrue($result);

        $result = $tweetService->checkOwnTweet(2,1);
        $this->assertFalse($result);
    }
}
