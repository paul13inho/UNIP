<x-app-layout>

    <x-main-content-wrapper>
        <x-main-content-wrapper>
            {{-- SEARCH & ADD --}}
            <div class="w-1/3 flex-col mx-auto">
                <form action="">
                    <div class="flex space-x-8">
                        <div>
                            <x-input-label for="product_code" :value="__('Código')" />
                            <x-text-input id="product_code" type="text" name="product_code" :value="old('product_code')" required autofocus autocomplete="product_code" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="w-32">
                            <x-input-label for="quantity" :value="__('Qtd')" />
                            <x-text-input id="quantity" type="number" name="quantity" :value="old('quantity')" required autofocus autocomplete="quantity" />
                            <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex justify-center space-x-8 my-8">
                        <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-blue-300 text-2xl rounded-xl">procurar</button>
                        <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">adicionar</button>
                    </div>
                </form>

            </div>

            {{-- OTHER DETAILS --}}
            <div class="flex place-items-center space-x-8 justify-center">
                <div class="w-32">
                    <x-input-label for="quantity" :value="__('Estoque')" />
                    <x-text-input id="quantity" type="number" name="quantity" :value="old('quantity')" disabled required autofocus autocomplete="quantity" />
                    <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Descrição')" />
                    <x-text-input id="description" type="text" name="description" :value="old('description')" disabled required autofocus autocomplete="description" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="w-52">
                    <x-input-label for="unitary_price" :value="__('$ Unitário')" />
                    <x-text-input id="unitary_price" type="number" name="unitary_price" :value="old('unitary_price')" disabled required autofocus autocomplete="unitary_price" />
                    <x-input-error :messages="$errors->get('unitary_price')" class="mt-2" />
                </div>

                <div class="w-52">
                    <x-input-label for="bulky_price" :value="__('$ Total')" />
                    <x-text-input id="bulky_price" type="number" name="bulky_price" :value="old('unitary_price')" disabled required autofocus autocomplete="bulky_price" />
                    <x-input-error :messages="$errors->get('bulky_price')" class="mt-2" />
                </div>
            </div>
        </x-main-content-wrapper>

        <span class="py-2 h-2 w-full"> -</span>

        <x-main-content-wrapper>
            <div class="flex place-items-center justify-around">
                <div>
                    <x-text-input id="product_code" type="text" name="product_code" :value="old('product_code')" required autofocus autocomplete="product_code" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <div class="w-32">
                    <x-text-input id="quantity" type="number" name="quantity" :value="old('quantity')" required autofocus autocomplete="quantity" />
                    <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                </div>

                <div>
                    <x-text-input id="description" type="text" name="description" :value="old('description')" disabled required autofocus autocomplete="description" />
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="w-52">
                    <x-text-input id="unitary_price" type="number" name="unitary_price" :value="old('unitary_price')" disabled required autofocus autocomplete="unitary_price" />
                    <x-input-error :messages="$errors->get('unitary_price')" class="mt-2" />
                </div>

                <div class="w-52">
                    <x-text-input id="bulky_price" type="number" name="bulky_price" :value="old('unitary_price')" disabled required autofocus autocomplete="bulky_price" />
                    <x-input-error :messages="$errors->get('bulky_price')" class="mt-2" />
                </div>

                <button class="bg-red-600 text-white text-5xl px-2 rounded-xl">-</button>
            </div>
        </x-main-content-wrapper>
    </x-main-content-wrapper>

</x-app-layout>
