<x-app-layout>
    <!-- visual/banner of the page -->
    <section class="visual">
        <div class="visual-inner about-banner dark-overlay parallax" data-stellar-background-ratio="0.55"
            style="background-position: 50% 0px;">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <h1 class="visual-title visual-sub-title">EVENTOS Y ACTIVIDADES</h1>
                        <h3 class="visual-sub-title" style="text-transform: uppercase;">CATEGORÍA {{$category->name}}</h3>
                        <div class="breadcrumb-block">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index.index') }}"> Inicio </a></li>
                                <li class="breadcrumb-item">EVENTOS</li>
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
                    <div class="col-lg-8">
                        <div class="row multiple-row">
                            @if ($events->count())
                                @foreach ($events as $event)
                                    <div class="col-md-6 col-lg-6">
                                        <div class="col-wrap">
                                            <div class="post-grid reverse-grid">
                                                <div class="img-block post-img">
                                                    <a href="{{ route('events.show', $event) }}"><img
                                                            @if ($event->image) src="{{ Storage::url($event->image->url) }}"
                                                        @else
                                                        src="img/img-31.jpg" @endif
                                                            alt="images"></a>
                                                    <time class="post-date"
                                                        datetime="{{ $event->event_date }}">{{ date('d M', strtotime($event->event_date)) }}</time>
                                                </div>
                                                <div class="post-text-block bg-gray-light">
                                                    <strong class="content-title mb-0"><a
                                                            href="{{ route('events.show', $event) }}"
                                                            style="display: -webkit-box;
                                                        -webkit-line-clamp: 1;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;"
                                                            title="{{ $event->title }}">{{ $event->title }}</a></strong>
                                                    <p
                                                        style="display: -webkit-box;
                                                    -webkit-line-clamp: 4;
                                                    -webkit-box-orient: vertical;
                                                    overflow: hidden;">
                                                        {{ $event->extract }}</p>
                                                    <div class="post-meta clearfix">
                                                        <div class="post-link-holder">
                                                            <a href="{{ route('events.show', $event) }}">Ver más <span
                                                                    class="fa fa-arrow-right"><span
                                                                        class="sr-only">&nbsp;</span></span></a>
                                                        </div>
                                                        <div class="post-social text-right">
                                                            <ul class="social-network social-small">
                                                                <li><a href="#"><span class="icon-facebook"><span
                                                                                class="sr-only">&nbsp;</span></span></a>
                                                                </li>
                                                                <li><a href="#"><span class="icon-twitter"><span
                                                                                class="sr-only">&nbsp;</span></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="btn-container full-width-btn top-space">

                            {{ $events->links() }}

                        </div>
                    </div>
                    <div class="col-lg-4 flex-lg-first">
                        <div class="sidebar-wrap mt-5 mt-lg-0">
                            <div class="widget-block">
                                <div class="post-block">
                                    <h4>EVENTOS POPULARES</h4>
                                    @if ($popular_events->count())
                                        @foreach ($popular_events as $event)
                                            <div class="post-holder"><a href="{{ route('events.show', $event) }}"
                                                    class="post-link"></a>
                                                <div class="post-avatar">
                                                    <a href="{{ route('events.show', $event) }}"><img
                                                            @if ($event->image) src="{{ Storage::url($event->image->url) }}"
                                                        @else
                                                        src="/img/thumb.jpg" @endif
                                                            alt="image description"></a>
                                                </div>
                                                <div class="post-desc">
                                                    <h6 title="{{ $event->title }}"><a
                                                            style="display: -webkit-box;
                                                        -webkit-line-clamp: 2;
                                                        -webkit-box-orient: vertical;
                                                        overflow: hidden;"
                                                            href="{{ route('events.show', $event) }}">{{ $event->title }}</a>
                                                    </h6>
                                                    <p><a href="{{ route('events.show', $event) }}">{{ $event->suggestions()->count() }}
                                                            Sugerencias</a></p>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                                <div class="tag-block mt-5">
                                    <h4>TAGS</h4>
                                    <ul>
                                        @if ($tags->count())
                                            @foreach ($tags as $tag)
                                                <li>
                                                    <a href="#">{{ $tag->name }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--/main content wrapper -->
</x-app-layout>
