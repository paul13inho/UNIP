<x-app-layout>

    <div class="container-booking">

        <div class="header mb-4">
            <p>*-*Data de hoje*-*</p>
        </div>

        <form action="">
            <div>
                <p>Escolha o equipamento:</p>
                <select name="" id="">
                    <option value="">DVD-1</option>
                    <option value="">DVD-2</option>
                    <option value="">DVD-3</option>
                </select>
            </div>

            <div>
                <p>Escolha o dia:</p>
                <input type="date">
            </div>

            <div>
                <p>Escolha o turno:</p>
                <select name="" id="">
                    <option value="">Matutino</option>
                    <option value="">Vespertino</option>
                    <option value="">Noturno</option>
                </select>
            </div>

            <div>
                <p>Escolha a aula:</p>
                <select name="" id="">
                    <option value="">Aula 1</option>
                    <option value="">Aula 2</option>
                    <option value="">Aula 3</option>
                    <option value="">Aula 4</option>
                    <option value="">Aula 5</option>
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
