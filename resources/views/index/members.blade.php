<x-app-layout>
    <section class="visual">
        <div class="visual-inner visual-banner dark-overlay parallax" data-stellar-background-ratio="0.55">
            <div class="container">
                <div class="visual-text-large text-left visual-center">
                    <h1 class="visual-title visual-sub-title">Miembros de IEEE Sight</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit porro laudantium sequi. Lorem ipsum
                        dolor sit amet, consectetur adipisicing elit.</p>
                    <div class="breadcrumb-block">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('index.index') }}"> Inicio </a></li>
                            <li class="breadcrumb-item">Miembros</li>
                        </ol>
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
                <div class="heading bottom-space text-center">
                    <h2>Learn. <span>Acheive.</span> Admire</h2>
                </div>
                <div class="description text-center">
                    <p>Delightful unreserved impossible few estimating men favourable see entreaties. She propriety
                        immediate was improving. He or entrance humoured likewise moderate. Much nor game son say feel.
                        Fat make met can must form into gate. Me we offending prevailed discovery. </p>
                </div>
                <div class="row">
                    @if ($members->count())
                        @foreach ($members as $member)
                            <div class="col-md-4">
                                <figure class="team-box caption-fade-up top-l-space">
                                    <div class="img-block">
                                        @if ($member->user->image)
                                            <img src="{{Storage::url($member->user->image->url)}}" alt="images description">
                                        @else
                                            <img src="img/team-06.jpg" alt="images description">
                                        @endif
                                    </div>
                                    <figcaption class="team-des-v2">
                                        <span class="sub">Founder / CEO</span>
                                        <strong class="content-title name">{{ $member->user->name }}
                                            {{ $member->user->last_name }}</strong>
                                        <p>{{ $member->description }}</p>
                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="btn-container full-width-btn top-space pagination justify-content-center">

                    {{ $members->links() }}

                </div>
            </div>
        </section>
        <section class="content-block quotation-block black-overlay-6 parallax" data-stellar-background-ratio="0.55">
            <div class="container">
                <div class="inner-wrapper">
                    <h3 class="block-top-heading text-white">BEST EVER DESIGN</h3>
                    <h2 class="text-white">Thinking of joing a winning team?</h2>
                    <div class="btn-container">
                        <a href="#" class="btn btn-primary">VIEW VACANCIES</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

</x-app-layout>
