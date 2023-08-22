<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('User Avator!') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            {{ __("add or update user avator") }}
        </p>
    </header>

    @if(session('message'))
        <div class="text-green-500 m-2">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('profile.avator')}}" method="post">
        @method('patch')
        @csrf

        <div>
            <x-input-label for="name" value="Avator" />
            <x-text-input id="avator" name="avator" type="file" class="mt-1 block w-full" :value="old('avator', $user->name)" required autofocus autocomplete="avator" />
            <x-input-error class="mt-2" :messages="$errors->get('avator')" />
        </div>

        <div class="flex items-center gap-4 mt-4">
            <x-primary-button> {{ __('Save') }} </x-primary-button>
        </div>
    </form>
</section>