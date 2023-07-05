<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-900">
            {{ __("Change your account picture") }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("You can change your account picture.") }}
        </p>
    </header>

    <form method="post" action="{{ route('profile.image.update') }}" enctype="multipart/form-data" class="mt-6 space-y-6">
        @csrf
        @method('put')

        <x-input-user-image></x-input-user-image>
        <x-input-error :messages="$errors->first('images')" class="mt-2" />

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'user-image-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>