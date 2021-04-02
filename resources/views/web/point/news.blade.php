@extends('web.master.master')

@section('content')
    <!-- start page title section -->
    <section class="wow fadeIn parallax" data-stellar-background-ratio="0.5"
             style="background-image:url({{ url($point->banner()) }});">
        <div class="opacity-medium bg-extra-dark-gray"></div>
        <div class="container">
            <div class="row align-items-center">
                <div
                    class="col-12 d-flex flex-column justify-content-center text-center extra-small-screen page-title-large">
                    <!-- start page title -->
                    <h1 class="text-white-2 alt-font font-weight-600 letter-spacing-minus-1 margin-10px-bottom">
                        Notícias</h1>
                    <span class="text-white-2 opacity6 alt-font">{{ $point->cta }}</span>
                    <!-- end page title -->
                </div>
            </div>
        </div>
    </section>
    <!-- end page title section -->
    <!-- start post content section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
            @foreach($point->news()->get() as $notice)
                <!-- start post item -->
                    <div
                        class="col-12 col-lg-3 col-md-6 margin-50px-bottom last-paragraph-no-margin sm-margin-30px-bottom wow fadeInUp">
                        <div class="blog-post blog-post-style1 text-center text-md-left">
                            <div class="blog-post-images overflow-hidden margin-25px-bottom md-margin-20px-bottom">
                                <a href="{{ route('web.showSingle', $notice->id) }}">
                                    <img
                                        src="{{ url('storage/' . \App\Support\Cropper::thumb($notice->cover,700,500)) }}"
                                        alt="{{ $notice->title }}">
                                </a>
                            </div>
                            <div class="post-details">
                            <span
                                class="post-author text-extra-small text-medium-gray text-uppercase d-block margin-10px-bottom sm-margin-5px-bottom">{{ date('d/m/Y', strtotime($notice->created_at)) }} | por <a
                                    href="{{ route('web.showSingle', $notice->id) }}" class="text-medium-gray">EC 4N.2</a></span>
                                <a href="{{ route('web.showSingle', $notice->id) }}"
                                   class="post-title text-medium text-extra-dark-gray width-90 d-block md-width-100">{{ $notice->title }}</a>
                                <div
                                    class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb md-margin-15px-tb"></div>
                                <p class="width-90 sm-width-100">{!! strip_tags(\Illuminate\Support\Str::limit($notice->content, 150)) !!}</p>
                            </div>
                        </div>
                    </div>
                    <!-- end post item -->
                @endforeach

            </div>
        </div>
    </section>
    <!-- end blog content section -->
@endsection
