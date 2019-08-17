<!-- Authentication Links -->
    <li><a href="{{ route('home.index') }}">Processos</a></li>

        <li><a href="">Agenda</a></li>


    <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
            Cadastros <span class="caret"></span>
        </a>

        <ul class="dropdown-menu">
            <li><a href="">Agenda</a></li>
            <li><a href="">Andamentos</a></li>
            <li><a href="">Tribunais</a></li>
            <li><a href="">Buscas em Tribunais</a></li>
            <li><a href="">Juizes</a></li>
            <li><a href="">Ações</a></li>
            <li><a href="">Revisões</a></li>
            <li><a href="">Leis</a></li>
            <li><a href="">Termos para Busca</a></li>


            <li><a href="">Usuários</a></li>
        </ul>
    </li>
@guest
    {{--<li><a href="{{ route('login') }}">Login</a></li>--}}
    {{--<li><a href="{{ route('register') }}">Register</a></li>--}}
@else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu">
                <li>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                    >
                       Sair
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
@endguest
