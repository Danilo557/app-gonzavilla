 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <!-- CSRF Token -->

 <head>
     <meta charset="utf-8">
     <meta content="width=device-width, initial-scale=1.0" name="viewport">
     <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>
     <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

     <!-- Favicons -->
     <link href="{{ asset('img/landing/favicon.ico') }}" rel="icon">
     <link href="{{ asset('img/landing/apple-touch-icon.webp') }}" rel="apple-touch-icon">

     <!-- Ignorar cache -->
     <meta http-equiv="Expires" content="0">
     <meta http-equiv="Last-Modified" content="0">
     <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
     <meta http-equiv="Pragma" content="no-cache">
     <!-- Vendor CSS Files -->


     <link rel="preload stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
         as="style" onload="this.onload=null;this.rel='stylesheet'">



     <link rel="preload stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
         as="style" onload="this.onload=null;this.rel='stylesheet'">

     <link rel="preload stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
         as="style" onload="this.onload=null;this.rel='stylesheet'">

         <link rel="preload stylesheet" href="https://cdn.jsdelivr.net/npm/icofont@1.0.0/dist/icofont.min.css"
         as="style" onload="this.onload=null;this.rel='stylesheet'">

         

     <link rel="preload stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" as="style"
         onload="this.onload=null;this.rel='stylesheet'">

     <link rel="preload stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" as="style"
         onload="this.onload=null;this.rel='stylesheet'">


     <!-- Template Main CSS File -->
     <link rel="preload stylesheet" href="{{ asset('css/general.min.css') }}" as="style"
         onload="this.onload=null;this.rel='stylesheet'">
     <!-- Tabs -->
     {{-- <link rel="preload stylesheet" href="css/landing/view/index/tabs.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'"> --}}
     <!-- Index -->
     {{-- <link rel="preload stylesheet" href="css/landing/index.min.css" as="style"
        onload="this.onload=null;this.rel='stylesheet'"> --}}

        @stack('css')


 </head>

 <body>
     <h1 class="d-none">Nutrimentos Milenium</h1>
     <div class="nm_bg_dos lazy" data-bg="{{ asset('img/landing/fondos/nm_bg_dos.webp') }}">
         <!-- ======= Header ======= -->
         <a href="index.html">
             <img class="logo-movil d-lg-none d-block mx-auto lazy"
                 data-src="{{ asset('img/landing/nutrimentos_milenium_log.svg') }} " data-aos="fade-in" height="100px"
                 width="100px" alt="nutrimentos milenium logo movil">
         </a>
         <header id="header" class="justify-content-center header-transparent" itemscope="itemscope"
             itemtype="https://schema.org/WPHeader" role="banner">
             <div class="container-fluid  border-down mb-5 d-none d-lg-block">
                 <nav class="d-flex  justify-content-between align-items-center mb-3">
                     <ul class="link-header  align-items-center h-card vcard">
                         <li class="p-org org">© Grupo Gonzavila</li>
                         <li><i class="fas fa-circle"></i></li>
                         <li class="p-org org">Nutrimentos Milenium</li>
                     </ul>
                     <div class="d-flex justify-content-end align-items-center">
                         <ul class="link-header d-flex align-items-center h-card vcard">
                             <li class="d-flex justify-content-between align-items-center">
                                 <i class="icofont-phone-circle icofont-3x"></i>
                             </li>
                             <li class="d-flex justify-content-between align-items-center p-tel tel">
                                 <a target="_blank" href="https://wa.me/2225252541">222.525.2541</a>
                             </li>
                             <li class="d-flex justify-content-between align-items-center p-tel tel">
                                 <a target="_blank" href="https://wa.me/2272279136">227.227.9136</a>
                             </li>
                         </ul>
                         <ul class="link-social-header h-card vcard">
                             <li><a class="fn org url" target="_blank"
                                     href="https://www.facebook.com/nutrimentosmilenium/">
                                     <i class="fab fa-facebook-f"></i></a>
                             </li>
                             <li><a class="u-url url" target="_blank"
                                     href="https://www.instagram.com/nutrimentos_milenium/"><i
                                         class="fab fa-instagram"></i></a>
                             </li>
                         </ul>
                     </div>
                 </nav>
             </div>
             <div class="container-fluid d-flex justify-content-center align-items-center">
                 <!-- ======= nav-menu ======= -->
                 <nav class="nav-menu d-none d-lg-block" itemscope="itemscope"
                     itemtype="https://schema.org/SiteNavigationElement">
                     <ul class="align-items-center h-100">
                         <li class="active separador book-a-table"><a href="{{ route('home') }}#videos">Nosotros</a></li>
                         <li class="separador"><a href="{{ route('home') }}#nuestros-productos">Productos</a></li>
                         <li><a href="{{ route('home') }}#sucursales">Sucursales</a></li>
                         <li class="d-none d-lg-block ">
                             <a id="logotipo-milenium" href="{{ route('home') }}" itemscope=""
                                 itemtype="http://schema.org/Brand">
                                 <img class="logo img-fluid lazy" data-src="{{asset("img/landing/nutrimentos_milenium_log.svg")}}"
                                     alt="nutrimentos milenium logo" width="100px" height="100px"></a>
                             </a>
                         </li>
                         <li class="separador"><a href="distribuidor.html">¿Quieres ser distribuidor?</a></li>
                         <li><a href="{{ route('home') }}#contacto">Contacto</a></li>
                     </ul>
                 </nav>
                 <!-- ======= End nav-menu ======= -->
             </div>
         </header>
         <!-- End Header -->

         <!-- End Hero -->
     </div>
     <main id="main">
         @yield('content')
     </main>
     <!-- End #main -->
     <!-- ======= Footer ======= -->
     <footer id="footer" class="lazy" data-bg="{{ asset('img/landing/fondos/NM_bg_footer.webp') }}"
         itemscope="itemscope" itemtype="https://schema.org/WPFooter" role="contentinfo">
         <div class="container-fluid">
             <div class="politicas">
                 <div class="d-flex flex-md-row flex-column justify-content-center align-items-center">
                     <a data-toggle="modal" data-target="#exampleModal">Politica de Calidad</a>
                     <i class="fas fa-circle"></i>
                     <a href="docs/landing/aviso-de-privacidad-gonzavila.pdf" target="_blank">Aviso de Privacidad</a>
                 </div>
             </div>
             <div class="row d-flex justify-content-center align-items-center mt-3">
                 <span class="font-weight-bold">Grupo Gonzavila</span>®
                 <span class="font-weight-bold"> 2021 </span>
                 <i class="fas fa-circle"></i>
                 <span class="font-italic">
                     Carretera Federal México, Puebla Km. 80, San Jerónimo Tianguismanalco, Texmelucan, Puebla.
                 </span>
             </div>
             <div class="d-flex flex-md-row flex-column justify-content-center align-items-center mt-3">
                 <a class="d-flex align-items-center" target="_blank" href="https://wa.me/2225252541">
                     <i class="icofont-brand-whatsapp icofont-2x"></i>
                     Tel:(222) 525 2541
                 </a> ~
                 <a class="d-flex align-items-center" target="_blank" href="tel:227-276-9136">
                     <i class="icofont-phone-circle icofont-2x"></i>
                     (227) 276 9136
                 </a>
             </div>
         </div>
     </footer>
     <!-- Modal Aviso de Privacidad-->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
         <div class="modal-dialog modal-dialog-centered">
             <div class="modal-content">
                 <div class="modal-header text-center">
                     <div></div>
                     <h5 class="modal-title w-100" id="exampleModalLabel">Políticas de Calidad</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>
                 </div>
                 <div class="modal-body">
                     <p class="text-justify">
                         En Gonzavila nos comprometemos a garantizar la excelencia en nuestros servicios, a través de la
                         integración
                         humana de nuestros colaboradores, proveedores y clientes, apegados a la normatividad de nuestro
                         sistema de
                         gestión de calidad y enfocados en la mejora continua.
                     </p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Aceptar</button>
                 </div>
             </div>
         </div>
     </div>
     <!-- ======= End Footer ======= -->
     <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
     <!-- WhapsApp -->
     <a href="https://wa.me/2225252541" class="whatsapp" target="_blank">
         <i class="icofont-brand-whatsapp icofont-1x"></i>
     </a>
     <!-- Vendor JS Files -->
     <script defer src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@19.1.3/dist/lazyload.min.js"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
     <!-- owl.carousel2 -->
     <script defer src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'></script>
     <script defer src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
     <script defer src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
     <script defer src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-formhelpers/2.3.0/js/bootstrap-formhelpers.min.js">
     </script>

     <!-- Template Main JS File -->
     <script defer src="{{ asset('js/main.min.js') }}"></script>


     <!-- Valid Form -->
     <script defer src="{{ asset('js/validated.min.js') }}"></script>

     <!-- Send Mail -->
 


     @stack('js')



     <!-- App -->
     <!-- <script defer src='app.js'></script> -->

     <!--

   ░ Idea Creativa • Diana J. Lozada ¦ Adrian Trujillo & Diseño • Edrei Altamirano & Desarrollo • Danilo Juarez ░
  
  -->
 </body>

 </html>
