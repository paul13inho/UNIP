<x-app-layout>
    <x-main-content-wrapper>

        <x-main-content-wrapper>
            <div class="flex font-logo text-2xl justify-around">
                <p>Client: {{ $clisale->name }}</p>
                <p>Sale Code: {{ $clisale->sale_code }}</p>
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

                        <form action="{{ route('shopping-cart-delete') }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="text" name="product_id" value="{{ $row->product_id }}" hidden>
                            <input type="text" name="sale_code" value="{{ $row->sale_code }}" hidden>
                            <input type="text" name="client_name" value="{{ $clisale->name }}" hidden>
                            <td><button class="bg-red-600 text-white px-1 rounded-full font-logo text-xl">-</button></td>
                        </form>

                    </tr>
            @endforeach
            </table>
        </x-main-content-wrapper>

        <div class="flex justify-center">
            <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">finalizar venda</button>
        </div>
    </x-main-content-wrapper>
</x-app-layout>