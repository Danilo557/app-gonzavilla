@extends('layouts.store')
@section('content')
    @if ($line->image_count > 1)
        <section id="hero" class="d-flex flex-column justify-content-center mt-lg-5 pb-md-3" data-aos="fade-in"
            data-aos-delay="100">
            <div class="row justify-content-center">
                <div id="heroCarousel" class="carousel slide fade-up" data-ride="carousel" data-interval="2000">
                    <ol class="carousel-indicators">
                        @php
                            $contador = 0;
                        @endphp

                        @foreach ($line->images as $image)
                            <li data-target="#heroCarousel" data-slide-to="{{ $contador }}"
                                class="{{ $loop->first ? 'active' : '' }}"></li>
                            @php
                                $contador++;
                            @endphp
                        @endforeach


                    </ol>
                    <div class="carousel-inner">

                        @foreach ($line->images as $image)
                            <!-- Slide 1 -->
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="carousel-container">
                                    <picture>

                                        <img class="img-fluid img-carousel lazy" data-src="{{ Storage::url($image->url) }}"
                                            alt="nutrimentos milenium banner horse line" height="100px" width="100px">
                                    </picture>
                                </div>
                            </div>
                        @endforeach


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
    @elseif($line->image_count == 1)
        <section class="banner aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
            <picture>
                <img class="img-fluid lazy" data-src="{{ Storage::url($line->image_url) }}"
                     width="100px" height="100px">
            </picture>
        </section>
    @elseif($line->image_count == 0)
         
        <section class="banner aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
            <picture>
                <img class="img-fluid lazy" data-src="{{ asset( $line->image_url) }}"
                    width="100px" height="100px">
            </picture>
        </section>
    @endif





    <section class="linea">
        <!--MILE CONCENTRADO BOVINO OVN-->

        @foreach ($line->products as $product)
            <div class="producto" data-aos="fade-up" data-aos-delay="100">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="myriadpro-bold text-md-right text-center mile">
                            {{ $product->category->name }}

                            <span class="myriadpro-regular">


                                {{ $product->name }}
                            </span>
                        </h2>
                        <h3 class="subtitulo text-md-right text-center mt-3">
                            {{ $product->subcategory->name }}
                        </h3>
                        <div class="row">
                            <div class="col-lg-6 d-flex justify-content-center align-items-center">
                                @isset($product->image)
                                    <img class="img-fluid lazy img-product" data-src="{{ Storage::url($product->image->url) }}"
                                        width="100px" height="100px" alt="nutrimentos milenium mile concentrado bovino ovn">
                                @endisset

                            </div>
                            <div class="col-lg-6">
                                {!! $product->description !!}
                                <!-- Usu sugerido -->
                                <h3 class="categoria text-right">Uso sugerido</h3>
                                {!! $product->suggested_use !!}

                                <div class="d-flex justify-content-center d-md-none d-block">
                                    <div class="btn-ocultar my-5">Ver más</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-lg-6 ocultar-pleca d-md-block d-none">
                        <!-- Pleca -->
                        <div class="d-flex  flex-row-reverse align-items-center lazy bg-pleca"
                            data-bg="{{ asset('img/landing/fondos/NM_pleca_prod.webp') }}">
                            <h2 class="titulo">{{ $product->feature->name }}</h2>
                        </div>
                        <div class="contenedor ml-lg-5 ml-0">
                            <h3 class="categoria text-right mt-5">Información Nutrimental</h3>
                            <table>
                                @foreach ($product->nutritions as $nutrition)
                                    <tr>
                                        <td>{{ $nutrition->name }}</td>
                                        <td>
                                            <hr>
                                        </td>
                                        <td>{{ $nutrition->pivot->percentage }}%</td>
                                    </tr>
                                @endforeach


                            </table>
                            <h3 class="categoria text-right mt-3">Ingredientes</h3>
                            {!! $product->ingredients !!}
                            <div class="d-flex justify-content-start align-items-center ">
                                <div class="d-flex justify-content-center align-items-center ">
                                    <h3 class="categoria my-3">Presentaciones</h3>
                                </div>
                                <div class="d-flex justify-content-start align-items-center flex-wrap">
                                    @foreach ($product->sizes as $size)
                                        <div class="d-flex justify-content-center align-items-end m-0 m-lg-3">
                                            <div class="d-flex justify-content-center align-items-end">
                                                <img class="img-fluid img-bag lazy"
                                                    data-src="{{ asset('img/landing/bag.svg') }}"
                                                    alt="nutrimentos nilenium precentacion de 40kg" width="100px"
                                                    height="100px">
                                                <span class="peso">{{ $size->unit }}</span>
                                            </div>
                                            <span class="font-italic">Kg.</span>
                                        </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


    </section>
@endsection
@push('css')
    <link rel="preload stylesheet" href="{{ asset('css/linea.min.css') }}" as="style"
        onload="this.onload=null;this.rel='stylesheet'">
@endpush

@push('js')
@endpush
