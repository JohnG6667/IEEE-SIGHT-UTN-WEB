<header class="fixed-top main-header header-white no-top-header" id="waituk-main-header">
    <div id="nav-section">
        <div class="bottom-header container-fluid mega-menus" id="mega-menus">
            <nav class="navbar navbar-expand-lg navbar-toggleable-md no-border-radius no-margin mega-menu-multiple navbar-hover" id="navbar-inner-container">
                <form action="mega-menu-5.html" id="top-search" class="no-margin top-search">
                    <div class="form-group no-margin">
                        <input class="form-control no-border" id="search_term" name="search_term" placeholder="Type &amp; Press Enter" type="text">
                    </div>
                </form>
                <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse" data-target="#mega-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto m-sm-auto" href="{{ route('index.index') }}"> <img src="img/logo-dark.svg" alt="roxine"> </a>
                <div class="collapse navbar-collapse flex-row-reverse" id="mega-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown" data-animation="fadeIn">
                            <a class="dropdown-toggle" href="{{ route('index.index') }}"> Inicio
                            </a>
                        </li>
                        <li class="dropdown" data-animation="fadeIn">
                            <a class="dropdown-toggle" href="{{ route('index.about') }}">
                                Sobre Nosotros </a>
                        </li>
                        <li class="dropdown" data-animation="fadeIn">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="/" data-title="Home">
                                Eventos </a>
                        </li>
                        <li class="dropdown dropdown-full-width-g" data-animation="fadeIn">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" data-title="Pages">Miembros
                            </a>
                        </li>
                        <li>
                            <a href="contact.html"> Contacto </a>
                        </li>
                        @auth
                            <li class="dropdown cart-list margin-0-sm">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i
                                    class="custom-icon-user m-marker"></i> Hola {{auth()->user()->name}}</a>
                                <div class="dropdown-menu-container">
                                    <div class="dropdown-menu no-border-radius col-lg-1 col-md-4 col-sm-4 fadeIn animated">
                                        <ul class="s-list no-padding">
                                            <li><a href="{{ route('profile.show') }}">Tu perfil</a></li>
                                            <li>
                                                @can('admin.home')
                                                    <a href="{{ route('admin.home') }}">Dashboard</a>
                                                @endcan
                                            </li>

                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <li style="list-style: none;" class="pt-3">
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">Cerrar Sesión
                                                    </a>
                                                </li>
                                            </form>

                                        </ul>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li>
                                <a href="{{ route('login') }}"> <span class="custom-icon-user"></span> Login </a>
                            </li>
                        @endauth
                    </ul>
                </div>
                <div class="navbar-pos-search">
                    <a href="#" class="x-search x-search-trigger navbar-link"><i class="waituk-icon-search"></i></a>
                    <a href="#" class="x-search icon-close-round navbar-link"><i class="waituk-icon-close-round"></i></a>
                </div>
            </nav>
        </div>
    </div>
</header>
