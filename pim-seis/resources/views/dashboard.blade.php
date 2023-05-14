<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl font-logo text-gray-800 tracking-widest">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto rounded-2xl grid grid-cols-3 gap-8">

            <a href="/register-product" class="dashboard">
                <img class="main-content-img" src="{{asset('img/product.png')}}" alt="">
                <p>cadastrar produto</p>
            </a>

            <a href="/register-client" class="dashboard">
                <img class="main-content-img" src="{{asset('img/client.png')}}" alt="">
                <p>cadastrar cliente</p>
            </a>

            <a href="/client-sale" class="dashboard">
                <img class="main-content-img" src="{{asset('img/sell.png')}}" alt="">
                <p>efetuar <br> venda</p>
            </a>

            <a href="/search-price" class="dashboard">
                <img class="main-content-img" src="{{asset('img/search.png')}}" alt="">
                <p>consultar preço</p>
            </a>

            <a href="#" class="dashboard">
                <img class="main-content-img" src="{{asset('img/cancel.png')}}" alt="">
                <p>cancelar <br> venda</p>
            </a>

            <a href="#" class="dashboard">
                <img class="main-content-img" src="{{asset('img/stock.png')}}" alt="">
                <p>estoque</p>
            </a>



        </div>
    </div>
</x-app-layout>
