@props([
    'tweets' => []
])
<div class="big-white rounded-md shadow-sm mt-5 mb-5">
    <ul>
        @foreach($tweets as $tweet /** @var \App\Models\Tweet $tweet */)
            <li class="border-b last:border-b-0 border-gray-200 p-4 flex items-start justify-between">
                <div>
                    <span class="inline-block rounded-full text-gray-600 bg-gray-100 px-2 py-1 text-xs mb-2">{{ $tweet->user->name }}</span>
                    <p class="text-gray-600">{!! nl2br(e($tweet->content)) !!}</p>
                </div>
                <div>
                    <x-tweet.options :tweetId="$tweet->id" :userId="$tweet->user_id"></x-tweet.options>
                </div>
            </li>
        @endforeach
    </ul>
</div>


