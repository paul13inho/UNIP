<x-app-layout>

    <div class="container-booking">

        <div class="header mb-4">
            <p>{{\Illuminate\Support\Carbon::now()->format('d-m-Y')}}</p>
        </div>

        <form method="POST" action="">

            @csrf

            <div>
                <x-input-label for="booking_date" :value="__('Escolha o dia:')" />
                <input type="date" name="booked_for" id="booked_for">
            </div>

            <div>
                <x-input-label for="day_shift" :value="__('Escolha o turno:')" />
                <select name="day_shift" id="day_shift">
                    @foreach($dayShift as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-input-label for="class_shift" :value="__('Escolha a aula:')" />
                <select name="class_shift" id="class_shift">
                    @foreach($classShift as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-input-label for="equipment" :value="__('Escolha o equipamento:')" />
                <select name="equipment" id="equipment">
                    @foreach($equipment as $row)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="flex justify-end mt-4">
                <button class="confirm">Confirmar</button>
            </div>
        </form>

        <a href="{{ route('dashboard') }}">
            <div class="ml-4 text-2xl absolute bottom-14">
                <button class="confirm">Voltar</button>
            </div>
        </a>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

</x-app-layout>
