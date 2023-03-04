<x-app-layout>
    <!-- visual/banner of the page -->
    <section class="visual">
        <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55"
            style="background-position: 50% 0px;">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <div class="visual-title">
                            <h2>{{ $event->title }}</h2>
                        </div>
                        <div class="breadcrumb-block">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> Iinicio </a></li>
                                <li class="breadcrumb-item"><a href="index.html"> Eventos </a></li>
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
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 bottom-space-medium-only">
                        <ul class="content-list info-list">
                            <li class="row">
                                <div class="col">
                                    <span class="custom-icon-folder"><span class="sr-only">&nbsp;</span></span>
                                    <span class="text title">Entidad:</span>
                                </div>
                                <div class="col">
                                    <p>{{$event->entity}}</p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col">
                                    <span class="custom-icon-calendar"><span class="sr-only">&nbsp;</span></span>
                                    <span class="text title">Fecha:</span>
                                </div>
                                <div class="col">
                                    <p>{{ date('d M Y', strtotime($event->event_date)) }}</p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col">
                                    <span class="custom-icon-skill"><span class="sr-only">&nbsp;</span></span>
                                    <span class="text title">Autor:</span>
                                </div>
                                <div class="col">
                                    <p>{{$event->user->name}} {{$event->user->last_name}}</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 bottom-space-medium-only">
                        <ul class="content-list info-list">
                            <li class="row">
                                <div class="col">
                                    <span class="custom-icon-map-marker"><span class="sr-only">&nbsp;</span></span>
                                    <span class="text title">Lugar:</span>
                                </div>
                                <div class="col">
                                    <p>{{$event->place}}</p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col">
                                    <span class="custom-icon-user"><span class="sr-only">&nbsp;</span></span>
                                    <span class="text title">Vistas:</span>
                                </div>
                                <div class="col">
                                    <p>{{$event->views}}</p>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col">
                                    <span class="custom-icon-link2"><span class="sr-only">&nbsp;</span></span>
                                    <span class="text title">Categoría:</span>
                                </div>
                                <div class="col">
                                    <p><a href="{{route('events.category', $event->category)}}">{{$event->category->name}}</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-12 less-wide">
                        <div class="blog-holder">
                            <article class="blog-article">
                                <div class="blog-desc pt-5">
                                    <div class="blog-img">
                                        <div class="image-wrap">
                                            <figure class="">
                                                @if ($event->image)
                                                    <img src="{{Storage::url($event->image->url)}}" alt="images description">
                                                @else
                                                    <img src="/img/img-37.jpg" alt="images description">
                                                @endif
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="tag-block mt-3 mb-2">
                                        <ul>
                                            @if ($event->tags->count())
                                                @foreach ($event->tags as $tag)
                                                    <li>
                                                        <a href="{{route('events.tag', $tag)}}">{{ $tag->name }}</a>
                                                    </li>
                                                @endforeach
                                            @endif
                                        </ul>
                                    </div>
                                    {{ $event->body }}
                                    <div class="blog-share mt-5">
                                        <ul class="social-network with-text">
                                            <li><strong>Compartir :</strong></li>
                                            <li><a href="#"><span class="custom-icon-facebook"></span>
                                                    Facebook</a></li>
                                            <li><a href="#"><span class="custom-icon-twitter"></span> Twitter</a>
                                            </li>
                                            <li><a href="#"><span class="custom-icon-google-plus"></span>
                                                    Google</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="content-block pt-5 pb-5">
                            <div class="comment-block">
                                <div class="contact-title mb-3">
                                    <h6>{{ $event->suggestions()->where('status', 1)->count() }} Comentarios</h6>
                                </div>
                                @if ($event->suggestions()->where('status', 1)->count())
                                    @foreach ($event->suggestions()->where('status', 1)->get() as $suggestion)
                                        <div class="comment-slot">
                                            <div class="thumb circular-img">
                                                <a><img @if ($suggestion->user->image) src="{{ Storage::url($suggestion->user->image->url) }}"
                                                @else
                                                src="/img/people-01.jpg" @endif
                                                        alt="images description"></a>
                                            </div>
                                            <div class="comment-desc">
                                                <h5><a>{{ $suggestion->user->name }} {{ $suggestion->user->last_name }}
                                                        - {{ $suggestion->place }}</a></h5>
                                                <p>{{ $suggestion->description }}</p>
                                                <div class="meta">Comentado el
                                                    <time
                                                        datetime="{{ $suggestion->created_at->format('M d ,Y, D h:i A') }}">{{ $suggestion->created_at->format('M d ,Y, D h:i A') }}</time>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                @endif
                            </div>
                        </div>
                        <div class="contact-container">
                            <form method="POST" action="{{ route('events.createSuggestion') }}"
                                class="comment-form custom_contact-form">
                                @csrf
                                <fieldset>
                                    <div class="contact-title">
                                        <h6>DÉJANOS TUS COMENTARIOS Y SUGERENCIAS</h6>
                                    </div>
                                    @auth
                                        <div class="row">
                                            <input hidden placeholder="Full Name" id="event_id" type="text"
                                                name="event_id" value="{{ $event->id }}" class="form-control">
                                            <div class="col-sm-12 form-group">
                                                <textarea placeholder="Tu comentario" id="description" type="text" name="description" class="form-control"></textarea>
                                            </div>
                                            <div class="col-sm-12 btn-holder">
                                                <button type="submit" class="btn btn-black btn-full">ENVIAR
                                                    COMENTARIO</button>
                                            </div>
                                        </div>
                                    @else
                                        <p>Inicia sesión o regístrate para poder comentar.</p>
                                    @endauth

                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--/main content wrapper -->
    @include('sweetalert::alert')

</x-app-layout>
