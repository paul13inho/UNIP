<x-app-layout>

    <div class="container-see-and-cancel">
        <div class="header">
            <p>Seus Agendamentos:</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="bookings">
            <p class="insert-from-db">vem do banco</p>
            <p class="cancel">X</p>
        </div>

        <a href="{{ route('dashboard') }}">
            <div class="ml-4 text-2xl flex justify-center">
                <button class="confirm">Voltar</button>
            </div>
        </a>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

</x-app-layout>
