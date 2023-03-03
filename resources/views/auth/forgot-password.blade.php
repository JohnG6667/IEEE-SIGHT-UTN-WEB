@extends('layouts.auth')
@section('content')
    <!-- main content wrapper -->
    <div class="content-wrapper">
        <div class="full-map">
            <div class="row no-gutters">
                <div class="col-lg-6 hidden-md-down">
                    <div class="bg-stretch img-wrap">
                        <img src="img/visual-12.jpg" alt="images"
                            style="width: 760px; height: 878.75px; margin-top: -205.875px; margin-left: 0px;">
                    </div>
                </div>
                <div class="col-lg-6 signup-block">
                    <div class="signup-wrap text-center">
                        <div class="inner-wrap">
                            <div class="circular-icon bottom-space"><i class="icon-ios-locked-outline"></i>
                            </div>
                            <form method="POST" action="{{ route('password.email') }}"
                                class="waituk_contact-form signup-form">
                                @csrf
                                <h2 class="bottom-space"> RECUPERAR CONTRASEÑA</h2>
                                <p>Para recibir una nueva contraseña, introduzca su dirección de correo electrónico a
                                    continuación.</p>
                                <div class="form-group">
                                    <input placeholder="Enter Your Email...." id="email" type="email" name="email"
                                        :value="old('email')" required autofocus
                                        autocomplete="username"class="form-control">
                                </div>
                                <div class="btn-container top-m-space mb-5">
                                    <button id="btn_sent" type="submit"
                                        class="btn btn-primary has-radius-small">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/main content wrapper -->
@stop
