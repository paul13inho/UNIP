<x-app-layout>

    <div class="container-see-and-cancel">
        <div class="header">
            <p>Seus Agendamentos:</p>
            <p>{{\Illuminate\Support\Carbon::now()->format('d-m-Y')}}</p>
        </div>

        <div class="bookings overflow-x-hidden w-booking">
            <ul>


                @foreach($bookings as $booking)

                    <form method="POST" action="/reservations">
                        @csrf
                        @method('delete')
                        <input type="hidden" name="booking_id" value="{{ $booking->id }}">
                        <li class="register flex justify-between my-4 p-2 bg-purple-300 place-items-center pl-4 rounded-lg">
                        <div>
                            <div class="flex justify-between">
                                <p>Turno: {{$booking->dayShift->name}} </p>
                                <p>{{$booking->classShift->name}}</p>
                            </div>
                            <p>{{$booking->equipment->name}}</p>
                            <p>Reservado para: {{$booking->booked_for}}</p>
                        </div>
                            <button class="rounded-full w-8 h-4 flex justify-center place-items-center">X</button>
                    </li>
                    </form>
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


