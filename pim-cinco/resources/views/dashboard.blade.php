<x-app-layout>

    <div class="container-home">

        <div class="header">
            <p>Bem vindo <span class="namePerson">{{ Auth::user()->name }}</span></p>
            <p>{{\Illuminate\Support\Carbon::now()->format('d-m-Y')}}</p>
        </div>

        <div class="options">


            <div>
                <a href="/booking">
                    <button class="book">
                        Agendar
                    </button>
                </a>
            </div>


            <div>
                <a href="/reservations">
                    <button class="see">
                        Vizualizar
                    </button>
                </a>
            </div>

            <a href="/">
                <div>
                    <button class="see">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Sair') }}
                            </a>
                        </form>
                    </button>
                </div>
            </a>
        </div>

        <div class="footer">
            <p>2023. All rights reserved</p>
        </div>
    </div>

</x-app-layout>
