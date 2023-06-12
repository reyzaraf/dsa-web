@extends('layouts.public')

@section('head')
@endsection

@section('content')
    <div class="triangle-wrap">
        <div class="triange"></div>
    </div>

    <div class="content-wrapper oh">
        <div class="container" id="check-certificate">
            <h2 class="promo-section__title promo-section__title--boxed pt-3 pt-md-0 text-green">
                Check Certificate
            </h2>
            <div class="box-shadow py-4 row" style="border-radius: 5px">
                <div class="col-lg-8">
                    <form action="{{ route('check.certificate.process') }}" method="POST">
                        @csrf
                        <input type="text" placeholder="Name" name="company_name" required />
                        @error('company_name')
                            <div class="alert alert-danger">{{ $message ?? 'Message' }}</div>
                        @enderror
                        <input type="text" placeholder="Certificate Number" name="no" required />
                        @error('no')
                            <div class="alert alert-danger">{{ $message ?? 'Message' }}</div>
                        @enderror
                        <div class="mb-3" id="captcha" style="cursor: pointer;">
                            {!! captcha_img('math') !!}
                        </div>
                        <input type="text" placeholder="Captcha" name="captcha" required />
                        @error('captcha')
                            <div class="alert alert-danger">{{ $message ?? 'Message' }}</div>
                        @enderror
                        <button type="submit" class="btn btn--lg py-2" style="background: #01a449">
                            Check
                        </button>
                    </form>
                    @if (session('error'))
                        <p class="mb-0 pt-16 text-orange">{{ session('error') }}</p>
                    @endif
                </div>
                <div class="col pt-24 pt-lg-0">
                    <img src="{{ asset('ssi-fe/src/img/unsplash/unsplash-2.jpg') }}" alt="" class="w-100" />
                </div>
            </div>
        </div>

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
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        let captcha = document.querySelector('#captcha');
        captcha.addEventListener('click', (e) => {
            e.preventDefault();
            axios.get('/reload-captcha', ).then(res => {
                captcha.innerHTML = res.data.captcha;
            });
        });
    </script>
@endsection
