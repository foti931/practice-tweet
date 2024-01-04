@component('mail::message')
# 新しいユーザーが追加されました。

@component('mail::panel')
{{ $toUser->name }}さん、
新しいユーザー【{{ $newUser->name }}】が参加しました！
@endcomponent

@component('mail::button', ['url' => route('tweet.index')])
    つぶやきを見に行く
@endcomponent

@endcomponent
