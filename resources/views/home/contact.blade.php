@extends('layouts.base')
@section('content')
<!--Page Title-->
<section class="page-title" style="background-image:url(images/background/2.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>CONTACTEZ-NOUS</h1>
            <div class="bread-crumb"><a href="{{ route('home.index') }}">Accueil &nbsp; /</a> <a class="current">
                    Contact
                </a></div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Map Section-->
<section class="map-section">
    <!--Map Container-->
    <div class="map-outer">
        <!--Map Canvas-->
        <div class="map-canvas" data-zoom="14" data-lat="-37.817085" data-lng="144.955631" data-type="roadmap"
            data-hue="#ffc400" data-title="Envato"
            data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>"
            style="height: 450px;">
        </div>

    </div>
</section>
<!--End Map Section-->

<!--Info Section-->
<section class="info-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Info Block-->
            <div class="info-block col-md-4 col-sm-6 col-xs-12">
                <h2>NOS BUREAUX</h2>
                <div class="inner-box">
                    <div class="icon-box"><span class="flaticon-map"></span></div>
                    <div class="text">SAER Protect, Hamdallaye ACI 2000, Rue 240, Porte 101, Bamako, Mali
                    </div>
                </div>

                <!--Info Block-->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    <h2>MAIL US AT</h2>
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-envelope"></span></div>
                        <div class="text">contact@saerprotect.com</div>
                    </div>
                </div>

                <!--Info Block-->
                <div class="info-block col-md-4 col-sm-6 col-xs-12">
                    <h2>APPELEZ-NOUS AU</h2>
                    <div class="inner-box">
                        <div class="icon-box"><span class="flaticon-envelope"></span></div>
                        <div class="text">+223 20 22 52 68 <br>
                            +223 </div>
                    </div>
                </div>

            </div>
        </div>
</section>
<!--End Info Section-->

<!--Contact Form-->
<div class="contact-form-section">
    <div class="auto-container">

        <!-- contact Form -->
        <div class="contact-form">

            <div class="group-title">
                <h2>Envoyez-nous un message</h2>
            </div>

            <!--Comment Form-->
            <form method="post" action="sendemail.php" id="contact-form">
                <div class="row clearfix">

                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <div class="group-inner">
                            <label class="icon-label" for="field-one"><span class="fa flaticon-social"></span></label>
                            <input id="field-one" type="text" name="username" placeholder="Nom" required>
                        </div>
                    </div>

                    <div class="form-group col-md-6 col-sm-12 col-xs-12">
                        <div class="group-inner">
                            <label class="icon-label" for="field-two"><span
                                    class="fa flaticon-envelope-2"></span></label>
                            <input id="field-two" type="email" name="email" placeholder="Email" required>
                        </div>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <textarea class="darma" name="message" placeholder="Message"></textarea>
                    </div>

                    <div class="form-group col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <button class="theme-btn btn-style-one" type="submit" name="submit-form">Envoyer</button>
                    </div>

                </div>
            </form>
        </div>
        <!--End Comment Form -->

    </div>
</div>
<!--End Contact Form-->
@endsection