<x-app-layout>
    <x-main-content-wrapper>

        <x-main-content-wrapper>
            <div class="flex font-logo text-2xl justify-around">
                <p>Client:</p>
                <p>Sale Code:</p>
            </div>
        </x-main-content-wrapper>

        <x-main-content-wrapper>

            <table>
                <tr>
                    <th>código</th>
                    <th>qtd</th>
                    <th>descrição</th>
                    <th>$ unitário</th>
                    <th>$ total</th>
                </tr>

            @foreach($find_product_sale as $row)
                    <tr>
                        <td>{{ $row->product_id }}</td>
                        <td>{{ $row->quantity }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->price }}</td>
                        <td>{{ $row->total_price }}0</td>
                        <td><button class="bg-red-600 text-white px-1 rounded-full font-logo text-xl">-</button></td>
                    </tr>
            @endforeach
            </table>
        </x-main-content-wrapper>

        <div class="flex justify-around">
            <a href="{{ route('product-sale') }}" class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">voltar</a>
            <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">finalizar venda</button>
        </div>




    </x-main-content-wrapper>
</x-app-layout>
