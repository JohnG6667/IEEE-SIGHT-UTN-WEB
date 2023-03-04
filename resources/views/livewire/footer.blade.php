<!-- footer of the pagse -->
<footer class="footer footer-v1 footer-v2">
    <div class="content-block footer-main pb-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="footer-logo mt-2">
                        <img src="/img/logo-dark.svg" alt="image-description">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="my-4">
                        <p>Sé más que un ingeniero, sé IEEE
                        </p>
                        <br>
                        <p>Sé más que un ingeniero, sé IEEE
                        </p>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h4>Categorías</h4>
                    <div class="footer-nav">
                        <ul>
                            @if ($categories->count())
                                @foreach ($categories as $category)
                                    <li title="{{ $category->name }}"><a href="{{ route('events.category', $category) }}"
                                            style="display: -webkit-box;
                                        -webkit-line-clamp: 1;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;">{{ $category->name }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h4>Tags</h4>
                    <div class="footer-nav">
                        <ul>
                            @if ($tags->count())
                                @foreach ($tags as $tag)
                                    <li title="{{ $tag->name }}"><a href="{{ route('events.tag', $tag) }}"
                                            style="display: -webkit-box;
                                        -webkit-line-clamp: 1;
                                        -webkit-box-orient: vertical;
                                        overflow: hidden;">{{ $tag->name }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <h4>Eventos</h4>
                    <div class="footer-nav">
                        <ul>
                            @if ($popular_events->count())
                                @foreach ($popular_events as $event)
                                    <li title="{{ $event->title }}"><a href="{{ route('events.show', $event) }}"
                                            style="display: -webkit-box;
                                    -webkit-line-clamp: 1;
                                    -webkit-box-orient: vertical;
                                    overflow: hidden;">{{ $event->title }}</a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 pb-3">
                        <p>CIEEE - Universidad Técnica del Norte Student Branch© - 2023</p>
                    </div>
                    <div class="col-md-6">
                        <ul class="social-network with-text">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-google-plus"></span></a></li>
                            <li><a href="#"><span class="icon-pinterest"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--/footer of the page -->
