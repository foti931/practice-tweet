@props([
    'buttonName' => '編集',
    'tweet'
])
@auth
    <div class="p-4">
        <form action="{{route('tweet.update.update',['tweetId' => $tweet->id]) }}" method="post">
            @method('PUT')
            @csrf
            <div class="mt-1">
                <textarea
                    id="tweet-content"
                    rows="3"
                    name="tweet"
                    class="focus:ring-blue-400 focus:border-blue-400 mt-1 block w-full sm:text-sm border border-gray-300 rounded-md p-2"
                    placeholder="つぶやきを入力してください。">{{ isset($tweet) ? $tweet->content : "" }}</textarea>
            </div>
            <p class="mt-2 text-sm text-gray-500">140文字まで</p>
            @error('tweet')
                <x-alert.error>{{ $message }}</x-alert.error>
            @enderror
            <div class="flex flex-wrap justify-end">
                <x-element.button>
                    {{ $buttonName }}
                </x-element.button>
            </div>
        </form>
    </div>
@endauth
@guest
<x-guest></x-guest>
@endguest
