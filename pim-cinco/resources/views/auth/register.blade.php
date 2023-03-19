<x-guest-layout>

    <div class="container-login">

        <div class="header">
            <p>Colégio Vencer Sempre</p>
            <p>*-*Data de hoje*-*</p>
        </div>


        <form class="mt-6" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Nome')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('E-mail')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Senha')" />

                <x-text-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirmar Senha')" />

                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                              type="password"
                              name="password_confirmation" required autocomplete="new-password" />

                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">



                <x-primary-button class="ml-4 text-2xl absolute bottom-14">
                    {{ __('Cadastrar') }}
                </x-primary-button>
            </div>
        </form>

        <a href="/">
            <x-primary-button class="ml-4 text-2xl absolute bottom-14">
                {{ __('Voltar') }}
            </x-primary-button>
        </a>


        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>
</x-guest-layout>
