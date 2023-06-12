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
            {!! $article->body !!}
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
