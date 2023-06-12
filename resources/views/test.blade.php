@extends('layouts.public')

@section('head')
@endsection

@section('content')
<section class="pt100 pb100">
  <div class="container">
    <div class="section_title">
      <h3 class="title">Artikel</h3>
    </div>
    <div class="row justify-content-center mt30">
      <div class="col-12 col-md-6 col-lg-3">
        <div class="icon_box_one">
          <img src="https://sulut.kpu.go.id/images/1629387311151843E8A9DCA-1A50-4C5A-9B6D-AA6BB0574550.jpeg" alt="">
          <div class="content">
            <h4>9 Speakers</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              rhoncus massa nec graviante.
            </p>
            <a href="#">read more</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="icon_box_one">
          <i class="lnr lnr-rocket"></i>
          <div class="content">
            <h4>8 hrs Marathon</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              rhoncus massa nec graviante.
            </p>
            <a href="#">read more</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="icon_box_one">
          <i class="lnr lnr-bullhorn"></i>
          <div class="content">
            <h4>Live Broadcast</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              rhoncus massa nec graviante.
            </p>
            <a href="#">read more</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-3">
        <div class="icon_box_one">
          <i class="lnr lnr-clock"></i>
          <div class="content">
            <h4>Early Bird</h4>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
              rhoncus massa nec graviante.
            </p>
            <a href="#">read more</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
@section('script')
    <script>
        new Splide("#ourServicesSlide", {
            pagination: true,
            arrows: false,
            perPage: 3,
            gap: "20px",
            breakpoints: {
                425: {
                    perPage: 1,
                },
                585: {
                    perPage: 2,
                },
            },
        }).mount();

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

        new Splide("#ourClientsSlide", {
            pagination: true,
            arrows: false,
            perPage: 4,
            gap: "20px",
            breakpoints: {
                425: {
                    perPage: 2,
                },
                585: {
                    perPage: 3,
                },
            },
        }).mount();
    </script>
@endsection
