@extends('web.master.master')

@section('content')
    <!-- start header -->
    <header class="header-with-topbar">
        <!-- topbar -->
        <div class="top-header-area bg-black padding-10px-tb">
            <div class="container">
                <div class="row align-items-center">
                    <div
                        class="col-md-6 text-uppercase alt-font d-flex align-items-center justify-content-center justify-content-md-start">
                        <a href="tel:1234567890" class="text-link-white-2 line-height-normal"
                           title="Call us 123-456-7890">Contato 12 3456-7890</a>
                        <div
                            class="separator-line-verticle-extra-small bg-dark-gray display-inline-block margin-two-half-lr position-relative vertical-align-middle"></div>
                        <a href="mailto:no-reply@domain.com" class="text-link-white-2 line-height-normal"
                           title="no-reply@domain.com">no-reply@projetointegrador4.com</a>
                    </div>
                    <div class="col-md-6 d-none d-md-flex align-items-center justify-content-end">
                        <div class="icon-social-very-small display-inline-block line-height-normal">
                            <a href="https://www.facebook.com/" title="Facebook" target="_blank"
                               class="text-link-white-2"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                            <a href="https://twitter.com/" title="Twitter" target="_blank" class="text-link-white-2"><i
                                    class="fab fa-twitter"></i></a>
                            <a href="https://linkedin.com/" title="Linked In" target="_blank" class="text-link-white-2"><i
                                    class="fab fa-linkedin-in"></i></a>
                            <a href="https://plus.google.com" title="Google Plus" target="_blank"
                               class="text-link-white-2"><i
                                    class="fab fa-google-plus-g"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end topbar -->
        <!-- start navigation -->
        <nav
            class="navbar navbar-default bootsnav navbar-top header-light-transparent background-transparent nav-box-width navbar-expand-lg">
            <div class="container nav-header-container">
                <!-- start logo -->
                <div class="col-auto pl-lg-0">
                    <a href="index.html" title="Pofo" class="logo"><img
                            src="{{ url(asset('frontend/assets/images/logo.png')) }}"
                            data-rjs="{{ url(asset('frontend/assets/images/logo.png')) }}{{ url(asset('frontend/assets/images/logo@2x.png')) }}"
                            class="logo-dark default" alt="Pofo"><img
                            src="{{ url(asset('frontend/assets/images/logo-white.png')) }}"
                            data-rjs="{{ url(asset('frontend/assets/images/logo-white@2x.png')) }}" alt="Pofo"
                            class="logo-light"></a>
                </div>
                <!-- end logo -->
                <div class="col accordion-menu pr-0 pr-md-3">
                    <button type="button" class="navbar-toggler collapsed" data-toggle="collapse"
                            data-target="#navbar-collapse-toggle-1">
                        <span class="sr-only">toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <div class="navbar-collapse collapse justify-content-end" id="navbar-collapse-toggle-1">
                        <ul id="accordion" class="nav navbar-nav navbar-left no-margin alt-font text-normal"
                            data-in="fadeIn" data-out="fadeOut">
                            <!-- start menu item -->
                            <li class="dropdown megamenu-fw">
                                <a href="#">Home</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                                       aria-hidden="true"></i>
                            </li>
                            <!-- end menu item -->
                            <li class="dropdown simple-dropdown"><a href="#">Pontos</a><i
                                    class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown"
                                    aria-hidden="true"></i>
                                <!-- start sub menu -->
                                <ul class="dropdown-menu" role="menu">
                                    @foreach($points->get() as $point)
                                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"
                                                                href="#">{{ $point->cta }}<i
                                                    class="fas fa-angle-right"></i></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="{{ route('web.showPoint', $point->id) }}">Home</a></li>
                                                <li><a href="{{ route('web.showNews', $point->id) }}">Notícias</a></li>
                                            </ul>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-auto pr-lg-0">
                    <div class="header-searchbar">
                        <a href="#search-header" class="header-search-form"><i class="fas fa-search search-button"></i></a>
                        <!-- search input-->
                        <form id="search-header" method="post" action="" name="search-header"
                              class="mfp-hide search-form-result">
                            <div class="search-form position-relative">
                                <button type="submit" class="fas fa-search close-search search-button"></button>
                                <input type="text" name="search" class="search-input" placeholder="Pesquisa por..."
                                       autocomplete="off">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
        <!-- end navigation -->
        <!-- end navigation -->
    </header>
    <!-- end header -->
    <!-- start slider -->
    <section class="wow fadeIn p-0 main-slider mobile-height top-space">
        <div class="swiper-full-screen swiper-container w-100 white-move">
            <div class="swiper-wrapper">

            @foreach($points->get() as $point)
                <!-- start slider item -->
                    <div class="swiper-slide cover-background"
                         style="background-image:url('{{ url($point->banner()) }}');">
                        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                        <div class="container position-relative one-fourth-screen sm-height-400px">
                            <div class="slider-typography text-center">
                                <div class="slider-text-middle-main">
                                    <div class="slider-text-middle">
                                        <h1 class="alt-font text-uppercase text-white-2 font-weight-700 width-75 sm-width-95 mx-auto margin-35px-bottom sm-margin-15px-bottom">
                                            {{ $point->cta }}</h1>
                                        <div class="btn-dual"><a
                                                href="{{ route('web.showPoint',$point->id) }}"
                                                class="btn btn-white btn-rounded btn-medium sm-margin-two-all">Venha
                                                Conhecer</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end slider item -->
                @endforeach

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination swiper-pagination-white swiper-full-screen-pagination"></div>
            <div class="swiper-button-next swiper-button-black-highlight d-none"></div>
            <div class="swiper-button-prev swiper-button-black-highlight d-none"></div>
        </div>
    </section>
    <!-- end slider -->
    <!-- start about agency -->
    <section class="wow fadeIn bg-light-gray">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12  col-md-11 text-center wow fadeInUp margin-eight-bottom">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Sobre
                        Guaratinguetá
                    </div>
                    <h6 class="font-weight-300 text-extra-dark-gray mb-0">Além de ser um importante centro de comércio e
                        prestação de serviços da região do fundo do Vale do Paraíba,<strong
                            class="font-weight-400">Guaratinguetá</strong> se destaca por ser um importante ponto
                        turístico de caráter religioso, juntamente com o município vizinho de Aparecida. Juntos,
                        movimentam grande quantidade de turistas durante o ano. Conheça nosso <strong
                            class="font-weight-400">Circuito da Fé</strong> e se encante com as riquesas de nossa
                        história.</h6>
                </div>
            </div>
            <div class="row">
            @foreach($points->get() as $point)
                <!-- start features box item -->
                    <div class="col-12 col-md-6 sm-margin-30px-bottom wow fadeInUp">
                        <div class="bg-white text-center h-100">
                            <a href="{{ route('web.showPoint', $point->id) }}"><img
                                    src="{{ url('storage/'. \App\Support\Cropper::thumb($point->cover(),750,500)) }}"
                                    alt=""></a>
                            <div class="padding-45px-all md-padding-15px-all">
                                <span
                                    class="text-extra-dark-gray font-weight-600 d-block alt-font margin-10px-bottom">{{ $point->cta }}</span>
                                <p>{{ \Illuminate\Support\Str::limit($point->description, 100) }}</p>
                                <a href="{{ route('web.showPoint', $point->id) }}"
                                   class="btn btn-small btn-rounded btn-transparent-dark-gray">Veja Mais <i
                                        class="ti-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- end feature box item -->
                @endforeach
            </div>
        </div>
    </section>
    <!-- end about agency section -->
    <!-- start feature box section -->
    <section class="bg-extra-dark-gray wow fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Por que nos
                        visitar?
                    </div>
                    <h5 class="alt-font text-white-2 font-weight-600 mb-0">Nós oferecemos coisas maravilhosas para
                        você.</h5>
                </div>
            </div>
            <div class="row">
                <!-- start features box -->
                <div class="col-12 col-lg-3 col-md-6 md-margin-30px-bottom wow fadeInUp">
                    <div
                        class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 lg-padding-six-all h-100 sm-padding-15px-lr">
                        <i class="icon-map-pin icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-20px-bottom sm-margin-15px-bottom"></i>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Lugares Únicos
                        </div>
                        <p>Venha conhecer a história dos lugares e pessoas que marcaram a religião e a fé no país</p>
                        <div class="feature-box-overlay bg-deep-pink"></div>
                    </div>
                </div>
                <!-- end feature box -->
                <!-- start features box -->
                <div class="col-12 col-lg-3 col-md-6 md-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                    <div
                        class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 lg-padding-six-all h-100 sm-padding-15px-lr">
                        <i class="icon-heart icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-20px-bottom sm-margin-15px-bottom"></i>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Diferentes
                            Experiências
                        </div>
                        <p>Apaixone-se pela terra do primeiro Santo brasileiro.</p>
                        <div class="feature-box-overlay bg-deep-pink"></div>
                    </div>
                </div>
                <!-- end feature box -->
                <!-- start features box -->
                <div class="col-12 col-lg-3 col-md-6 wow fadeInUp sm-margin-30px-bottom" data-wow-delay="0.4s">
                    <div
                        class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 lg-padding-six-all h-100 sm-padding-15px-lr">
                        <i class="icon-camera icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-20px-bottom sm-margin-15px-bottom"></i>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Registre o momento
                        </div>
                        <p>Eternize seus momentos nos lugares onde você revela sua devoção.</p>
                        <div class="feature-box-overlay bg-deep-pink"></div>
                    </div>
                </div>
                <!-- end feature box -->
                <!-- start features box -->
                <div class="col-12 col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div
                        class="bg-white box-shadow-light text-center padding-twelve-all feature-box-8 position-relative z-index-5 lg-padding-six-all h-100 sm-padding-15px-lr">
                        <i class="icon-map icon-extra-medium text-deep-pink margin-25px-bottom margin-25px-top md-margin-20px-bottom sm-margin-15px-bottom"></i>
                        <div class="alt-font text-extra-dark-gray font-weight-600 margin-10px-bottom">Circuito da Fé
                        </div>
                        <p>Conheça todos os pontos de nosso turismo Religioso</p>
                        <div class="feature-box-overlay bg-deep-pink"></div>
                    </div>
                </div>
                <!-- end feature box -->
            </div>
        </div>
    </section>
    <!-- end feature box section -->
    <!-- start blog section -->
    <section class="border-top border-color-extra-light-gray wow fadeIn">
        <div class="container">
            <div class="row justify-content-center">
                <div
                    class="col-12 col-xl-5 col-md-6 margin-eight-bottom md-margin-40px-bottom sm-margin-30px-bottom text-center">
                    <div class="alt-font text-medium-gray margin-5px-bottom text-uppercase text-small">Últimas Notícias
                    </div>
                    <h5 class="alt-font text-extra-dark-gray font-weight-600 mb-0">Fique por dentro do que acontece</h5>
                </div>
            </div>
            <div class="row">
            @foreach($point->get() as $point)
                @foreach($point->news()->limit(1)->get() as $notice)
                <!-- start blog post item -->
                    <div
                        class="col-12 col-lg-3 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin text-center text-md-left wow fadeInUp">
                        <div class="blog-post blog-post-style1">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                <a href="{{ route('web.showSingle', $notice->id) }}">
                                    <img src="{{ url('storage/' . \App\Support\Cropper::thumb($notice->cover(),700,403)) }}" alt="">
                                </a>
                            </div>
                            <div class="post-details">
                        <span
                            class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom">{{ date("d/m/Y", strtotime($notice->created_at)) }} | por <a
                                href="#" class="text-link-dark-gray">EC 4N.2</a></span>
                                <a href="{{ route('web.showSingle', $notice->id) }}"
                                   class="post-title text-medium text-extra-dark-gray width-90 sm-width-100 d-block">I
                                    {{ $notice->title }}</a>
                                <div class="separator-line-horrizontal-full bg-medium-light-gray margin-15px-tb"></div>
                                <p class="width-90 sm-width-100">{!! \Illuminate\Support\Str::limit(strip_tags($notice->content),100) !!} </p>
                            </div>
                        </div>
                    </div>
                    <!-- end blog post item -->
                    @endforeach
                @endforeach
            </div>
        </div>
    </section>
    <!-- end blog section -->
@endsection
