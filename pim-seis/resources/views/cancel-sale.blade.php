<x-app-layout>

    <x-slot name="header" class="header">
        <h2>
            {{ __('Cancelamento de Venda') }}
        </h2>
    </x-slot>

    <div class="m-8">
        <x-main-content-wrapper>

            <x-main-content-wrapper>
                <div class="flex font-logo text-2xl justify-around">
                    <p>Data: </p>
                    <p>Código da venda: </p>
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

{{--                    @foreach($find_product_sale as $row)--}}
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>

                            <form action="" method="post">
                                @csrf
                                @method('delete')
                                <input type="text" name="product_id" value="" hidden>
                                <input type="text" name="sale_code" value="" hidden>
                                <input type="text" name="client_name" value="" hidden>
                                <td><button class="bg-red-600 text-white px-1 rounded-full font-logo text-xl">-</button></td>
                            </form>

                        </tr>
{{--                    @endforeach--}}
                </table>
            </x-main-content-wrapper>

            <div class="flex justify-center">
                <button class="px-10 py-2 text-white font-logo uppercase bg-green-300 text-2xl rounded-xl">finalizar venda</button>
            </div>
        </x-main-content-wrapper>
    </div>
</x-app-layout>
