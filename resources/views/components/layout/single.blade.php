<div class="flex justify-center">
    <div class="w-full">
        @auth
            <form action="{{ route('logout')}}" method="post">
                @csrf
                <div class="flex justify-end p-4">
                    <button type="submit"
                        class="mt-2 text-sm text-gray-500">
                        ログアウト
                    </button>
                </div>
            </form>
        @endauth
        {{ $slot }}
    </div>
</div>
