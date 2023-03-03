@extends('layouts.auth')
@section('content')
    <!-- main content wrapper -->
    <div class="content-wrapper">
        <div class="row no-gutters">
            <div class="col-lg-6 d-lg-block d-none">
                <div class="bg-stretch img-wrap">
                    <img src="img/visual-12.jpg" alt="images"
                        style="width: 760px; height: 878.75px; margin-top: -231.375px; margin-left: 0px;">
                </div>
            </div>
            <div class="col-lg-6 signup-block">
                <div class="signup-wrap text-center">
                    <div class="inner-wrap">
                        <div class="circular-icon bottom-space"><i class="custom-icon-user"></i>
                        </div>
                        <x-jet-validation-errors class="mb-4" />
                        <form method="POST" action="{{ route('register') }}" class="waituk_contact-form signup-form">
                            @csrf

                            <div class="bottom-space">
                                <h2>Forma parte de la IEEE Sight</h2>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="NOMBRE" id="name" type="text" name="name"
                                            :value="old('name')" required autofocus autocomplete="name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="APELLIDO" id="last_name" type="text" name="last_name"
                                            :value="old('last_name')" required autofocus
                                            autocomplete="last_name"class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="EMAIL ADDRESS" id="email" type="email" name="email"
                                            :value="old('email')" required autocomplete="username" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="TELÉFONO" id="phone" type="text" name="phone"
                                            :value="old('phone')" required autofocus autocomplete="phone"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="CONTRASEÑA" id="password" type="password" name="password"
                                            required autocomplete="new-password" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input placeholder="REPETIR CONTRASEÑA" id="password_confirmation" type="password"
                                            name="password_confirmation" required autocomplete="new-password"
                                            class="form-control">
                                    </div>
                                </div>
                            </div>
                            <p>Al hacer clic en el botón "Crear cuenta", acepta nuestras condiciones de servicio.
                                <a href="#">nuestras condiciones de servicio. </a>
                            </p>
                            <div class="btn-container mt-xl-5 mt-lg-2">
                                <button id="btn_sent" class="btn btn-primary has-radius-small">CREATE
                                    ACCOUNT</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/main content wrapper -->
@stop
