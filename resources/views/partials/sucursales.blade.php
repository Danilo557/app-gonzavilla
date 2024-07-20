@php
    $branches = App\Models\Branche::where('type_id', 1)->get();
    $dealers = App\Models\Branche::where('type_id', 2)->get();
    $contador = 0;
@endphp

<ul class="faq-list">
    <li>
        <a data-toggle="collapse" class="collapsed faq-button" href="#faq1">
            <div class="d-flex justify-content-end align-items-center elemet-list">
                Planta y venta al mayoreo
                <i class="fas fa-sort-down"></i><i class="fas fa-times"></i>
            </div>
        </a>
        <div id="faq1" class="collapse" data-parent=".faq-list">
            <div class="contenedor-sucursal d-sm-block d-none">
                <div class="row my-lg-5 my-0">
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img class="img-fluid lazy img-sucursal" data-src="img/landing/sucursales/sucursal.webp"
                            alt="nutrimentos milenium sucursal" height="100px" width="100px">
                    </div>
                    <div class="col-lg-9 ">
                        <h3 class="myriad-bold mx-auto">VENTAS MAYOREO <span class="myriad-regular"></span></h3>
                        <p>Tel: <span class="font-weight-bold">(222) 750 4745</span> </p>
                        <div
                            class="d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center py-2">
                            <a class="btn btn-icon btn-phone" target="_blank" href="tel:222-750-4745">
                                <i class="fas fa-phone-alt"></i><span>Llamar</span>
                            </a>
                            <a class="btn btn-icon btn-whatsapp" target="_blank" href="https://wa.me/522481952744">
                                <i class="fab fa-whatsapp fa-lg"></i><span>WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row my-lg-5 my-0">
                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                        <img class="img-fluid lazy img-sucursal" data-src="img/landing/sucursales/sucursal.webp"
                            alt="nutrimentos milenium sucursal" height="100px" width="100px">
                    </div>
                    <div class="col-lg-9 ">
                        <h3 class="myriad-bold">ATENCIÓN A CLIENTES <span class="myriad-regular"></span></h3>
                        <p>Tel: <span class="font-weight-bold">(222) 525 2541</span> </p>
                        <div
                            class="d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center py-2">
                            <a class="btn btn-icon btn-phone" target="_blank" href="tel:222-525-2541">
                                <i class="fas fa-phone-alt"></i><span>Llamar</span>
                            </a>
                            <a class="btn btn-icon btn-whatsapp" target="_blank" href="https://wa.me/522225252541">
                                <i class="fab fa-whatsapp fa-lg"></i><span>WhatsApp</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Carrousel  Planta y venta al mayoreo-->
            <div class="contenedor-sucursal  d-sm-none d-block pb-5">
                <div id="carouselPlantasIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselPlantasIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselPlantasIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row my-lg-5 my-0">
                                <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                    <img class="img-fluid lazy img-sucursal"
                                        data-src="img/landing/sucursales/sucursal.webp"
                                        alt="nutrimentos milenium sucursal" height="100px" width="100px">
                                </div>
                                <div class="col-lg-9">
                                    <div class="d-flex flex-column d-flex justify-content-center align-items-center">
                                        <h3 class="myriad-bold text-center">VENTAS MAYOREO <span
                                                class="myriad-regular"></span></h3>
                                        <p>Tel: <span class="font-weight-bold">(222) 750 4745</span> </p>
                                        <div
                                            class="d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center py-2">
                                            <a class="btn btn-icon btn-phone" target="_blank" href="tel:222-750-4745">
                                                <i class="fas fa-phone-alt"></i><span>Llamar</span>
                                            </a>
                                            <a class="btn btn-icon btn-whatsapp" target="_blank"
                                                href="https://wa.me/522481952744">
                                                <i class="fab fa-whatsapp fa-lg"></i><span>WhatsApp</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="content">
                                <div class="row my-lg-5 my-0">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                        <img class="img-fluid lazy img-sucursal"
                                            data-src="img/landing/sucursales/sucursal.webp"
                                            alt="nutrimentos milenium sucursal" height="100px" width="100px">
                                    </div>
                                    <div class="col-lg-9 ">
                                        <div
                                            class="d-flex flex-column d-flex justify-content-center align-items-center">
                                            <h3 class="myriad-bold text-center">ATENCIÓN A CLIENTES <span
                                                    class="myriad-regular"></span></h3>
                                            <p>Tel: <span class="font-weight-bold">(222) 525 2541</span> </p>
                                            <div
                                                class="d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center py-2">
                                                <a class="btn btn-icon btn-phone" target="_blank"
                                                    href="tel:222-525-2541">
                                                    <i class="fas fa-phone-alt"></i><span>Llamar</span>
                                                </a>
                                                <a class="btn btn-icon btn-whatsapp" target="_blank"
                                                    href="https://wa.me/522225252541">
                                                    <i class="fab fa-whatsapp fa-lg"></i><span>WhatsApp</span>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselPlantasIndicators" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselPlantasIndicators" role="button"
                        data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </li>
    <li>
        <a data-toggle="collapse" class="collapsed faq-button" href="#faq2">
            <div class="d-flex justify-content-end align-items-center elemet-list">
                Franquicias
                <i class="fas fa-sort-down"></i><i class="fas fa-times"></i>
            </div>
        </a>
        <div id="faq2" class="collapse" data-parent=".faq-list">
            <div class="contenedor-sucursal d-sm-block d-none">
                @foreach ($branches as $branch)
                    <div class="row my-lg-5 my-0">
                        <div class="col-lg-3 d-flex justify-content-center align-items-center">
                            <img class="img-fluid lazy img-sucursal rounded-circle"
                                data-src="img/landing/sucursales/sucursal.webp" alt="nutrimentos milenium sucursal"
                                height="100px" width="100px">
                        </div>
                        <div class="col-lg-9 ">
                            <h3 class="myriad-bold">{{ $branch->type->name }} <span
                                    class="myriad-regular">{{ $branch->municipality->name }},
                                    {{ $branch->state->name }}</span></h3>
                            <p>{{ $branch->address }}</p>
                            <p>Tel: <span class="font-weight-bold">{{ $branch->phone }}</span> </p>
                            <div
                                class="d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center py-2">
                                <a class="btn btn-icon btn-phone" target="_blank" href="tel:{{ $branch->phone }}">
                                    <i class="fas fa-phone-alt"></i><span>Llamar</span>
                                </a>
                                <a class="btn btn-icon btn-whatsapp" target="_blank"
                                    href="https://wa.me/{{ $branch->whatsapp }}">
                                    <i class="fab fa-whatsapp fa-lg"></i><span>WhatsApp</span>
                                </a>
                                <a class="btn btn-icon btn-marker fa-lg" target="_blank" href="{{ $branch->map }}">
                                    <i class="fas fa-map-marker-alt"></i></i><span>¿Cómo Llegar?</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <!-- Carrousel  Franquici-->
            <div class="contenedor-sucursal d-sm-none d-block pb-5">
                <div id="carouselFanquiciaIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        @foreach ($branches as $branch)
                            <li data-target="#carouselFanquiciaIndicators" data-slide-to="{{ $contador }}"
                                class="{{ $loop->first ? 'active' : '' }}"></li>
                            @php
                                $contador++;
                            @endphp
                        @endforeach


                    </ol>
                    <div class="carousel-inner">

                        @foreach ($branches as $branch)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="row my-lg-5 my-0">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                        <img class="img-fluid lazy img-sucursal"
                                            data-src="img/landing/sucursales/sucursal.webp"
                                            alt="nutrimentos milenium sucursal" height="100px" width="100px">
                                    </div>
                                    <div class="col-lg-9 d-flex justify-content-center align-items-center">
                                        <div
                                            class="d-flex flex-column d-flex justify-content-center align-items-center">
                                            <h3 class="myriad-bold text-center">{{ $branch->type->name }} <span
                                                    class="myriad-regular">{{ $branch->municipality->name }},
                                                    {{ $branch->state->name }}</span></h3>
                                            <p class="text-center">{{ $branch->address }}</p>
                                            <p>Tel: <span class="font-weight-bold">{{ $branch->phone }}</span> </p>
                                            <div
                                                class="d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center py-2">
                                                <a class="btn btn-icon btn-phone" target="_blank"
                                                    href="tel:{{ $branch->phone }}">
                                                    <i class="fas fa-phone-alt"></i><span>Llamar</span>
                                                </a>
                                                <a class="btn btn-icon btn-whatsapp" target="_blank"
                                                    href="https://wa.me/{{ $branch->whatsapp }}">
                                                    <i class="fab fa-whatsapp fa-lg"></i><span>WhatsApp</span>
                                                </a>
                                                <a class="btn btn-icon btn-marker fa-lg" target="_blank"
                                                    href={{ $branch->map }}">
                                                    <i class="fas fa-map-marker-alt"></i></i><span>¿Cómo Llegar?</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <a class="carousel-control-prev" href="#carouselFanquiciaIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselFanquiciaIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
    </li>
    <li>
        <a data-toggle="collapse" class="collapsed faq-button" href="#faq3">
            <div class="d-flex justify-content-end align-items-center elemet-list">
                Distribuidores autorizados
                <i class="fas fa-sort-down"></i><i class="fas fa-times"></i>
            </div>
        </a>
        <div id="faq3" class="collapse" data-parent=".faq-list">
            @php
                $contador = 0;
            @endphp
            <div class="contenedor-sucursal d-sm-block d-none">
                @foreach ($dealers as $branch)
                    <div class="row my-lg-5 my-0">
                        <div class="col-lg-3 d-flex justify-content-center align-items-center">
                            <img class="img-fluid lazy img-sucursal rounded-circle"
                                data-src="img/landing/sucursales/sucursal.webp" alt="nutrimentos milenium sucursal"
                                height="100px" width="100px">
                        </div>
                        <div class="col-lg-9 ">
                            <h3 class="myriad-bold">{{ $branch->type->name }} <span
                                    class="myriad-regular">{{ $branch->municipality->name }},
                                    {{ $branch->state->name }}</span></h3>
                            <p>{{ $branch->address }}</p>
                            <p>Tel: <span class="font-weight-bold">{{ $branch->phone }}</span> </p>
                            <div
                                class="d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center py-2">
                                <a class="btn btn-icon btn-phone" target="_blank" href="tel:{{ $branch->phone }}">
                                    <i class="fas fa-phone-alt"></i><span>Llamar</span>
                                </a>
                                <a class="btn btn-icon btn-whatsapp" target="_blank"
                                    href="https://wa.me/{{ $branch->whatsapp }}">
                                    <i class="fab fa-whatsapp fa-lg"></i><span>WhatsApp</span>
                                </a>
                                <a class="btn btn-icon btn-marker fa-lg" target="_blank" href="{{ $branch->map }}">
                                    <i class="fas fa-map-marker-alt"></i></i><span>¿Cómo Llegar?</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach



            </div>
            <!-- Carrousel  Franquici-->
            <div class="contenedor-sucursal d-sm-none d-block pb-5">
                <div id="carouselDistribuidoresIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">

                        @foreach ($dealers as $branch)
                            <li data-target="#carouselDistribuidoresIndicators" data-slide-to="{{ $contador }}"
                                class="{{ $loop->first ? 'active' : '' }}"></li>
                            @php
                                $contador++;
                            @endphp
                        @endforeach


                    </ol>
                    <div class="carousel-inner">

                        @foreach ($dealers as $branch)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                <div class="row my-lg-5 my-0">
                                    <div class="col-lg-3 d-flex justify-content-center align-items-center">
                                        <img class="img-fluid lazy img-sucursal"
                                            data-src="img/landing/sucursales/sucursal.webp"
                                            alt="nutrimentos milenium sucursal" height="100px" width="100px">
                                    </div>
                                    <div class="col-lg-9 d-flex justify-content-center align-items-center">
                                        <div
                                            class="d-flex flex-column d-flex justify-content-center align-items-center">
                                            <h3 class="myriad-bold text-center">{{ $branch->type->name }} <span
                                                    class="myriad-regular">{{ $branch->municipality->name }},
                                                    {{ $branch->state->name }}</span></h3>
                                            <p class="text-center">{{ $branch->address }}</p>
                                            <p>Tel: <span class="font-weight-bold">{{ $branch->phone }}</span> </p>
                                            <div
                                                class="d-flex flex-md-row flex-column justify-content-lg-start justify-content-center align-items-center py-2">
                                                <a class="btn btn-icon btn-phone" target="_blank"
                                                    href="tel:{{ $branch->phone }}">
                                                    <i class="fas fa-phone-alt"></i><span>Llamar</span>
                                                </a>
                                                <a class="btn btn-icon btn-whatsapp" target="_blank"
                                                    href="https://wa.me/{{ $branch->whatsapp }}">
                                                    <i class="fab fa-whatsapp fa-lg"></i><span>WhatsApp</span>
                                                </a>
                                                <a class="btn btn-icon btn-marker fa-lg" target="_blank"
                                                    href={{ $branch->map }}">
                                                    <i class="fas fa-map-marker-alt"></i></i><span>¿Cómo Llegar?</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                        <a class="carousel-control-prev" href="#carouselDistribuidoresIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselDistribuidoresIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>
