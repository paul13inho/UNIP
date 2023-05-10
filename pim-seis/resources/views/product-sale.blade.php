<x-app-layout>
    <x-main-content-wrapper>
        <x-main-content-wrapper>
            <form action="{{ route('client-sale-next') }}" method="post" class="flex place-items-end justify-between space-x-8 mb-8">
                @csrf

                <div>
                    <x-input-label for="client_name" :value="__('Nome do Cliente')" />
                    <x-text-input id="client_name" type="text" name="client_cpf" value="{{ $clisale->client_id }}" readonly required autofocus autocomplete="client_cpf" />
                    <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="sale_code" :value="__('Código de venda')" />
                    <x-text-input id="sale_code" type="text" name="sale_code" value="{{ $clisale->sale_code }}" readonly required autofocus autocomplete="sale_code" />
                    <x-input-error :messages="$errors->get('sale_code')" class="mt-2" />
                </div>
            </form>
        </x-main-content-wrapper>

        {{-- SEPARADOR DE BURRO --}}
        <span class="py-2 h-2 w-full"> -</span>
        <x-main-content-wrapper>
            {{-- SEARCH PRODUCT --}}
            <form method="post" class="flex place-items-end space-x-8 mb-8">
                @csrf

                <div>
                    <x-input-label for="find_cpf" :value="__('Código de barras')" />
                    <x-text-input id="find_cpf" type="text" name="find_cpf" value="" required autofocus autocomplete="find_cpf" />
                    <x-input-error :messages="$errors->get('find_cpf')" class="mt-2" />
                </div>

                <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-blue-300 text-2xl rounded-xl">procurar</button>
            </form>

            {{-- ADD PRODUCT TO KART --}}
            <form action="{{ route('search') }}" method="post" class="flex place-items-end space-x-8">
                @csrf

                <x-text-input id="sale_code" type="text" name="sale_code" value="" min="0" required hidden autofocus autocomplete="sale_code" />

                <div class="w-32">
                    <x-input-label for="quantity" :value="__('Qtd')" />
                    <x-text-input id="quantity" type="number" name="quantity" :value="old('quantity')" min="0" required autofocus autocomplete="quantity" />
                    <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="bar_code" :value="__('Código')" />
{{--                    @foreach($find_product as $row)--}}
                        <x-text-input id="bar_code" type="text" name="bar_code" value="" required readonly autofocus autocomplete="bar_code" />
{{--                    @endforeach--}}
                    <x-input-error :messages="$errors->get('bar_code')" class="mt-2" />
                </div>

                <div class="w-32">
                    <x-input-label for="quantity" :value="__('Estoque')" />
{{--                    @foreach($find_product as $row)--}}
                        <x-text-input id="quantity" type="number" name="quantity" value="" readonly required autofocus autocomplete="quantity" />
{{--                    @endforeach--}}
                    <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                </div>

                <div>
                    <x-input-label for="description" :value="__('Descrição')" />
{{--                    @foreach($find_product as $row)--}}
                        <x-text-input id="description" type="text" name="description" value="" readonly required autofocus autocomplete="description" />
{{--                    @endforeach--}}
                    <x-input-error :messages="$errors->get('description')" class="mt-2" />
                </div>

                <div class="w-52">
                    <x-input-label for="unitary_price" :value="__('$ Unitário')" />
{{--                    @foreach($find_product as $row)--}}
                        <x-text-input id="unitary_price" type="number" name="unitary_price" value="" readonly required autofocus autocomplete="unitary_price" />
{{--                    @endforeach--}}
                    <x-input-error :messages="$errors->get('unitary_price')" class="mt-2" />
                </div>

                <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">adicionar</button>
            </form>

            {{-- SEPARADOR DE BURRO --}}
            <span class="py-2 h-2 w-full"> -</span>

            {{-- LISTA DE COMPRAS --}}
            <x-main-content-wrapper>
                <div class="flex place-items-end px-8 space-x-8">

                    <div>
                        <x-input-label for="bar_code" :value="__('Código')" />
                        <x-text-input class="bar_code" type="text" name="bar_code" value=" " disabled required autofocus autocomplete="bar_code" />
                        <x-input-error :messages="$errors->get('bar_code')" class="mt-2" />
                    </div>

                    <div class="w-32">
                        <x-input-label for="quantity" :value="__('Qtd')" />
                        <x-text-input class="quantity" type="number" name="quantity" value=" " disabled required autofocus autocomplete="quantity" />
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                    </div>

                    <div>
                        <x-input-label for="description" :value="__('Descrição')" />
                        <x-text-input class="description" type="text" name="description" value=" " disabled required autofocus autocomplete="description" />
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="w-52">
                        <x-input-label for="unitary_price" :value="__('$ Unitário')" />
                        <x-text-input class="unitary_price" type="number" name="unitary_price" value=" " disabled required autofocus autocomplete="unitary_price" />
                        <x-input-error :messages="$errors->get('unitary_price')" class="mt-2" />
                    </div>

                    <div class="w-52">
                        <x-input-label for="bulky_price" :value="__('$ Total')" />
                        <x-text-input class="bulky_price" type="number" name="bulky_price" value=" " disabled required autofocus autocomplete="bulky_price" />
                        <x-input-error :messages="$errors->get('bulky_price')" class="mt-2" />
                    </div>
                    <button class="bg-red-600 text-white text-5xl px-2 rounded-xl">-</button>
                </div>
            </x-main-content-wrapper>
        </x-main-content-wrapper>


    </x-main-content-wrapper>
</x-app-layout>
