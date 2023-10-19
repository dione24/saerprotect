@extends('layouts.base')
@section('content')
<section class="page-title" style="background-image:url(images/background/2.jpg);">
    <div class="auto-container">
        <div class="inner-box">
            <h1>A Propos de Nous</h1>
            <div class="bread-crumb"><a href="{{ route('home.index') }}">Accueil &nbsp; /</a> <a class="current">A
                    Propos de Nous
                </a></div>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--Welcome Section-->
<section class="welcome-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!--Content Column / Fact Counter Two-->
            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                <div class="inner-box">
                    <h3>SAER Protect</h3>
                    <div class="text">est une Sécurité est une société de sécurité spécialisée dans la
                        gestion et la prévention des risques pour assurer la sécurité, la surveillance et le
                        gardiennage des biens et des personnes. Nos agences sont implantées principalement
                        à:
                        - Bamako (le siège sociale);
                        - Tombouctou;
                        - Mopti;
                        - Gao;
                        - Ségou;
                        - Sikasso.
                        Nous intervenons dans presque toutes les régions administratives du Mali.</div>

                    <!--Fact Counter Two-->
                    <div class="fact-counter">
                        <div class="clearfix">

                            <!--Column-->
                            <div class="inner-column light-bg counter-column wow fadeIn">
                                <div class="inner">
                                    <div class="icon-box"><span class="icon flaticon-close"></span></div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="4000" data-stop="3500">0</span>
                                    </div>
                                    <h4 class="counter-title">Agents</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="inner-column counter-column wow fadeIn">
                                <div class="inner">
                                    <div class="icon-box"><span class="icon flaticon-badge-with-ribbons"></span></div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="3000" data-stop="48">0</span>
                                    </div>
                                    <h4 class="counter-title">Récompenses</h4>
                                </div>
                            </div>

                            <!--Column-->
                            <div class="inner-column counter-column wow fadeIn">
                                <div class="inner">
                                    <div class="icon-box"><span class="icon flaticon-crosshair"></span></div>
                                    <div class="count-outer">
                                        <span class="count-text" data-speed="2" data-stop="2">0</span>
                                    </div>
                                    <h4 class="counter-title">Branches</h4>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--Video Column-->
            <div class="column col-md-6 col-sm-12 col-xs-12">
                <div class="video-box">
                    <figure class="image">
                        <img src="images/resource/video-image.jpg" alt="">
                    </figure>
                    <a href="https://www.youtube.com/watch?v=0e1uTwSRGgI" class="lightbox-image overlay-box">
                        <span class="flaticon-arrows-2"></span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>
<!--End Welcome Section-->

<!--Featured Section-->
<section class="featured-section">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Featured Post-->
            <div class="featured-post col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="number-box wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">01</div>
                    <h3><a href="#">INTEGRITE ET RESPECT</a></h3>
                    <div class="text">
                        Nous opérons en toute intégrité et avec un profond respect. Notre conduite dans le domaine
                        commercial ainsi que nos
                        relations sont fondées sur la confiance, la sincérité, et la transparence. Nous tenons nos
                        engagements et nous nous
                        engageons constamment à faire ce qui est équitable. Nous accordons une grande importance à
                        l'écoute et traitons nos
                        collègues, nos clients, ainsi que toutes les personnes qui nous sont confiées, avec le plus
                        grand respect.
                    </div>
                </div>
            </div>
            <!--End Featured Post-->

            <!--Featured Post-->
            <div class="featured-post col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="number-box wow fadeInUp" data-wow-delay="300ms" data-wow-duration="1500ms">02</div>
                    <h3><a href="#">LA SURETE, LA SECURITE ET L’ EXCELLENCE DU SERVICE</a></h3>
                    <div class="text">
                        Nous avons une passion profonde pour la sûreté, la sécurité, et l'excellence du service. Nous
                        mettons tout notre cœur
                        dans la préservation de la sécurité au travail, en prenant des mesures rigoureuses pour protéger
                        nos collègues et nos
                        clients contre tout risque. En tant qu'experts en sécurité, nous utilisons notre expertise pour
                        sauvegarder les biens de
                        nos clients. Nous restons fidèles à nos engagements et nous nous investissons avec passion dans
                        la fourniture de
                        services à la clientèle de la plus haute qualité.
                    </div>

                </div>
            </div>
            <!--End Featured Post-->

            <!--Featured Post-->
            <div class="featured-post col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <div class="number-box wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">03</div>
                    <h3><a href="#">L’INNOVATION ET LE
                            TRAVAIL D&#39;EQUIPE</a></h3>
                    <div class="text">Nous allouons des ressources à la technologie et à l'adoption des meilleures
                        méthodes pour constamment améliorer les
                        produits et les services que nous offrons. Nous nous engageons à trouver constamment de
                        nouvelles approches pour
                        soutenir nos clients dans la réalisation de leurs objectifs. Nous favorisons la collaboration
                        d'équipe et reconnaissons
                        la valeur de chaque contribution, dans le but d'assurer les meilleurs résultats tant pour nos
                        clients que pour notre
                        entreprise.</div>

                </div>
            </div>
            <!--End Featured Post-->

        </div>
    </div>
</section>
<!--End Featured Section-->

<!--Guards Section-->
<section class="guard-section">
    <div class="auto-container">
        <!--Sec Title-->
        <div class="sec-title">
            <h2>Nos Agents</h2>
            <div class="text">Dérivés d'une sélection minutieuse, nos agents sont bien plus que de simples protecteurs.
            </div>
        </div>
        <!--Sec Title-->

        <div class="row clearfix">

            <!--Guard Member-->
            <div class="guard-member col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <!--Image Box-->
                    <div class="image-box">
                        <img src="images/resource/guard-2.jpg" alt="" />
                    </div>
                    <!--Lower Content-->
                    <div class="lower-content">

                        <!--Content-->
                        <div class="content">
                            <h3>NATHAN JONES</h3>
                            <div class="designation">Senior Guard</div>
                            <!--Social Icon-->
                            <div class="social-icon">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                            </div>
                            <div class="left-arrow"></div>
                            <div class="right-arrow"></div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Guard Member-->
            <div class="guard-member col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <!--Image Box-->
                    <div class="image-box">
                        <img src="images/resource/guard-2.jpg" alt="" />
                    </div>
                    <!--Lower Content-->
                    <div class="lower-content">

                        <!--Content-->
                        <div class="content">
                            <h3>NATHAN JONES</h3>
                            <div class="designation">Senior Guard</div>
                            <!--Social Icon-->
                            <div class="social-icon">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                            </div>
                            <div class="left-arrow"></div>
                            <div class="right-arrow"></div>
                        </div>

                    </div>
                </div>
            </div>

            <!--Guard Member-->
            <div class="guard-member col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <!--Image Box-->
                    <div class="image-box">
                        <img src="images/resource/guard-2.jpg" alt="" />
                    </div>
                    <!--Lower Content-->
                    <div class="lower-content">

                        <!--Content-->
                        <div class="content">
                            <h3>NATHAN JONES</h3>
                            <div class="designation">Senior Guard</div>
                            <!--Social Icon-->
                            <div class="social-icon">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-linkedin"></a>
                            </div>
                            <div class="left-arrow"></div>
                            <div class="right-arrow"></div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </div>
</section>
<!--End Guards Section-->

{{--
<!--Testimonial Section-->
<section class="testimonial-section">
    <div class="auto-container">
        <h2>
            TÉMOIGNAGES
        </h2>

        <!--Three Item Carousel-->
        <div class="three-item-carousel">
            <!--Testimonial Block One-->
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
                    <div class="text">Une équipe professionnelle et attentionnée qui ne ménage aucun effort pour
                        répondre à nos besoins. Leur support constant
                        24/7 est une réelle tranquillité d'esprit, et nous savons que nous pouvons compter sur eux à
                        tout moment.</div>
                    <!--Author Info-->
                    <div class="author-info">
                        <div class="author-image">
                            <img src="https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/author-1.jpg"
                                alt="" />
                        </div>
                        <h3>- Marie G
                        </h3>
                        <div class="designation">Entrepreneure</div>
                        <!--Rating-->
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-empty"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!--Testimonial Block One-->
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
                    <div class="text">J'ai été impressionné par la qualité exceptionnelle des services fournis par leur
                        équipe de meilleurs professionnels.
                        Leur expertise a vraiment fait la différence, et je recommande leurs services à quiconque
                        cherche une solution sur
                        mesure.</div>
                    <!--Author Info-->
                    <div class="author-info">
                        <div class="author-image">
                            <img src="https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/author-2.jpg"
                                alt="" />
                        </div>
                        <h3>Thomas L</h3>
                        <div class="designation">Consultant en Affaires</div>
                        <!--Rating-->
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-empty"></span>
                        </div>
                    </div>
                </div>
            </div>

            <!--Testimonial Block One-->
            <div class="testimonial-block-one">
                <div class="inner-box">
                    <div class="quote-icon"><span class="icon flaticon-left-quote"></span></div>
                    <div class="text">La satisfaction garantie qu'ils offrent n'est pas simplement une promesse, c'est
                        une réalité. Chaque interaction avec
                        leur équipe a été impeccable, et ils ont vraiment su répondre à nos besoins complexes. Une
                        expérience de service client
                        inégalée.</div>
                    <!--Author Info-->
                    <div class="author-info">
                        <div class="author-image">
                            <img src="https://www.wp1.themexlab.com/newwp/bristol/wp-content/uploads/2017/01/author-3.jpg"
                                alt="" />
                        </div>
                        <h3>Sophie M</h3>
                        <div class="designation">Directrice Marketing</div>
                        <!--Rating-->
                        <div class="rating">
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star-half-empty"></span>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>
<!--End Testimonial Section-->




<!--sponsors style One-->
<section class="sponsors-style-one">
    <div class="auto-container">
        <div class="sponsors-outer">
            <!--Sponsors Carousel-->
            <ul class="sponsors-carousel">
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure>
                </li>
                <li class="slide-item">
                    <figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure>
                </li>
            </ul>
        </div>
    </div>
</section>
<!--sponsors style One--> --}}
@endsection