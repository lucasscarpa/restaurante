@inject('sidebar', 'App\Lib\Sidebar')

<div id="user-left-box" class="clearfix toggle-nav dropdown profile2-dropdown">
    <img src="{{ url('cube/img/samples/imagem_avatar.png') }}" alt="" />
    <div class="user-box">
        <span class="name">
            <a href="#" class="table-link" data-toggle="popover" data-trigger="hover" data-placement="top" data-container="body" data-content="{{session()->get('usuario.nome')}}">
                Nome do usuário
            </a>
        </span>
    </div>
</div>

<div id="sidebar-nav" class="toggle-nav">
    <ul class="nav nav-pills nav-stacked">

        <li @if ($sidebar->name('index')) class="active" @endif>
            <a href="{{ route('index') }}">
                <i class="fa fa-building"></i>
                <span>Cont. Alv. Estrutural</span>
            </a>
        </li>

        <li @if ($sidebar->prefix('administrativo')) class="open" @endif>
            <a href="#" class="dropdown-toggle">
                <i class="fa fa-cog"></i>
                <span>Administrativo</span>
                <i class="fa fa-angle-right drop-icon"></i>

                <ul class="submenu" @if ($sidebar->prefix('administrativo')) style="display: block;" @endif>
                    <li>
                        <a href="{{ route('administrativo.usuarios.index') }}" @if ($sidebar->prefix('usuarios', 1)) class="active" @endif>
                            Usuarios
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('administrativo.perfis-permissoes.index') }}" @if ($sidebar->prefix('perfis-permissoes', 1)) class="active" @endif>
                            Perfis de Permissões
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('administrativo.obras.index') }}" @if ($sidebar->prefix('obras', 1)) class="active" @endif>
                            Obras
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('administrativo.farol.index') }}" @if ($sidebar->prefix('farol', 1)) class="active" @endif>
                            Farol
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('administrativo.dias-nao-uteis.index') }}" @if ($sidebar->prefix('dias-nao-uteis', 1)) class="active" @endif>
                            Dias Não Úteis
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('administrativo.fornecedores.index') }}" @if ($sidebar->prefix('fornecedores', 1)) class="active" @endif>
                            Fornecedores
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('administrativo.projetista-calculista.index') }}" @if ($sidebar->prefix('dias-nao-uteis', 1)) class="active" @endif>
                            Projetista / Calculista
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('administrativo.solucao-projetista.index') }}" @if ($sidebar->prefix('dias-nao-uteis', 1)) class="active" @endif>
                            Soluções de Projetistas/Calculistas
                        </a>
                    </li>

                    <li>
                        <a href="{{ route('administrativo.phiepsi.index') }}" @if ($sidebar->prefix('dias-nao-uteis', 1)) class="active" @endif>
                            Configurar Φ (phi) e  Ψ (psi) 
                        </a>
                    </li>
                </ul>
            </a>
        </li>

        <li @if ($sidebar->prefix('autodoc')) class="open" @endif>
            <a href="#" class="dropdown-toggle">
                <i class="fa fa-cogs"></i>
                <span>Autodoc</span>
                <i class="fa fa-angle-right drop-icon"></i>

                <ul class="submenu" @if ($sidebar->prefix('autodoc')) style="display: block;" @endif>
                    <li>
                        <a href="{{ route('autodoc.clientes.index') }}" @if ($sidebar->prefix('clientes', 1)) class="active" @endif>Clientes</a>
                    </li>
                    <li>
                        <a href="{{ route('autodoc.logs.index') }}" @if ($sidebar->prefix('logs', 1)) class="active" @endif>Logs</a>
                    </li>
                </ul>
            </a>
        </li>

    </ul>
</div>
