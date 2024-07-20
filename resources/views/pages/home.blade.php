@extends('layouts.store')
@section('content')
    <section id="hero" class="d-flex flex-column justify-content-center" data-aos="fade-in">
        <div class="row justify-content-center  aos-animate">
            <div id="heroCarousel" class="carousel slide fade-up" data-ride="carousel" data-interval="2000">
                <ol class="carousel-indicators">
                    <li data-target="#heroCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#heroCarousel" data-slide-to="1"></li>
                    <li data-target="#heroCarousel" data-slide-to="2"></li>
                    <li data-target="#heroCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <a title="Apasionados por nutrir lo que amas." href="#videos">
                                <picture>
                                    <source media="(min-width: 576px)"
                                        data-srcset="{{ asset('img/landing/banner_principal/a_nm_banner_nosotros.webp') }} 1x" />
                                    <img class="img-fluid img-carousel lazy"
                                        data-src="{{ asset('img/landing/banner_principal/a_nm_banner_nosotros_movil.webp') }}"
                                        alt="nutrimentos milenium franquicia" height="100px" width="100px">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <a title="Nuestros productos." href="#nuestros-productos">
                                <picture>
                                    <source media="(min-width: 576px)"
                                        data-srcset="{{ asset('img/landing/banner_principal/b_nm_banner_productos.webp') }} 1x" />
                                    <img class="img-fluid img-carousel lazy"
                                        data-src="{{ asset('img/landing/banner_principal/b_nm_banner_productos_movil.webp') }}"
                                        alt="nutrimentos milenium productos" height="100px" width="100px">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <a title="Sucursales." href="#sucursales">
                                <picture>
                                    <source media="(min-width: 576px)"
                                        data-srcset="{{ asset('img/landing/banner_principal/c_nm_banner_sucursales.webp') }} 1x" />
                                    <img class="img-fluid img-carousel lazy"
                                        data-src="{{ asset('img/landing/banner_principal/c_nm_banner_sucursales_movil.webp') }}"
                                        alt="nutrimentos milenium sucursal" height="100px" width="100px">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <!-- Slide 4 -->
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <a href="distribuidor.html" title="Distribuidor">
                                <picture>
                                    <source media="(min-width: 576px)"
                                        data-srcset="{{ asset('img/landing/banner_principal/d_nm_banner_franquicia.webp') }} 1x" />
                                    <img class="img-fluid img-carousel lazy"
                                        data-src="{{ asset('img/landing/banner_principal/d_nm_banner_franquicia_movil.webp') }}"
                                        alt="nutrimentos milenium franquicia" height="100px" width="100px">
                                </picture>
                            </a>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>

    <div class="bg_tres lazy" data-bg="{{ asset('img/landing/fondos/nm_bg_tres.webp') }}">
        <!-- =======Nuetros Productos Section======= -->
        <section id="nuestros-productos" class="nuestros-productos">
            <div class="container-fluid">
                <div class="section-title" data-aos="zoom-out">
                    <div class="d-flex flex-row justify-content-center align-items-center">
                        <hr>
                        <h2>Nuestros Productos</h2>
                        <hr>
                    </div>
                </div>
            </div>
            <div class="container d-sm-block d-none">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                            <a href="{{route('lines','nucleos')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_nucleos.webp') }}"
                                    alt="nutrimentos milenium producto nucleos" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Nucleos</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="200">
                            <a href="{{route('lines','rooster')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_rooster.webp') }}"
                                    alt="nutrimentos milenium producto rooster" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Rooster</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="300">
                            <a href="{{route('lines','chicken')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_chicken.webp') }}"
                                    alt="nutrimentos milenium producto chicken" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Chicken</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="400">
                            <a href="{{route('lines','hen')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_hen.webp') }}"
                                    alt="nutrimentos milenium producto hen" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Hen</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="500">
                            <a href="{{route('lines','sheep')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_sheep.webp') }}"
                                    alt="nutrimentos milenium producto sheep" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Sheep</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="600">
                            <a href="{{route('lines','pork')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_pork.webp') }}"
                                    alt="nutrimentos milenium producto pork" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Pork</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="700">
                            <a href="{{route('lines','beef')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_beef.webp') }}"
                                    alt="nutrimentos milenium producto beef" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Beef</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="800">
                            <a href="{{route('lines','bull')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_bull.webp') }}"
                                    alt="nutrimentos milenium producto bull" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Bull</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="900">
                            <a href="{{route('lines','milk')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_milk.webp') }}"
                                    alt="nutrimentos milenium producto milk" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Milk</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="1000">
                            <a href="{{route('lines','horse')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_horse.webp') }}"
                                    alt="nutrimentos milenium producto horse" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Horse</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="1100">
                            <a href="{{route('lines','rabbit')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_rabbit.webp') }}"
                                    alt="nutrimentos milenium producto rabbit" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Rabbit</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="1200">
                            <a href="{{route('lines','turkey')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_turkey.webp') }}"
                                    alt="nutrimentos milenium producto turkey" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Turkey</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="1300">
                            <a href="{{route('lines','deer')}}">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_deer.webp') }}"
                                    alt="nutrimentos milenium producto deer" height="100px" width="100px">
                            </a>
                            <div class="title-product text-center">Deer</div>
                            <span class="subtitle-product text-center">Line</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="d-flex flex-column" data-aos="fade-up" data-aos-delay="1400">
                            <a href="{{route('pawwow')}}paw-wow.html">
                                <img class="img-fluid img-producto lazy"
                                    data-src="{{ asset('img/landing/productos/nm_pro_pawwow.webp') }}"
                                    alt="nutrimentos milenium producto pawwow" height="100px" width="100px">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carrousel movil -->
            <div class="container">
                <div id="carouselExampleControls" class="carousel slide d-sm-none d-flex" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="nucleos-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_nucleos.webp"
                                                alt="nutrimentos milenium producto nucleos" height="100px"
                                                width="100px">
                                        </a>
                                        <div class="title-product text-center">Nucleos</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="rooster-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_rooster.webp"
                                                alt="nutrimentos milenium producto rooster" height="100px"
                                                width="100px">
                                        </a>
                                        <div class="title-product text-center">Rooster</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="chicken-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_chicken.webp"
                                                alt="nutrimentos milenium producto chicken" height="100px"
                                                width="100px">
                                        </a>
                                        <div class="title-product text-center">Chicken</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="hen-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_hen.webp"
                                                alt="nutrimentos milenium producto hen" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Hen</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="sheep-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_sheep.webp"
                                                alt="nutrimentos milenium producto sheep" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Sheep</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="pork-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_pork.webp"
                                                alt="nutrimentos milenium producto pork" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Pork</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="beef-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_beef.webp"
                                                alt="nutrimentos milenium producto beef" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Beef</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="bull-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_bull.webp"
                                                alt="nutrimentos milenium producto bull" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Bull</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="milk-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_milk.webp"
                                                alt="nutrimentos milenium producto milk" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Milk</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="horse-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_horse.webp"
                                                alt="nutrimentos milenium producto horse" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Horse</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="rabbit-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_rabbit.webp"
                                                alt="nutrimentos milenium producto rabbit" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Rabbit</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="turkey-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_turkey.webp"
                                                alt="nutrimentos milenium producto turkey" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Turkey</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="deer-line.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_deer.webp"
                                                alt="nutrimentos milenium producto deer" height="100px" width="100px">
                                        </a>
                                        <div class="title-product text-center">Deer</div>
                                        <span class="subtitle-product text-center">Line</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col d-flex justify-content-center align-items-center">
                                    <div class="d-flex flex-column">
                                        <a href="paw-wow.html">
                                            <img class="img-fluid img-producto lazy"
                                                data-src="img/landing/productos/nm_pro_pawwow.webp"
                                                alt="nutrimentos milenium producto pawwow" height="100px" width="100px">
                                        </a>
                                        <div style="height: 72;"></div>
                                        <div style="height: 72px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" style="color: black;" href="#carouselExampleControls"
                        role="button" data-slide="prev">
                        <i class="fas fa-angle-left"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <i class="fas fa-angle-right"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- End Nuestros Productos Section -->
        <!-- ======= valores Section ======= -->
        <section id="valores" class="valores lazy d-flex  justify-content-center align-items-center"
            data-aos="fade-up">
            <div class="container-fluid ">
                <div class="d-flex flex-lg-row flex-column justify-content-around align-items-center">
                    <div class="col-sm-4">
                        <div class="d-flex flex-column justify-content-center align-items-center mb-5">
                            <h2 class="">Misión</h2>
                            <div class="contenedor d-flex justify-content-center align-items-center">
                                <p class="text-center mt-2">Apasionados por nutrir lo que amas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="vl"></div>
                    <div class="col-sm-4">
                        <div class="d-flex flex-column d-flex justify-content-center align-items-center mb-5">
                            <h2 class="">Visión</h2>
                            <div class="contenedor d-flex justify-content-center align-items-center">
                                <p class="text-center mt-2">Aliados contigo para obtener la excelencia en lo que hacemos y
                                    marcar la
                                    diferencia en México.</p>
                            </div>
                        </div>
                    </div>
                    <div class="vl"></div>
                    <div class="col-sm-4">
                        <div class="d-flex flex-column d-flex justify-content-center align-items-center mb-5">
                            <h2 class="">Valores</h2>
                            <div class="contenedor d-flex justify-content-center align-items-center">
                                <div class="row d-flex justify-content-center align-items-start">
                                    <div class="col-sm-6">
                                        <ul class="m-0 ">
                                            <li class="d-flex justify-content-start align-items-center"><i
                                                    class="fas fa-circle"></i>Honestidad</li>
                                            <li class="d-flex justify-content-start align-items-center"><i
                                                    class="fas fa-circle"></i>Responsabilidad</li>
                                            <li class="d-flex justify-content-start align-items-center"><i
                                                    class="fas fa-circle"></i>Compromiso</li>
                                            <li class="d-flex justify-content-start align-items-center"><i
                                                    class="fas fa-circle"></i>Confianza
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6">
                                        <ul class="m-0">
                                            <li class="d-flex justify-content-start align-items-center"><i
                                                    class="fas fa-circle"></i>Congruencia</li>
                                            <li class="d-flex justify-content-start align-items-center"><i
                                                    class="fas fa-circle"></i>Empatía
                                            </li>
                                            <li class="d-flex justify-content-start align-items-center"><i
                                                    class="fas fa-circle"></i>Lealtad
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Valores Section -->
        <!-- =======Videos Section======= -->
        <section id="videos" class="videos" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
            <div class="container">
                <div class="d-flex flex-lg-row flex-column justify-content-center align-items-center">
                    <div class="col-lg-6">
                        <h2 class="text-lg-right text-center mb-5">Apasionados por nutrir lo que amas.</h2>
                        <p class="text-lg-right text-justify">
                            Desde 1999, en Milenium nos dedicamos a la elaboración de alimentos balanceados para tus
                            animales:
                            alimentos para ganado, gallos, bovinos, mascotas y más. Guiados por nuestros estándares de
                            calidad en
                            productos, cumpliendo así el objetivo de acercar a nuestros clientes productos de la mejor
                            calidad.
                        </p>
                        <p class="text-lg-right text-justify">
                            Actualmente cuenta con más de 15 sucursales distribuidas en los estados de Puebla, Tlaxcala,
                            Oaxaca,
                            Chiapas, Michoacán, y Guerrero.
                        </p>
                    </div>
                    <div class="col d-flex justify-content-center align-items-center">
                        <div class="vl d-lg-block d-none">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="folder-video" class="folder">
                            <div class="tabs">
                                <button class="tab active" onclick="openTab(event,'#folder-video', 'tab-1')">
                                    <div><span>Quiénes Somos</span></div>
                                </button>
                                <button class="tab" onclick="openTab(event,'#folder-video', 'tab-2')">
                                    <div><span>Nuestros Productos</span></div>
                                </button>
                            </div>
                            <div class="content">
                                <div class="content__inner lazy" id="tab-1">
                                    <div class="page">
                                        <video class="video-js video-gonzavila lazy" preload="auto" controls
                                            width="620" data-src="video/landing/video.webm"
                                            data-poster="img/landing/posters/poster.webp">
                                            <source type="video/webm" data-src="video/landing/video.webm" />
                                            <source type="video/webm" data-src="video/landing/video.mp4" />
                                        </video>
                                    </div>
                                </div>
                                <div class="content__inner lazy" id="tab-2">
                                    <div class="page">
                                        <video class="video-js video-gonzavila lazy" preload="auto" controls
                                            width="620" data-src="video/landing/NUTRIMENTOS_MILENIUM.webm"
                                            data-poster="img/landing/posters/NUTRIMENTOS_MILENIUM.webp">
                                            <source type="video/webm"
                                                data-src="video/landing/NUTRIMENTOS_MILENIUM.webm" />
                                            <source type="video/mp4" data-src="video/landing/NUTRIMENTOS_MILENIUM.mp4" />
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Videos Section -->
        <!-- ======= Beneficios Section======= -->
        <section id="beneficios" class="intro">
            <div class="intro-block">
                <div class="centerfold-wrap">
                    <div class="hex-master-wrap">
                        <!-- <div class="hover-notify">Da clic</div> -->
                        <div class="grid-1">
                            <div class="hex-wrap backend" data-title="Animales más fuertes" data-content="backend-desc"
                                data-color="#333333">
                                <div class="hex-init"></div>
                                <div class="hex-borders hex-borders-1">
                                    <div class="border-1"></div>
                                    <div class="border-2"></div>
                                    <div class="border-3"></div>
                                </div>
                                <div class="label">
                                    <div class="letra d-flex justify-content-center align-items-center">
                                        A
                                    </div>
                                </div>
                                <div class="hexagon">
                                    <div class="hex-inner-1">
                                        <div class="hex-inner-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hex-wrap frontend" data-title="Los beneficios se notan"
                                data-content="frontend-desc" data-color="#16A085">
                                <div class="hex-init"></div>
                                <div class="hex-borders hex-borders-2">
                                    <div class="border-1"></div>
                                    <div class="border-2"></div>
                                    <div class="border-3"></div>
                                </div>
                                <div class="label">
                                    <div class="letra d-flex justify-content-center align-items-center">
                                        B
                                    </div>
                                </div>
                                <div class="hexagon">
                                    <div class="hex-inner-1">
                                        <div class="hex-inner-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-2">
                            <div class="hex-wrap html" data-title="Nutrición de corazón" data-content="html-desc"
                                data-color="#E34C26">
                                <div class="hex-init"></div>
                                <div class="hex-borders hex-borders-3">
                                    <div class="border-1"></div>
                                    <div class="border-2"></div>
                                    <div class="border-3"></div>
                                </div>
                                <div class="label">
                                    <div class="letra d-flex justify-content-center align-items-center">
                                        N
                                    </div>
                                </div>
                                <div class="hexagon">
                                    <div class="hex-inner-1">
                                        <div class="hex-inner-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hex-wrap css" data-title="Milenium para toda la vida" data-content="css-desc"
                                data-color="#C0392B">
                                <div id="hex-init" class="hex-init"></div>
                                <div class="hex-borders hex-borders-4">
                                    <div class="border-1"></div>
                                    <div class="border-2"></div>
                                    <div class="border-3"></div>
                                </div>
                                <div class="label">
                                    <div class="letra d-flex justify-content-center align-items-center">
                                        M
                                    </div>
                                </div>
                                <div class="hexagon">
                                    <div class="hex-inner-1">
                                        <div class="hex-inner-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hex-wrap jquery" data-title="Excepcionales resultados"
                                data-content="javascript-desc" data-color="#8cc84b">
                                <div class="hex-init"></div>
                                <div class="hex-borders hex-borders-5">
                                    <div class="border-1"></div>
                                    <div class="border-2"></div>
                                    <div class="border-3"></div>
                                </div>
                                <div class="label">
                                    <div class="letra d-flex justify-content-center align-items-center">
                                        E
                                    </div>
                                </div>
                                <div class="hexagon">
                                    <div class="hex-inner-1">
                                        <div class="hex-inner-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="grid-3">
                            <div class="hex-wrap gui" data-title="Lo mejor para tus animales" data-content="gui-desc"
                                data-color="#2C3E52">
                                <div class="hex-init"></div>
                                <div class="hex-borders hex-borders-6">
                                    <div class="border-1"></div>
                                    <div class="border-2"></div>
                                    <div class="border-3"></div>
                                </div>
                                <div class="label">
                                    <div class="letra d-flex justify-content-center align-items-center">
                                        L
                                    </div>
                                </div>
                                <div class="hexagon">
                                    <div class="hex-inner-1">
                                        <div class="hex-inner-2"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="hex-wrap seo" data-title="Dietas saludables" data-content="seo-desc"
                                data-color="#0083de">
                                <div class="hex-init"></div>
                                <div class="hex-borders hex-borders-7">
                                    <div class="border-1"></div>
                                    <div class="border-2"></div>
                                    <div class="border-3"></div>
                                </div>
                                <div class="label">
                                    <div class="letra d-flex justify-content-center align-items-center">
                                        D
                                    </div>
                                </div>
                                <div class="hexagon">
                                    <div class="hex-inner-1">
                                        <div class="hex-inner-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="code-display ">
                            <div class="code-description">
                                <div class="backend-desc">
                                    <p class="code-title"></p>
                                    <!-- <p><span class="code-subtitle"></span></p> -->
                                    <img class="img-fluid lazy my-3"
                                        data-src="{{ asset('img/landing/beneficios/nm_beneficios_A.webp') }}"
                                        alt="nutrimentos milenium beneficios" height="100px" width="100px">
                                    <p><span class="mt-3">Corrige deficiencias alimenticias y protege contra
                                            enfermedades.</span></p>
                                    <div class="code-icon"></div>
                                </div>
                                <div class="frontend-desc">
                                    <p class="code-title"></p>
                                    <img class="img-fluid lazy my-3"
                                        data-src="{{ asset('img/landing/beneficios/nm_beneficios_B.webp') }}"
                                        alt="nutrimentos milenium beneficios" height="100px" width="100px">
                                    <p><span class="mt-3">Potencializa la genética de tus animales.</span></p>
                                    <div class="code-icon"></div>
                                </div>
                                <div class="html-desc">
                                    <p class="code-title"></p>
                                    <img class="img-fluid lazy my-3"
                                        data-src="{{ asset('img/landing/beneficios/nm_beneficios_N.webp') }}"
                                        alt="nutrimentos milenium beneficios" height="100px" width="100px">
                                    <p><span class="mt-3">Materias primas 100% orgánicas.</span></p>
                                    <div class="code-icon"></div>
                                </div>
                                <div class="css-desc">
                                    <p class="code-title"></p>
                                    <img class="img-fluid lazy my-3 imagen-M"
                                        data-src="{{ asset('img/landing/beneficios/nm_beneficios_M.webp') }}"
                                        alt="nutrimentos milenium beneficios" height="100px" width="100px">
                                    <p><span class="mt-3">Nutrimos a tus animales desde el nacimiento hasta su
                                            madurez.</span></p>
                                    <div class="code-icon"></div>
                                </div>
                                <div class="javascript-desc">
                                    <p class="code-title"></p>
                                    <img class="img-fluid lazy my-3"
                                        data-src="{{ asset('img/landing/beneficios/nm_beneficios_E.webp') }}"
                                        alt="nutrimentos milenium beneficios" height="100px" width="100px">
                                    <p><span class="mt-3">Máximo desarrollo: crecimiento, apareamiento y
                                            resistencia.</span></p>
                                    <div class="code-icon"></div>
                                </div>
                                <div class="gui-desc">
                                    <p class="code-title"></p>
                                    <img class="img-fluid lazy my-3"
                                        data-src="{{ asset('img/landing/beneficios/nm_beneficios_L.webp') }}"
                                        alt="nutrimentos milenium beneficios" height="100px" width="100px">
                                    <p><span class="mt-3">Calidad PREMIUM en todas nuestras líneas de alimentos.</span>
                                    </p>
                                    <div class="code-icon"></div>
                                </div>
                                <div class="seo-desc">
                                    <p class="code-title"></p>
                                    <img class="img-fluid lazy my-3"
                                        data-src="{{ asset('img/landing/beneficios/nm_beneficios_D.webp') }}"
                                        alt="nutrimentos milenium beneficios" height="100px" width="100px">
                                    <p><span class="mt-3">Animales con mayor peso y tamaño sin usar químicos, solo con
                                            Milenium.</span>
                                    </p>
                                    <div class="code-icon"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hoverblock"></div>
                </div> <!-- End Centerfold-Wrap -->
            </div>
        </section>
        <!-- End Beneficios Section -->

        <!-- ======= Sucursales Section======= -->
    <section id="sucursales" class="sucursales">
        <div class="container-fluid">
          <div class="section-title">
            <div class="d-flex flex-row justify-content-center align-items-center">
              <hr>
              <h2>Sucursales</h2>
              <hr>
            </div>
          </div>
          @include('partials.sucursales')
        </div>
      </section>
    </div>
@endsection

@push('css')
    

    <link rel="preload stylesheet" href="{{ asset('css/index/hexagon.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

    <link rel="preload stylesheet" href="{{ asset('css/index/vide-js.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">

        <link rel="preload stylesheet" href="{{ asset('css/index/tabs.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload stylesheet" href="{{ asset('css/index.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
@endpush
@push('js')
    <!-- Hexagon -->
    <script defer src="{{ asset('js/view/index/hexagon.js') }}"></script>
    <script defer src='{{ asset('js/view/index/velocity.min.js') }}'></script>
    <script defer src='{{ asset('js/view/index/velocity.ui.min.js') }}'></script>
    <script defer src='{{ asset('js/view/index/jquery-ui.min.js') }}'></script>
    <!-- Tabs -->
    <script defer src='{{ asset('js/view/index/tabs.js') }}'></script>
@endpush
