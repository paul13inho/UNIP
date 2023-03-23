<x-app-layout>

    <div class="container-see-and-cancel">
        <div class="header">
            <p>Seus Agendamentos:</p>
            <p>*-*Data de hoje*-*</p>
        </div>

        <div class="bookings">
            <ul>

                @foreach($booking as $row)
                    <li class="flex justify-between my-4 p-2 bg-purple-300 place-items-center pl-4 w-booking rounded-lg">
                        <div>{{$row->day_shift_id}}</div>
                        <div>{{$row->class_shift_id}}</div>
                        <div>{{$row->equipment_id}}</div>
                        <div>{{$row->booked_for}}</div>
                        <p class="cancel">X</p>

                    </li>

                @endforeach
            </ul>

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
