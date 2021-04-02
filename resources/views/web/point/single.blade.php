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
                            <!-- start menu item -->
                            <li class="dropdown megamenu-fw">
                                <a href="{{ route('web.showPoint', $notice->point->id) }}">Voltar</a><i class="fas fa-angle-down dropdown-toggle" data-toggle="dropdown" aria-hidden="true"></i>
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
    <!-- start page title section -->
    <section class="wow fadeIn bg-light-gray padding-35px-tb page-title-small top-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-8 col-md-6 d-flex flex-column justify-content-center text-center text-md-left">
                    <!-- start page title -->
                    <h1 class="alt-font text-extra-dark-gray font-weight-600 mb-0 text-uppercase">Notícia</h1>
                    <!-- end page title -->
                </div>
                <div
                    class="col-xl-4 col-md-6 alt-font breadcrumb justify-content-center justify-content-md-end text-small sm-margin-10px-top">
                    <!-- start breadcrumb -->
                    <ul class="text-center text-md-left text-uppercase">
                        <li><a href="#" class="text-dark-gray">{{ date('d/m/Y', strtotime($notice->created_at)) }}</a>
                        </li>
                        <li><span class="text-dark-gray">por EC 4N.2</span></li>
                    </ul>
                    <!-- end breadcrumb -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start post content section -->
    <section>
        <div class="container">
            <div class="row">
                <main
                    class="col-12 col-lg-9 right-sidebar md-margin-60px-bottom sm-margin-40px-bottom pl-0 md-no-padding-right">
                    <div class="col-12 blog-details-text last-paragraph-no-margin">
                        <div class="blog-post-content text-center text-md-left margin-45px-bottom">
                            <div class="blog-image">
                                <blockquote class="bg-extra-dark-gray">
                                    <h6 class="text-white-2 font-weight-300 line-height-35 alt-font margin-15px-bottom">{{ $notice->title }}</h6>
                                </blockquote>
                            </div>
                        </div>
                        <img src="{{ url('storage/' . \App\Support\Cropper::thumb($notice->cover,900,600)) }}"
                             alt="{{ $notice->title }}" class="width-100 margin-45px-bottom">
                        {!! $notice->content !!}
                    </div>
                    <div class="col-12 margin-seven-bottom margin-eight-top">
                        <div class="divider-full bg-medium-light-gray"></div>
                    </div>
                    <div class="col-12">
                        <div class="row">
                            <div class="col-12 col-lg-12 text-center text-lg-right">
                                <div class="social-icon-style-6">
                                    <ul class="extra-small-icon">
                                        <li><a class="likes-count" href="#" target="_blank"><i
                                                    class="fas fa-heart text-deep-pink"></i><span
                                                    class="text-small">300</span></a></li>
                                        <li><a class="facebook" href="http://facebook.com" target="_blank"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a class="twitter" href="http://twitter.com" target="_blank"><i
                                                    class="fab fa-twitter"></i></a></li>
                                        <li><a class="google" href="http://google.com" target="_blank"><i
                                                    class="fab fa-google-plus-g"></i></a></li>
                                        <li><a class="pinterest" href="http://dribbble.com" target="_blank"><i
                                                    class="fab fa-pinterest-p"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-flex flex-wrap p-0">
                        <div class="col-12 mx-auto text-center margin-80px-tb md-margin-50px-tb sm-margin-30px-tb">
                            <div class="position-relative overflow-hidden width-100">
                                <span
                                    class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray">Outras Notícias</span>
                            </div>
                        </div>
                    @foreach($related as $related_notice)
                        <!-- start post item -->
                            <div
                                class="col-12 col-lg-4 col-md-6 last-paragraph-no-margin md-margin-50px-bottom sm-margin-30px-bottom wow fadeIn">
                                <div class="blog-post blog-post-style1 text-center text-md-left">
                                    <div
                                        class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                        <a href="{{ route('web.showSingle', $related_notice->id) }}">
                                            <img src="{{ url('storage/' . \App\Support\Cropper::thumb($related_notice->cover,700,500)) }}" alt="">
                                        </a>
                                    </div>
                                    <div class="post-details">
                                            <span
                                                class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">{{ date('d/m/Y', strtotime($related_notice->created_at)) }} | por <a
                                                    href="{{ route('web.showSingle', $related_notice->id) }}"
                                                    class="text-medium-gray">EC 4N.2</a></span>
                                        <a href="{{ route('web.showSingle', $related_notice->id) }}"
                                           class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">{{ $related_notice->title }}</a>
                                        <div
                                            class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                        <p class="width-90 sm-width-100">{!! strip_tags(\Illuminate\Support\Str::limit($related_notice->content, 150)) !!}</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end post item -->
                        @endforeach
                    </div>
                    <div class="col-12 margin-eight-top">
                        <div class="divider-full bg-medium-light-gray"></div>
                    </div>
                    <div class="col-12 blog-details-comments">
                        <div class="width-100 mx-auto text-center margin-80px-tb md-margin-50px-tb sm-margin-30px-tb">
                            <div class="position-relative overflow-hidden width-100">
                                <span
                                    class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray">Nenhum Comentário</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 margin-eight-top" id="comments">
                        <div class="divider-full bg-medium-light-gray"></div>
                    </div>
                    <div class="col-12 d-flex flex-wrap p-0">
                        <div class="col-12 mx-auto text-center margin-80px-tb md-margin-50px-tb sm-margin-30px-tb">
                            <div class="position-relative overflow-hidden width-100">
                                <span
                                    class="text-small text-outside-line-full alt-font font-weight-600 text-uppercase text-extra-dark-gray">Escreva um comentário</span>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4">
                            <input type="text" placeholder="Nome *" class="medium-input">
                        </div>
                        <div class="col-12 col-lg-4">
                            <input type="text" placeholder="E-mail *" class="medium-input">
                        </div>
                        <div class="col-12 col-lg-4">
                            <input type="url" placeholder="Website" class="medium-input">
                        </div>
                        <div class="col-12">
                            <textarea placeholder="Seu comentário aqui.." rows="8"
                                      class="medium-textarea"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button class="btn btn-dark-gray btn-small margin-15px-top" type="submit">Enviar Mensagem
                            </button>
                        </div>
                    </div>
                </main>
                <aside class="col-12 col-lg-3 float-right">
                    <div class="d-inline-block width-100 margin-45px-bottom sm-margin-25px-bottom">
                        <form>
                            <div class="position-relative">
                                <input type="text"
                                       class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input float-left"
                                       placeholder="Pesquisa por...">
                                <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i
                                        class="fas fa-search ml-0"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="margin-50px-bottom">
                        <div
                            class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title">
                            <span>Siga-nos</span></div>
                        <div class="social-icon-style-1 text-center">
                            <ul class="extra-small-icon">
                                <li><a class="facebook" href="http://facebook.com" target="_blank"><i
                                            class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="http://twitter.com" target="_blank"><i
                                            class="fab fa-twitter"></i></a></li>
                                <li><a class="google" href="http://google.com" target="_blank"><i
                                            class="fab fa-google-plus-g"></i></a></li>
                                <li><a class="dribbble" href="http://dribbble.com" target="_blank"><i
                                            class="fab fa-dribbble"></i></a></li>
                                <li><a class="linkedin" href="http://linkedin.com" target="_blank"><i
                                            class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="margin-45px-bottom sm-margin-25px-bottom">
                        <div
                            class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title">
                            <span>Newsletter</span></div>
                        <div class="d-inline-block width-100">
                            <form>
                                <div class="position-relative">
                                    <input type="email"
                                           class="bg-transparent text-small m-0 border-color-extra-light-gray medium-input float-left"
                                           placeholder="Seu E-mail aqui...">
                                    <button type="submit"
                                            class="bg-transparent text-large btn position-absolute right-0 top-3"><i
                                            class="far fa-envelope ml-0"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
    <!-- end blog content section -->
@endsection
