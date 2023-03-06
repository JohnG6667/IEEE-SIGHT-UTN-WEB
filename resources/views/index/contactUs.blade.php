<x-app-layout>
    <section class="visual visual-sub visual-no-bg">
        <div class="visual-inner   ">
            <div class="centered">
                <div class="container">
                    <div class="visual-text visual-center">
                        <h1 class="visual-title visual-sub-title">Contáctanos</h1>
                        <div class="breadcrumb-block">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('index.index') }}"> Inicio </a></li>
                                <li class="breadcrumb-item active"> Contáctanos </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="content-wrapper">
        <section class="content-block pb-0">
            <div class="container">
                <div class="contact-container">
                    <h6 class="content-title contact-title">ContactA con nosotros</h6>
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- contact form -->
                            <form action="#" method="post" id="contact_form" class="waituk_contact-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="NOMBRE *" id="con_fname"
                                                name="con_fname" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="APELLIDO *" id="con_lname"
                                                name="con_lname" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" placeholder="NÚMERO DE TELÉFONO" id="con_phone"
                                                name="con_phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" placeholder="CORREO ELECTRONICO *" id="con_email"
                                                name="con_email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="MENSAJE *" id="con_message" name="con_message"></textarea>
                                </div>
                                <div class="btn-container">
                                    <button id="btn_sent" class="btn btn-primary btn-arrow">ENVIAR MENSAJE</button>
                                    <p id="error_message"> </p>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-6 col-xl-5 offset-xl-1">
                            <div class="info-slot">
                                <div class="icon"><span class="custom-icon-map-marker"></span></div>
                                <div class="text">
                                    <address>Av. 17 de Julio 5-21, Ibarra.
                                        <br>Ecuador
                                    </address>
                                </div>
                            </div>
                            <div class="info-slot">
                                <div class="icon"><span class="custom-icon-headset"></span></div>
                                <div class="text">
                                    <ul class="content-list contact-list">
                                        <li><span class="label-text">Contacto</span> <a href="tel:09822685555">09822685555</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="info-slot">
                                <div class="icon"><span class="custom-icon-message"></span></div>
                                <div class="text">
                                    <ul class="content-list contact-list">
                                        <li><a href="mailto:ramaieeeutn23@gmail.com">ramaieeeutn23@gmail.com</a></li>
                                        <li><a href="mailto:kvalmeidaa@utn.edu.ec">kvalmeidaa@utn.edu.ec</a></li>
                                        <!-- <li><a href="mailto:help@roxine-online.com">help@roxine-online.com</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="map-holder embed-responsive embed-responsive-21by9">
        <!-- <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2485.0605547231917!2d-0.33554378354576586!3d51.47540277962994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760cf99dee6c25%3A0xc9d2780dbbcbb933!2sLondon+Rd%2C+Isleworth+TW7%2C+UK!5e0!3m2!1sen!2snp!4v1473394388477"  height="450" style="border:0"></iframe> -->
            <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.740355249268!2d-78.11369688524671!3d0.35818869973867223!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e2a3cad309ad309%3A0xc97eab5c0f6a095e!2sUniversidad%20Tecnica%20del%20Norte%20%22UTN%22!5e0!3m2!1ses!2sec!4v1678126519802!5m2!1ses!2sec" height="450" style="border:0;"></iframe>
        </div>
    </div>
</x-app-layout>
