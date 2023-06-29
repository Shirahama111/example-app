<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight">
            {{ __('Tweet') }}
        </h2>
    </x-slot>



        @include('components.tweet-form')
        

        <div class="py-12">
            <div class="max-w-5xl mx-auto sm:px-6 lg:px-8 space-y-6">


                @foreach($tweets as $tweet)
                    <div id="{{$tweet->id}}" class="p-4 sm:p-8 bg-gray-200 shadow-xl sm:rounded-lg">
                        <div class="max-w-4xl mx-auto">
                            <div class="flex justify-between border-b-2 border-gray-400">
                                <x-label class="py-2 text-lg">
                                    {{ $tweet->user->name }}
                                </x-lavel>

                                <x-dropdown>
                                        <x-slot name="trigger">
                                            <!-- <x-secondary-button>・・・</x-secondary-button> -->
                                            <button type="button" class="bg-gray-800 hover:bg-gray-700 active:bg-gray-700 text-white block w-full px-2 py-1 text-left text-sm rounded-md focus:outline-none focus:ring 
                                            focus:ring-2 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150" role="menuitem" tabindex="-1">・・・</button>
                                        </x-slot>
                                        <x-slot name="content">
                                                @if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id)
                                                <button type="button" class="hover:bg-gray-100 text-gray-700 block w-full px-4 py-2 text-left text-sm rounded-md" role="menuitem" tabindex="-1" onclick="location.href='{{ route('tweet.update.index',['tweetId'=>$tweet->id]) }}'">編集</button>
                                                <form class="" action="{{ route('tweet.delete',['tweetId'=>$tweet->id]) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="hover:bg-gray-100 text-gray-700 block w-full px-4 py-2 text-left text-sm rounded-md">削除</button>
                                                </form>
                                                @else
                                                <form method="POST" action="{{ route('tweet.update.likes',['tweetId' => $tweet,'userId' => Auth::user()->id] ) }}" role="none">
                                                @method('PUT')
                                                @csrf  
                                                <button type="submit" class="hover:bg-gray-100 text-gray-700 block w-full px-4 py-2 text-left text-sm rounded-md" role="menuitem" tabindex="-1">いいね</button>
                                                </form>
                                                @endif
                                        </x-slot>
                                </x-dropdown>
                            </div>

                            <p class="my-5">{{ $tweet->content }}</p>

                            <div class="flex justify-center">
                                 @foreach($tweet->images as $image)
                                 <x-image-modal imageSrc="{{ asset('storage/images/' . $image->name) }}">
                                     <x-slot name="trigger">
                                            <img src="{{ asset('storage/images/' . $image->name) }}" alt="{{$image->name}}" id="tweet-image" class="w-32 h-32 mx-2 cursor-pointer">
                                     </x-slot>
                                 </x-image-modal>
                                @endforeach
                            </div>
                           
                            <x-label class="py-2 text-sm">{{ $tweet->created_at }} / Likes : <span class="font-bold">{{ $tweet->likes }}</span></x-lavel>
                        </div>
                    </div>
                @endforeach
                        

            </div>
        </div>
        


</x-app-layout>