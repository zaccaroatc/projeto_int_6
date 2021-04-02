<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <!-- title -->
    <title>Projeto Integrador - Integração dos Pontos Turpisticos de Guaratinguetá</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1"/>
    <meta name="author" content="ThemeZaa">
    <!-- description -->
    <meta name="description"
          content="Portal interativo de informações dos principais pontos turísticos da cidade de Guaratinguetá.">
    <!-- keywords -->
    <meta name="keywords"
          content="frei, galvao, catedral, santo, antonio, gruta, lurdes, santuario, guaratingueta, turismo, religioso">
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ url(asset('frontend/assets/images/favicon.png')) }}">
    <link rel="apple-touch-icon" href="{{ url(asset('frontend/assets/images/apple-touch-icon-57x57.png')) }}">
    <link rel="apple-touch-icon" sizes="72x72"
          href="{{ url(asset('frontend/assets/images/apple-touch-icon-72x72.png')) }}">
    <link rel="apple-touch-icon" sizes="114x114"
          href="{{ url(asset('frontend/assets/images/apple-touch-icon-114x114.png')) }}">
    <!-- libs css -->
    <link rel="stylesheet" href="{{ url(mix('frontend/assets/libs/libs.css')) }}"/>

    <!-- revolution slider -->
    <link rel="stylesheet" type="text/css" href="{{ url(asset('frontend/assets/revolution/css/settings.css')) }}"
          media="screen"/>
    <link rel="stylesheet" type="text/css" href="{{ url(asset('frontend/assets/revolution/css/layers.css')) }}">
    <link rel="stylesheet" type="text/css" href="{{ url(asset('frontend/assets/revolution/css/navigation.css')) }}">

    <!-- style -->
    <link rel="stylesheet" href="{{ url(mix('frontend/assets/css/style.css')) }}"/>

@hasSection('css')
    @yield('css')
@endif

<!--[if IE]>
    <script src="{{ url(mix('frontend/assets/js/html5shiv.js')) }}"></script>
    <![endif]-->
</head>
<body>

@yield('content')

<!-- start footer -->
<footer class="footer-clean-dark bg-extra-dark-gray padding-five-tb sm-padding-30px-tb">
    <div class="footer-widget-area padding-30px-bottom">
        <div class="container">
            <div class="row">
                <!-- start logo -->
                <div
                    class="col-lg-3 widget text-left text-md-center text-lg-left md-margin-50px-bottom sm-margin-30px-bottom">
                    <a href="index.html" class="d-inline-block"><img class="footer-logo"
                                                                     src="{{ url(asset('frontend/assets/images/logo-white.png')) }}"
                                                                     data-rjs="{{ url(asset('frontend/assets/images/logo-white@2x.png')) }}"
                                                                     alt="Pofo"></a>
                </div>
                <!-- end logo -->
                <!-- start contact information -->
                <div class="col-lg-3 col-md-4 widget sm-margin-30px-bottom">
                    <div
                        class="widget-title alt-font text-extra-small text-uppercase text-white-2 margin-15px-bottom font-weight-600">
                        Informações de Contato
                    </div>
                    <div class="text-small line-height-24 width-75 text-medium-gray sm-width-100">Rua dos Universitários, 2018
                    </div>
                    <div class="text-small line-height-24 text-medium-gray">Email: <a href="mailto:grupo4n.2@projetorintegrador4.com"
                                                                                      class="text-medium-gray">grupo4n.2@projetorintegrador4.com</a>
                    </div>
                    <div class="text-small line-height-24 text-medium-gray">Phone: +55 (12) 98765-4321</div>
                </div>
                <!-- end contact information -->
                <!-- start social media -->
                <div class="col-lg-3 col-md-4 widget sm-margin-30px-bottom">
                    <div
                        class="widget-title alt-font text-extra-small text-white-2 text-uppercase margin-15px-bottom font-weight-600">
                        Nas redes sociais
                    </div>
                    <ul class="list-unstyled">
                        <li class="w-50 float-left"><a href="https://www.facebook.com/" target="_blank"
                                                       class="text-medium-gray text-small">Facebook</a></li>
                        <li class="w-50 float-left"><a href="https://www.pinterest.com/" target="_blank"
                                                       class="text-medium-gray text-small">Pinterest</a></li>
                        <li class="w-50 float-left"><a href="https://www.twitter.com/" target="_blank"
                                                       class="text-medium-gray text-small">Twitter</a></li>
                        <li class="w-50 float-left"><a href="https://www.linkedin.com/" target="_blank"
                                                       class="text-medium-gray text-small">Linkedin</a></li>
                        <li class="w-50 float-left"><a href="https://www.dribbble.com/" target="_blank"
                                                       class="text-medium-gray text-small">Dribbble</a></li>
                        <li class="w-50 float-left"><a href="https://www.youtube.com/" target="_blank"
                                                       class="text-medium-gray text-small">Youtube</a></li>
                        <li class="w-50 float-left"><a href="https://www.instagram.com/" target="_blank"
                                                       class="text-medium-gray text-small">Instagram</a></li>
                    </ul>
                </div>
                <!-- end social media -->
                <!-- start newsletter -->
                <div class="col-lg-3 col-md-4 widget">
                    <div
                        class="widget-title alt-font text-extra-small text-white-2 text-uppercase margin-20px-bottom font-weight-600">
                        Cadastre-se para Newsletter
                    </div>
                    <form id="subscribenewsletterform" action="javascript:void(0)" method="post">
                        <div class="position-relative width-100">
                            <div id="success-subscribe-newsletter" class="no-margin-lr"></div>
                            <input type="text" id="email" name="email"
                                   class="bg-transparent border-color-medium-dark-gray text-small margin-10px-bottom"
                                   placeholder="Seu Email aqui...">
                            <button id="button-subscribe-newsletter" type="submit" class="btn btn-white btn-very-small">
                                Cadastre-se
                            </button>
                        </div>
                    </form>
                </div>
                <!-- end newsletter -->
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-color-medium-dark-gray border-top padding-30px-top">
            <div class="row">
                <!-- start copyright -->
                <div class="col-12 text-small text-center text-medium-gray">&COPY; 2019 POFO is Proudly Powered by <a
                        href="http://wwwo.themezaa.com" target="_blank" title="ThemeZaa" class="text-medium-gray">ThemeZaa</a>
                </div>
                <!-- end copyright -->
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- start scroll to top -->
<a class="scroll-top-arrow" href="javascript:void(0);"><i class="ti-arrow-up"></i></a>
<!-- end scroll to top  -->
<!-- javascript core libraries -->
<script type="text/javascript" src="{{ url(mix('frontend/assets/js/core.js')) }}"></script>

<!-- menu navigation -->
<script type="text/javascript" src="{{ url(mix('frontend/assets/libs/libs.js')) }}"></script>

<!-- revolution -->
<script type="text/javascript"
        src="{{ url(asset('frontend/assets/revolution/js/jquery.themepunch.tools.min.js')) }}"></script>
<script type="text/javascript"
        src="{{ url(asset('frontend/assets/revolution/js/jquery.themepunch.revolution.min.js')) }}"></script>
<!-- revolution slider extensions (load below extensions JS files only on local file systems to make the slider work! The following part can be removed on server for on demand loading) -->
<!--<script type="text/javascript" src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="revolution/js/extensions/revolution.extension.video.min.js"></script>-->
<!-- setting -->
<script type="text/javascript" src="{{ url(mix('frontend/assets/js/main.js')) }}"></script>

@hasSection('js')
    @yield('js')
@endif
</body>
</html>
