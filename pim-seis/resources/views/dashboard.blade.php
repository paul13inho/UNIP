<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl font-logo text-gray-800 tracking-widest">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto bg-white space-y-12 p-12 rounded-2xl">

            <div class="text-gray-900 bg-gray-100 rounded-2xl">
                <a href="/register-product" class="font-logo uppercase px-8 my-8 inline-flex text-4xl">cadastrar produto</a>
            </div>

            <div class="text-gray-900 bg-gray-100 rounded-2xl">
                <a href="/register-client" class="font-logo uppercase px-8 my-8 inline-flex text-4xl">cadastrar cliente</a>
            </div>

            <div class="text-gray-900 bg-gray-100 rounded-2xl">
                <a href="/make-sale" class="font-logo uppercase px-8 my-8 inline-flex text-4xl">efetuar venda</a>
            </div>

        </div>
    </div>
</x-app-layout>
