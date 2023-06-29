@props([
    'imageSrc',
    ])


{{$trigger}}

<div id="image-modal" class="hidden fixed top-0 left-0 right-0 z-50 p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-gray-900 bg-opacity-50">
    <div class="absolute inset-x-2/4 -translate-x-2/4 inset-y-1/4 w-full max-w-md max-h-full">
        <img src="{{$imageSrc}}" alt="{{$imageSrc}}" class="">
    </div>
</div>