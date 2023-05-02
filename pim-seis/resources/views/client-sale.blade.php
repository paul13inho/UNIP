<x-app-layout>
    <x-main-content-wrapper>

        <form method="post" class="flex place-items-end space-x-8 mb-8">
            @csrf
            {{-- SEARCH ENGINE --}}
            <div>
                <x-input-label for="find_cpf" :value="__('CPF')" />
                <x-text-input id="find_cpf" type="text" name="find_cpf" value="" required autofocus autocomplete="find_cpf" />
                <x-input-error :messages="$errors->get('find_cpf')" class="mt-2" />
            </div>

            <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-blue-300 text-2xl rounded-xl">procurar</button>
        </form>

        <form method="post" class="flex place-items-end space-x-8 mb-8">
            @csrf
            {{-- SEARCH ENGINE --}}
            @foreach($find_cpf as $row)
                <x-text-input id="client_id" type="text" name="client_id" value="{{ $row->id }}" required hidden disabled autofocus autocomplete="client_cpf" />
            @endforeach

            <div>
                <x-input-label for="client_name" :value="__('Nome do Cliente')" />
                @foreach($find_cpf as $row)
                    <x-text-input id="client_name" type="text" name="client_cpf" value="{{ $row->name }}" required disabled autofocus autocomplete="client_cpf" />
                @endforeach
                <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
            </div>

            <div>
                <x-input-label for="sale_code" :value="__('Código de venda')" />
                <x-text-input id="sale_code" type="text" name="sale_code" value="{{ random_int(min:1000, max: 100000) }}" required autofocus autocomplete="sale_code" />
                <x-input-error :messages="$errors->get('sale_code')" class="mt-2" />
            </div>

            <button class="px-10 py-2 flex justify-center text-white font-logo uppercase bg-yellow-600 text-2xl rounded-xl">iniciar venda</button>
        </form>
    </x-main-content-wrapper>
</x-app-layout>
