<x-app-layout>

    <!-- visual/banner of the page -->
    <section class="visual">
        <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55"
            style="background-position: 50% 0px;">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <div class="visual-title">
                            <h1>SOBRE IEEE SIGHT</h1>
                        </div>
                        <div class="breadcrumb-block">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> Iinicio </a></li>
                                <li class="breadcrumb-item active"> Sobre Nosotros </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/visual/banner of the page -->
    <!-- main content wrapper -->
    <div class="content-wrapper">
        <section class="content-block">
            <div class="container text-center">
                <div class="heading bottom-space">
                    <h2 style="color: #cd781e"><span>IEEE </span> SIGHT</h2>
                </div>
                <div class="description">
                    <p>El Grupo de Interés Especial IEEE en Tecnología Humanitaria (SIGHT) es un programa del Instituto
                        de Ingenieros Eléctricos y Electrónicos, instituido por el Comité de Actividades Humanitarias
                        -HAC- del IEEE.
                        <br>
                        IEEE SIGHT es una red global de grupos que consta de miembros y voluntarios del IEEE que
                        identifican y abordan problemas mediante la aplicación de sus habilidades técnicas y la
                        asociación con sus comunidades locales.
                    </p>
                </div>
            </div>
        </section>
        <section class="content-block p-0">
            <div class="container-fluid">
                <div class="content-slot alternate-block">
                    @if ($abouts->count())
                        @foreach ($abouts as $about)
                            <div class="row">
                                <div class="col-lg-6">
                                    @if (($about->id % 2) == 0)
                                    <div class="bg-stretch img-wrap wow slideInLeft"
                                    style="visibility: visible; animation-name: slideInLeft;">
                                    @else
                                    <div class="bg-stretch img-wrap wow slideInRight"
                                    style="visibility: visible; animation-name: slideInRight;">
                                    @endif

                                        <img src="img/img-09.jpg" alt="images"
                                            style="width: 940.53px; height: 628px; margin-top: 0px; margin-left: -90.2652px;">
                                    </div>
                                </div>
                                <div class="col col-lg-6">
                                    <div class="text-wrap">
                                        <h3>{{$about->title}}</h3>
                                        {{$about->description}}
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>
        <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55"
            style="background-position: 50% 0px;">
            <div class="container">
                <div class="inner-wrapper text-white">
                    <h3>“Si tus acciones inspiran a otros a soñar más, aprender más, hacer más y convertirse en algo más, entonces eres un líder” – John Quincy Adams</h3>
                    <div class="btn-container">
                        <a href="#" class="btn btn-primary">CONTÁCTANOS</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--/main content wrapper -->

</x-app-layout>
