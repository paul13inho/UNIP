<x-app-layout>

    <div class="container-booking">

        <div class="header mb-4">
            <p>*-*Data de hoje*-*</p>
        </div>

        <form action="">
            <div>
                <x-input-label for="booking_date" :value="__('Escolha o dia:')" />
                <input type="date" name="booking_date" id="booking_date">
            </div>

            <div>
                <x-input-label for="day_shift" :value="__('Escolha o turno:')" />
                <select name="day_shift" id="day_shift">
                    @foreach($data as $row => $data)
                        <option value="{{$row->id}}">{{$row->name}}</option>
                    @endforeach
                </select>
            </div>

            <div>
                <x-input-label for="class_shift" :value="__('Escolha a aula:')" />
                <select name="class_shift" id="class_shift">
                    <option value="1">Aula 1</option>
                    <option value="2">Aula 2</option>
                    <option value="3">Aula 3</option>
                    <option value="4">Aula 4</option>
                    <option value="5">Aula 5</option>
                </select>
            </div>

            <div>
                <x-input-label for="equipment" :value="__('Escolha o equipamento:')" />
                <select name="equipment" id="equipment">
                    <option value="1">DVD - 1</option>
                    <option value="2">DVD - 2</option>
                    <option value="3">DVD - 3</option>
                    <option value="4">Projetor - 1</option>
                    <option value="5">Projetor - 2</option>
                    <option value="6">Projetor - 3</option>
                    <option value="7">Aparelho de som - 1</option>
                    <option value="8">Aparelho de som - 2</option>
                    <option value="9">Aparelho de som - 3</option>
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
