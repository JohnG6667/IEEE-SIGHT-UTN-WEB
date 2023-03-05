<x-app-layout>
    <!-- visual/banner of the page -->
    <section class="visual visual-sub visual-no-bg">
        <div class="visual-inner  bg-gray-light">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <h1 class="visual-title visual-sub-title">Categorías de Eventos</h1>
                        <div class="breadcrumb-block">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index.index') }}"> Inicio </a></li>
                                <li class="breadcrumb-item"><a href="{{ route('events.index') }}"> Eventos </a></li>
                                <li class="breadcrumb-item active"> Categorías </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/visual/banner of the page -->
    <!-- main content wrapper -->
    <div class="demo-wrapper content-block pb-0" style="padding-top: 3rem !important">
        <div class="data-table">
            <table class="table">
                <thead class="thead-inverse">
                    <tr>
                        <th class="bg-secondary">#</th>
                        <th class="bg-secondary">Nombre</th>
                        <th class="bg-secondary">Vistas</th>
                        <th class="bg-secondary">Eventos</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($categories->count())
                        @foreach ($categories as $category)
                            <tr>
                                <th scope="row">{{$category->id}}</th>
                                <td><a style="text-transform: uppercase" href="{{route('events.category', $category)}}">{{$category->name}}</a></td>
                                <td>{{$category->views}}</td>
                                <td>{{$category->events()->count()}}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <div class="btn-container full-width-btn top-space">

            {{ $categories->links() }}

        </div>
    </div>
    <!--/main content wrapper -->
    <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55"
        style="background-position: 50% 0px;">
        <div class="container">
            <div class="inner-wrapper text-white">
                <h3>“Si tus acciones inspiran a otros a soñar más, aprender más, hacer más y convertirse en algo más,
                    entonces eres un líder” – John Quincy Adams</h3>
                <div class="btn-container">
                    <a href="{{ route('index.contactUs') }}" class="btn btn-primary">CONTÁCTANOS</a>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
