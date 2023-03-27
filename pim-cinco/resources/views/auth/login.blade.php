<x-guest-layout>

    <div class="container-login">

        <div class="header">
            <p>Colégio Vencer Sempre</p>
            <p>{{\Illuminate\Support\Carbon::now()->format('d-m-Y')}}</p>
        </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="mt-6" method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('E-mail')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Senha')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>



        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-3 absolute bottom-14">
                {{ __('Log in') }}
            </x-primary-button>

        </div>
    </form>

    <a href="/">
        <x-primary-button class="ml-4 absolute bottom-14">
            {{ __('Voltar') }}
        </x-primary-button>
    </a>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>
</x-guest-layout>
