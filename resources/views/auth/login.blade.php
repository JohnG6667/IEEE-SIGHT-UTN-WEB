@extends('layouts.auth')
@section('content')

    <!-- main content wrapper -->
    <div class="content-wrapper">
        <div class="row  no-gutters">
            <div class="col-lg-6 d-lg-block d-none">
                <div class="bg-stretch img-wrap">
                    <img src="/img/visual-12.jpg" alt="images"
                        style="width: 760px; height: 878.75px; margin-top: -232.375px; margin-left: 0px;">
                </div>
            </div>
            <div class="col-lg-6 signup-block">
                <div class="signup-wrap text-center">
                    <div class="inner-wrap">
                        <div class="circular-icon bottom-space"><i class="custom-icon-user"></i></div>
                        <form method="POST" action="{{ route('login') }}" id="contact_form"
                            class="waituk_contact-form signup-form">
                            @csrf
                            <div class="bottom-space">
                                <h2>Inisiar Sesión</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="CORREO" id="email" type="email"
                                            name="email" :value="old('email')" required autofocus autocomplete="username"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="password" placeholder="CONTRASEÑA" id="password" type="password"
                                            name="password" required autocomplete="current-password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="waituk_select-box">
                                        <div class="waituk_select-box-default square-box">
                                            <input type="checkbox" id="remember_me" name="remember">
                                            <label for="remember_me" class="m-0">RECORDARME</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <p><a href="{{ route('password.request') }}">¿Olvió su contraseña?</a></p>
                                </div>
                            </div>
                            <div class="btn-container mb-3  mb-xl-3 mt-xl-5 mt-lg-2">
                                <button id="btn_sent" type="submit" class="btn btn-primary has-radius-small">Inisiar
                                    Sesión</button>
                            </div>
                            <p>¿Aún no tiene una cuenta?
                                <a href="{{ route('register') }}"> Regístrate. </a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/main content wrapper -->
@stop
