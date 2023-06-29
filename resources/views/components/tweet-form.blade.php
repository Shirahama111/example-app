@auth
<div class="max-w-4xl mx-auto p-4 sm:p-8 bg-gray-200 shadow-md sm:rounded-lg">
    <form action="{{ route('tweet.create') }}" method="post" enctype="multipart/form-data">
        @csrf
        <x-label for="tweet-content">投稿フォーム</x-input-label><br>
        <div class="w-full"><x-textarea-input class="w-full" rows="3" name="tweet" id="tweet-content" type="text" placeholder="つぶやきを入力"></x-textarea-input></div>
        @error('tweet')
        <p style="color: red;">{{ $message }}</p>
        @enderror

        <div>
            <x-input-images />
        </div>

        <div class="flex justify-end my-2">
            <x-primary-button>
                {{ __('投稿') }}
            </x-primary-button>
        </div>
    </form>
</div>
@endauth
