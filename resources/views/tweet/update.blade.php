<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tweet - 編集') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-4 sm:p-8 bg-gray-200 shadow-md sm:rounded-lg">
        <form action="{{ route('tweet.update.put',['tweetId' => $tweet]) }}" method="post">
            @method('PUT')
            @csrf
            <x-label for="tweet-content">編集フォーム</x-input-label><br>
            <div class="w-full">
                <x-textarea-input class="w-full" rows="3" name="tweet" id="tweet-content" type="text" placeholder="{{ $tweet->content }}"></x-textarea-input>
            </div>
            @error('tweet')
            <p style="color: red;">{{ $message }}</p>
            @enderror
            <div class="flex justify-end">
                <x-secondary-button class="bg-gray-600 text-white hover:bg-gray-500 mx-1" onclick="location.href='{{ route('tweet.index') }}'">戻る</x-secondary-button>
                <x-primary-button class="bg-green-600 text-white hover:bg-green-500 focus:bg-green-500 active:bg-green-500 focus:ring-green-500">
                    {{ __('編集') }}
                </x-primary-button>
            </div>
        </form>
    </div>


</x-app-layout>


