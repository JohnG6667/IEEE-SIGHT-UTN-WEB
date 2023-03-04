<!-- header of the page -->
<header class="fixed-top main-header header-white transparent" id="waituk-main-header">
    <div id="nav-section">
        <div class="bottom-header container-fluid mega-menus" id="mega-menus">
            <nav class="navbar navbar-toggleable-md no-border-radius no-margin mega-menu-multiple"
                id="navbar-inner-container">
                <form action="mega-menu-5.html" id="top-search" class="no-margin top-search">
                    <div class="form-group no-margin">
                        <input class="form-control no-border" id="search_term" name="search_term"
                            placeholder="Type & Press Enter" type="text">
                    </div>
                </form>
                <button type="button" class="navbar-toggler navbar-toggler-left" data-toggle="collapse"
                    data-target="#mega-menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand mr-auto m-sm-auto" href="/"> <img src="/img/logo.svg" alt="roxine">
                    <img src="/img/logo-dark.svg" alt="roxine"> </a>
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
                            <a class="dropdown-toggle" data-toggle="dropdown" href="index.html" data-title="Home">
                                EVENTOS </a>
                            <ul class="dropdown-menu no-border-radius fadeIn animated">
                                <li class="dropdown dropdown-left dropdown-parent">
                                    <a class="sub-marker" href="#"> Categorías <i
                                            class="icon-ios-more icn-right"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius fadeIn animated">
                                        @if ($categories->count())
                                            @foreach ($categories as $category)
                                                <li><a href="{{route('events.category', $category)}}"> {{ $category->name }}
                                                    </a></li>
                                            @endforeach
                                            <li><a href="portfolio-no-sidebar-2-col.html"> Ver todas... </a></li>
                                        @else
                                            <li>Sin Categorías</li>
                                        @endif
                                    </ul>
                                </li>
                                <li class="dropdown dropdown-left dropdown-parent">
                                    <a class="sub-marker" href="#"> Etiquetas <i
                                            class="icon-ios-more icn-right"></i></a>
                                    <ul class="dropdown-menu dropdown-menu-indent-sm no-border-radius">
                                        @if ($tags->count())
                                            @foreach ($tags as $tag)
                                                <li><a href="portfolio-no-sidebar-2-col.html"> {{ $tag->name }}
                                                    </a></li>
                                            @endforeach
                                            <li><a href="portfolio-no-sidebar-2-col.html"> Ver todas... </a></li>
                                        @else
                                            <li>Sin Tags</li>
                                        @endif
                                    </ul>
                                </li>
                                <li><a href="{{ route('events.index') }}">Ver todos... </a></li>
                            </ul>
                        </li>
                        <li class="dropdown dropdown-full-width-g" data-animation="fadeIn">
                            <a class="dropdown-toggle" href="{{ route('index.members') }}">Miembros
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('index.contactUs') }}"> Contacto </a>
                        </li>
                        @auth
                            <li class="dropdown cart-list margin-0-sm">
                                <a class="dropdown-toggle" data-toggle="dropdown"><i class="custom-icon-user m-marker"></i>
                                    Hola {{ auth()->user()->name }}</a>
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
                                                        this.closest('form').submit();">Cerrar
                                                        Sesión
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
            </nav>
        </div>
    </div>
</header>
<!--/header of the page -->
