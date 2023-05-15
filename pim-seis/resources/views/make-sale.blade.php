<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Efetuar Venda') }}
        </h2>
    </x-slot>



    <div class="m-8">
        <x-main-content-wrapper>

            <x-main-content-wrapper>
                <div class="flex font-logo text-2xl justify-around">
                    <p>Client: {{ $clisale->name }}</p>
                    <p>Sale Code: {{ $clisale->sale_code }}</p>
                    <p>Data: {{\Illuminate\Support\Carbon::now()->format('d-m-Y')}}</p>
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
                            <td>{{ $row->bar_code }}</td>
                            <td>{{ $row->quantity }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->price }}</td>
                            <td>{{ $row->total_price }}</td>
                        </tr>
                    @endforeach
                     <tr class="flex justify-between">
                         <td class="font-bold">Total</td>
                         <td class="font-bold">{{$total}}</td>

                     </tr>

                </table>
            </x-main-content-wrapper>

            <div class="flex justify-center">
                <form action="" method="">
                    @csrf
                    <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">finalizar venda</button>
                </form>
            </div>
        </x-main-content-wrapper>
    </div>


</x-app-layout>
