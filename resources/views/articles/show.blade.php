@extends('layouts.public')

@section('head')
@endsection

@section('content')
        <section class="pb-5" style="padding-top:10%;padding-bottom:10%;" id="artnews-content">
        <div class="container">
            <div class="pb-5">
                <div class="title-wrapper">
                    <div class="badge py-3 d-inline-block">
                        <p class="m-0">Artikel</p>
                    </div>
                    <div class="date d-inline-block ">
                        <p><i class="ion-ios-calendar-outline"></i> {{ $article->created_at->format('d F Y') }}</p>
                    </div>
                    <h1 class="title">{{ $article->title }}
                    </h1>
                    <div class="d-flex flex-row align-items-center">
                        <div class="avatar">
                        <img src="{{ Storage::disk('public')->url($article->user->image) ? asset('acaraAdminPanel/xhtml/images/profile/17.jpg')  : 'https://dummyimage.com/34x34/000/fff&amp;text=+' }}"  alt="">
                        </div>
                        <div class="writer-wrapper ms-3">
                            <p class="name-writer"> <b>{{$article->user->name}}</b></p>
                            <p class="writer">Penulis</p>
                        </div>
                    </div>
                </div>
                <div class="pt-5" id="artnews-img">
                    <img src="{{ Storage::disk('public')->url($article->thumbnail) }}" alt="" class="">
                </div>
            </div>
            <div class="content-desc">
               <div class="row">
               <div class="col-lg-8 col-sm-12">
                    {!! $article->body !!}
                </div>
                <div class="col-lg-4 col-sm-12">
                <div>
                        <div class="section_title mb50">
                            <h3 class="title">
                                Artikel Lainnya
                            </h3>
                        </div>
                        <div class="row" >
                        @foreach ($rand as $rands)    
                        <div class="col-lg-12 col-sm-4" >
                                <div id="artnews-content-sidepanel">
                                <div class="card">
                                    <img class="card-img-top" src="{{ Storage::disk('public')->url($rands->thumbnail) }}" alt="Card image cap">
                                    <div class="card-body">
                                        <div class="title-wrapper">
                                            <h5 class="card-title mb-0">{{$rands->title}}</h5>
                                        </div>
                                        <div class="desc-wrapper">
                                            <p class="card-text">{{$rands->short_description}}
                                        </p></div>
                                        <div class="writer-wrapper d-flex align-items-center pt-3 pb-2">
                                            <img src="{{ Storage::disk('public')->url($rands->user->image) ? asset('acaraAdminPanel/xhtml/images/profile/17.jpg')  : 'https://dummyimage.com/34x34/000/fff&amp;text=+' }}" alt="" class="writer-img">
                                            <div class="writer-info">
                                                <p class="writer-name mb-0">{{$rands->user->name}}</p>
                                                <p class="date mb-0">{{ $rands->created_at->format('d F Y') }}</p>
                                            </div>
                                        </div>
                                        <p></p>
                                        <a href="{{ route('articles.showPublic', $rands->slug) }}" class="btn btn-primary">Baca selengkapnya</a>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        </div>
                <!--  -->
                </div>
               </div>
            </div>

        </div>
    </section>   

        <!-- footer : start -->
        <!-- <x-public.contactus /> -->
        <!-- <x-public.footer /> -->
        <!-- footer : end -->
@endsection

@section('script')
@endsection
