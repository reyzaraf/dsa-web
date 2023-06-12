@extends('layouts.public')

@section('head')
@endsection

@section('content')
    <div class="content-wrapper oh">
        <!-- Page Title -->
        <section class="page-title text-center">
            <div class="container">
                <img src="{{ Storage::disk('public')->url(@$about->image) }}" alt=""
                    style="max-height: 28rem; width: 100%; object-fit: cover" />
                <div class="page-title__holder">
                </div>
            </div>
        </section>
        <!-- end page title -->

        <!-- Benefits -->
        <section class="section-wrap">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="benefits box-shadow-large offset-top-171">
                            <h3 class="benefits__title">About Us</h3>
                            <div class="row">
                                {!! @$about->content !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end benefits -->

        <!-- Statistic -->
        <section class="section-wrap bg-color-overlay"
            style="background-image: url({{ asset('ssi-fe/src/img/statistic/statistic.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="statistic">
                            <!-- <span class="statistic__number">36</span> -->
                            <!-- <h5 class="statistic__title">Sucessful Projects</h5> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="statistic">
                            <!-- <span class="statistic__number">100%</span> -->
                            <!-- <h5 class="statistic__title">Achieved ROI</h5> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="statistic">
                            <!-- <span class="statistic__number">550</span> -->
                            <!-- <h5 class="statistic__title">Happy Customers</h5> -->
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="statistic">
                            <!-- <span class="statistic__number">3x</span> -->
                            <!-- <h5 class="statistic__title">Increased Profits</h5> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end statistic -->

        <!-- From Blog -->
        <section class="section-wrap">
            <div class="container">
                <div class="title-row title-row--boxed text-center">
                    <h2 class="section-title text-green">Latest News</h2>
                    <p class="subtitle">
                        Berita terkini mengenai Sertifikasi ISO maupun Legalitas
                        lainnya.
                    </p>
                </div>
                <!-- <div class="row card-row"> -->

                <section class="splide" id="latestNewsSlide" aria-label="Splide Basic HTML Example">
                    <div class="splide__track p-5">
                        <ul class="splide__list">
                            @foreach ($blogs as $blog)
                                <li class="splide__slide">
                                    <article class="entry card box-shadow hover-up" style="height: 100%;margin-bottom: 5px;">
                                        <div class="entry__img-holder card__img-holder">
                                            <a href="{{ route('blogs.showPublic', $blog->id) }}">
                                                <img src="{{ Storage::disk('public')->url($blog->thumbnail) }}"
                                                    class="entry__img" alt=""
                                                    style="height: 20rem;object-fit: cover;" />
                                            </a>
                                            <div class="entry__date">
                                                <span class="entry__date-day">{{ $blog->created_at->format('d') }}</span>
                                                <span class="entry__date-month">{{ $blog->created_at->format('M') }}</span>
                                            </div>
                                            <div class="entry__body card__body">
                                                <h4 class="entry__title text-green">
                                                    <a
                                                        href="{{ route('blogs.showPublic', $blog->id) }}">{{ $blog->title }}</a>
                                                </h4>
                                                <div class="entry__excerpt">
                                                    <p
                                                        style="display: -webkit-box;-webkit-line-clamp: 3;-webkit-box-orient: vertical;overflow: hidden;">
                                                        {{ $blog->short_description ?? '-' }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
                <!-- </div> -->
            </div>
        </section>
        <!-- end from blog -->

        <!-- footer : start -->
        <x-public.contactus />
        <x-public.footer />
        <!-- footer : end -->

        <div id="back-to-top">
            <a href="#top"><i class="ui-arrow-up"></i></a>
        </div>
    </div>
@endsection

@section('script')
    <script>
        new Splide("#latestNewsSlide", {
            pagination: true,
            arrows: false,
            perPage: 3,
            gap: "20px",
            breakpoints: {
                768: {
                    perPage: 2,
                },
                555: {
                    perPage: 1,
                },
            },
        }).mount();
    </script>
@endsection
