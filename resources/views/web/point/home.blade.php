@extends('web.master.master')

@section('content')
    <!-- start header -->
    <header>
        <!-- start navigation -->
        <nav class="navbar navbar-default bootsnav background-black header-dark white-link navbar-top navbar-expand-lg">
            <div class="container nav-header-container">
                <!-- start logo -->
                <div class="col-auto pl-lg-0">
                    <a href="{{ route('web.home') }}" title="PIIV" class="logo"><img src="{{ url(asset('frontend/assets/images/logo.png')) }}" data-rjs="{{ url(asset('frontend/assets/images/logo@2x.png')) }}" class="logo-dark" alt="PIIV"><img src="{{ url(asset('frontend/assets/images/logo-white.png')) }}" data-rjs="{{ url(asset('frontend/assets/images/logo-white@2x.png')) }}" alt="PIIV" class="logo-light default"></a>
                </div>
                <!-- end logo -->
                <div class="col accordion-menu pr-0 pr-md-3">
                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal" data-in="fadeIn" data-out="fadeOut">
                            <!-- start menu item -->
                            <li class="dropdown megamenu-fw">
                                <a href="{{ route('web.home') }}">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
                            </li>
                            <!-- end menu item -->
                        </ul>
                    </div>
                </div>
                <div class="col-auto pr-lg-0">
                    <div class="header-searchbar">
                        <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                        <!-- search input-->
                        <form id="search-header" method="post" action="" name="search-header" class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class="fas fa-search close-search search-button"></button>
                                <input type="text" name="search" class="search-input" placeholder="Pesquisar por..." autocomplete="off">
                            </div>
                        </form>
                    </div>
                    <div class="header-social-icon d-none d-md-inline-block">
                        <a href="https://www.facebook.com/" title="Facebook" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <section class="wow fadeIn cover-background background-position-top top-space"
             style="background-image:url('{{ url($point->banner()) }}');">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column text-center justify-content-center page-title-large padding-30px-tb">
                    <!-- start sub title -->
                    <span class="d-block text-white-2 opacity6 alt-font margin-5px-bottom">Turismo Guaratinguetá</span>
                    <!-- end sub title -->
                    <!-- start page title -->
                    <h1 class="alt-font text-white-2 font-weight-600 mb-0">{{ $point->cta }}</h1>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start story section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 text-center md-margin-30px-bottom wow fadeInLeft">
                    <img src="{{ url('storage/' . \App\Support\Cropper::thumb($point->cover(), 900, 650)) }}" alt=""
                         class="border-radius-6 w-100">
                </div>
                <div
                    class="col-12 col-lg-7 padding-eight-lr text-center text-lg-left lg-padding-nine-right md-padding-15px-lr wow fadeInRight"
                    data-wow-delay="0.2s">
                    <h6 class="alt-font text-extra-dark-gray">Conheça um pouco da nossa história.</h6>
                    <p>{{ $point->description }}</p>
                    <a href="{{ route('web.home') }}"
                       class="btn btn-dark-gray btn-small text-extra-small btn-rounded margin-5px-top"><i
                            class="fas fa-play-circle icon-very-small margin-5px-right no-margin-left"
                            aria-hidden="true"></i> Voltar ao Home</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end story section -->
    <!-- start services section -->
    <section class="p-0 wow fadeIn">
        <div class="container-fluid p-0">
            <div class="row">
                <div class="col-12">
                    <div class="row m-0">
                    @foreach($point->news()->active()->get() as $notice)
                        <!-- start interactive banners item -->
                            <div class="col-12 col-md-4 padding-5px-all grid-item feature-box-4 wow slideInDown">
                                <div class="position-relative overflow-hidden">
                                    <figure class="m-0">
                                        <img
                                            src="{{ url('storage/' . \App\Support\Cropper::thumb($notice->cover(),800,571)) }}"
                                            alt="{{ $notice->title }}">
                                        <div class="opacity-medium bg-extra-dark-gray"></div>
                                        <figcaption>
                                            <span
                                                class="text-medium-gray margin-10px-bottom d-inline-block ">{{ $notice->title }}</span>
                                            <div
                                                class="bg-deep-pink separator-line-horrizontal-full d-inline-block margin-10px-bottom"></div>
                                            <span
                                                class="text-extra-large d-block text-white-2 alt-font margin-25px-bottom width-60 lg-width-100 md-margin-seven-bottom">{!! \Illuminate\Support\Str::limit(strip_tags($notice->content), 50)  !!}</span>
                                            <a href="{{ route('web.showSingle', $notice->id) }}"
                                               class="btn btn-very-small btn-white font-weight-300">Continue
                                                Lendo</a>
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                            <!-- end interactive banners item -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end services section -->
    <!-- start gallery section -->
    <section class="wow fadeIn ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                    <div class="position-relative overflow-hidden w-100">
                        <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Veja algumas fotos</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <ul class="portfolio-grid work-4col hover-option2 gutter-small w-100">
                    <li class="grid-sizer"></li>
                @foreach($point->photos()->common()->get() as $photo)
                    <!-- start image gallery item -->
                        <li class="grid-item wow fadeInUp">
                            <a class="single-image-lightbox" title="Galeria de: {{ $point->cta }}"
                               href="{{ url('storage/'. \App\Support\Cropper::thumb($photo->path,900,650)) }}">
                                <figure>
                                    <div class="portfolio-img bg-extra-dark-gray"><img
                                            src="{{ url('storage/'. \App\Support\Cropper::thumb($photo->path,900,650)) }}"
                                            alt=""
                                            class="project-img-gallery"/>
                                    </div>
                                    <figcaption>
                                        <div class="portfolio-hover-main text-center">
                                            <div class="portfolio-hover-box vertical-align-middle">
                                                <div class="portfolio-hover-content position-relative">
                                                    <i class="ti-zoom-in text-white-2 fa-2x"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </li>
                        <!-- endv image gallery item -->
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
    <!-- end gallery section -->
    <!-- start information section -->
    <section class="bg-extra-dark-gray wow fadeIn">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-5 lg-margin-50px-bottom wow fadeInLeft">
                    <h5 class="alt-font text-light-gray margin-30px-bottom">Planeje sua viagem e venha nos conhecer</h5>
                    <ul class="p-0 list-style-4 list-style-color">
                        <li>Não deixe de nos fazer uma visita</li>
                        <li>Faça sua caravana e conheça nosso pontos turísticos</li>
                        <li>Amor, Fé e Devoção na terra do primeiro Santo brasileiro.</li>
                        <li>Tranquilidade, paz e diversão no coração do Vale do Paraíba</li>
                        <li>Não perca tempo! Faça um contato que estaremos prontos pra te atender</li>
                    </ul>
                    <a href="#"
                       class="btn btn-white btn-small text-extra-small btn-rounded margin-20px-top"><i
                            class="fas fa-envelope icon-very-small margin-5px-right no-margin-left"
                            aria-hidden="true"></i> Fale Conosco</a>
                </div>
                <div class="col-12 col-lg-7 wow fadeInRight">
                    <img src="{{ url(asset('frontend/assets/images/planeje.jpg')) }}" alt="" class="w-100">
                </div>
            </div>
        </div>
    </section>
    <!-- end information section -->
    <!-- start map section -->
    <section class="wow fadeIn no-padding-bottom">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7 text-center margin-100px-bottom sm-margin-40px-bottom">
                <div class="position-relative overflow-hidden w-100">
                    <span class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase">Saiba como chegar em: {{ $point->cta }}</span>
                </div>
            </div>
            <div id="map" style="width: 100%; min-height: 500px;"></div>
        </div>
    </section>
    <!-- end map section -->
@endsection

@section('js')
    <script>
        function markMap() {
            var citymap = {
                property: {
                    center: {lat: {{ $lat }}, lng: {{ $long }}},
                    population: 110
                }
            };

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 18,
                center: {lat: {{ $lat }}, lng: {{ $long }}},
                mapTypeId: 'terrain'
            });

            for (var city in citymap) {
                var cityCircle = new google.maps.Circle({
                    strokeColor: '#990000',
                    strokeOpacity: 0.8,
                    strokeWeight: 2,
                    fillColor: '#990000',
                    fillOpacity: 0.35,
                    map: map,
                    center: citymap[city].center,
                    radius: Math.sqrt(citymap[city].population) * 1
                });
            }
        }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDtXvT8O3UeHz1G-fqYGeUYnFoBBp7wndE&callback=markMap"></script>
@endsection
