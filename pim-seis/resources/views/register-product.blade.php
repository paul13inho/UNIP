<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl font-logo text-gray-800 tracking-widest">
            {{ __('Cadastrar Produto') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>

            <form method="POST" action="{{ route('register') }}" class="">
            @csrf

            <!-- Name -->
                <div>
                    <x-input-label for="name" :value="__('Nome')" />
                    <x-text-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Position -->
                <div>
                    <x-input-label for="job_position_id" :value="__('Cargo')" />

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

                <div class="flex items-center justify-around">
                    <a class="underline text-xl uppercase font-logo text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('dashboard') }}">
                        {{ __('voltar') }}
                    </a>

                    <x-primary-button class="ml-4">
                        {{ __('cadastrar') }}
                    </x-primary-button>
                </div>
            </form>

        </x-main-content-wrapper>
    </div>





</x-app-layout>
