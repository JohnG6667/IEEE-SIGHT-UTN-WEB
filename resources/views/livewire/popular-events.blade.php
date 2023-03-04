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
                                <p><a href="{{ route('events.show', $event) }}">{{ $event->suggestions()->where('status', 1)->count() }}
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
                                <a href="{{route('events.tag', $tag)}}">{{ $tag->name }}</a>
                            </li>
                        @endforeach
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
