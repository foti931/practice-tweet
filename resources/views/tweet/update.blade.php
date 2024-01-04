<x-layout>
    <x-layout.single>
        <h2 class="text-center text-blue-500 text-4xl font-bold mt-8 mb-8">つぶやきアプリ</h2>
    </x-layout.single>
    @php(
        $breadcrumbs = [
            ['href' => route('tweet.index'), 'label'=>'TOP'],
            ['href' => '#', 'label'=>'編集'],
        ]
    )
    <x-element.breadcrumbs :breadcrumbs="$breadcrumbs"></x-element.breadcrumbs>
    <x-tweet.form.put :tweet="$tweet"></x-tweet.form.put>
</x-layout>
