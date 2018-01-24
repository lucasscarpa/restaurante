<header class="navbar" id="header-navbar">

    <div class="container">
        <button type="button" class="navbar-toggle pull-left" id="show-sidebar">
            <span class="sr-only">Toggle navigation</span>
            <span class="fa fa-bars"></span>
        </button>

        <a href="#!" id="logo" class="navbar-brand">
            <img src="{{ url('cube/img/logo-autodoc-colorido.png') }}" alt="" class="normal-logo logo-white"/>
            <img src="{{ url('cube/img/logo-autodoc.png') }}" alt="" class="normal-logo logo-black"/>
            <img src="{{ url('cube/img/logo-autodoc.png') }}" alt="" class="small-logo hidden-xs hidden-sm hidden"/>
        </a>

        <div class="clearfix">
            <div class="nav-no-collapse navbar-left pull-left hidden-sm hidden-xs">
                <ul class="nav navbar-nav pull-left">
                    <li class="dropdown hidden-xs">
                        <a class="btn dropdown-toggle" data-toggle="dropdown">Cliente atual &nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#!">Outro cliente</a></li>
                            <li><a href="#!">Mais um</a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="nav-no-collapse pull-right " id="header-nav">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown profile-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ url('cube/img/samples/imagem_avatar.png') }}" alt="" />
                            {{ Auth::user()->nome }}
                            <span class="hidden-xs"></span> <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="{{ route('auth.alterar-senha', ['id' => Auth::user()->id ]) }}"><i class="fa fa-key"></i>Alterar Senha</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="btn" href="#">
                            <i class="fa fa-question-circle"></i>
                            Wiki
                        </a>
                    </li>
                    <li>
                        <a class="btn" href="#">
                            <i class="fa fa-life-ring"></i>
                            Suporte
                        </a>
                    </li>
                    <li class="hidden-xxs">
                        <a class="btn" href="{{ route('login.logout') }}">
                            <i class="fa fa-power-off"></i>
                            Sair
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</header>
