@extends('layouts.public')

@section('head')
@endsection

@section('content')

<section class="pb100" id="tim">
    <div class="container">
      <div class="pb100">
        <div class="section_title mb50">
          <h3 class="title">
            Pelindung, Penasehat, dan Pembina RK DSA
          </h3>
        </div>
        <div class="row no-gutters" id="our-team">
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
              <div class="img-container">
              <img class="card-img-top" src="{{asset('dsa/assets/img/team/01/kapolda-sulut.JPG')}}" alt="">
              </div>
              <div class="card-body p-3">
                <h5 class="card-title mb-0">Irjen Pol Drs. SETYO BUDIYANTO, S.H., M.H.</h5>
                <p class="card-text">Kapolda selaku Pelindung</p>
              </div>
            </div>
          </div>
        
          <div class="col-12 col-md-6 col-lg-3">
            <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#modalForumRektor">
              <div class="card">
                <div class="img-container">
                <img class="card-img-top" src="{{ asset('dsa/assets/img/team/01/rektor-unima.jpg') }}" alt="">
                </div>
                <div class="card-body p-3">
                  <h5 class="card-title mb-0">Prof. Dr. Deitje Adolfien<br> Katuuk, M.Pd.</h5>
                  <p class="card-text">Ketua Forum Rektor selaku Penasehat</p>
                </div>
              </div>
            </button>
          </div>
        
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
              <div class="img-container">
              <img class="card-img-top" src="{{asset('dsa/assets/img/team/01/dir-ik.JPG')}}" alt="">
              </div>
              <div class="card-body p-3">
                <h5 class="card-title mb-0">KBP Dr (Can) Albert B Sihombing M.Si., M.A.</h5>
                <p class="card-text">Dir Intelkam selaku Koor Pembina</p>
              </div>
            </div>
          </div>
        
          <div class="col-12 col-md-6 col-lg-3">
            <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#modalKadispar">
              <div class="card">
                <div class="img-container">
                <img class="card-img-top" src="{{asset('dsa/assets/img/team/01/kadispar.jpg')}}" alt="">
                </div>
                <div class="card-body p-3">
                  <h5 class="card-title mb-0">Henry Kaitjily</h5>
                  <p class="card-text">Kadispar Sulut selaku Pembina</p>
                </div>
              </div>
            </button>
          </div>
        
          <div class="col-12 col-md-6 col-lg-3">
            <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#modalKadiskominfo">
              <div class="card">
                <div class="img-container">
                <img class="card-img-top" src="{{ asset('dsa/assets/img/team/01/kadis-kominfo.jpeg') }}" alt="">
                </div>
                <div class="card-body p-3">
                  <h5 class="card-title mb-0">Evans Steven Liow, S. Sos.</h5>
                  <p class="card-text">Kadis Kominfo Sulut selaku Pembina</p>
                </div>
              </div>
            </button>
          </div>
        
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
              <div class="img-container">
              <img class="card-img-top" src="{{ asset('dsa/assets/img/team/01/kadis-pppa.jpg') }}" alt="">
              </div>
              <div class="card-body p-3">
                <h5 class="card-title mb-0">dr. Kartika Devi Tanos, MARS</h5>
                <p class="card-text">Kadis PPA Sulut selaku Pembina</p>
              </div>
            </div>
          </div>
        
          <div class="col-12 col-md-6 col-lg-3">
            <div class="card">
              <div class="img-container">
              <img class="card-img-top" src="{{ asset('dsa/assets/img/team/01/kabankesbangpol.JPG') }}" alt="">
              </div>
              <div class="card-body p-3">
                <h5 class="card-title mb-0">Fery Sangian</h5>
                <p class="card-text">Kabankesbangpol Sulut selaku Pembina</p>
              </div>
            </div>
          </div>
        
          <div class="col-12 col-md-6 col-lg-3">
            <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#modalFKUB">
              <div class="card">
                <div class="img-container">
                <img class="card-img-top" src="{{ asset('dsa/assets/img/team/01/fkub.JPG') }}" alt="">
                </div>
                <div class="card-body p-3">
                  <h5 class="card-title mb-0">Pdt. Lucky I. Rumopa, MTh.</h5>
                  <p class="card-text">FKUB Sulut selaku Pembina</p>
                </div>
              </div>
            </button>
          </div>
        </div>
      </div>

      <div class="section_title mb50">
        <h3 class="title">
          Pengurus Rumah Kebangsaan Duta Sulut Aman
        </h3>
      </div>
      <div class="row justify-content-center no-gutters no-gutters">
        <div class="col-md-3 col-sm-6">
          <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#exampleModal">
            <div class="speaker_box">
              <div class="speaker_img">
                <img src="{{ asset('dsa/assets/img/team/ridwan-pasorong.jpeg') }}" alt="" loading="lazy">
                <div class="info_box">
                  <h5 class="name">Ridwan Pasorong</h5>
                  <p class="position">Ketua Umum</p>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="speaker_box">
            <div class="speaker_img">
              <img src="{{ asset('dsa/assets/img/team/jerry.JPG') }}" alt="" loading="lazy">
              <div class="info_box">
                <h5 class="name">Jerry Paulus</h5>
                <p class="position">Kabid Pengabdian Masyarakat</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#modalKabidInvestigasi">
          <div class="speaker_box">
            <div class="speaker_img">
              <img src="{{ asset('dsa/assets/img/team/ines.JPG') }}" alt="" loading="lazy">
              <div class="info_box">
                <h5 class="name">Perpetua Ines Sarkol</h5>
                <p class="position">Kabid Ideologi Pancasila & Bela Negara</p>
              </div>
            </div>
          </div>
          </button>
        </div>
        <div class="col-md-3 col-sm-6">

          <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#modalKabidInvestigasi">
            <div class="speaker_box">
              <div class="speaker_img">
                <img src="{{ asset('dsa/assets/img/team/IMG_2596.JPG') }}" alt="" loading="lazy">
                <div class="info_box">
                  <h5 class="name">Filio J.S. Lolong</h5>
                  <p class="position">Kabid Investigasi</p>
                </div>
              </div>
            </div>
          </button>

        </div>
        <div class="col-md-3 col-sm-6">
          <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#modalKabidKreatif">
            <div class="speaker_box">
              <div class="speaker_img">
                <img src="{{ asset('dsa/assets/img/team/eren.JPG') }}" alt="" loading="lazy">
                <div class="info_box">
                  <h5 class="name">Sharon Z.A. Kampong</h5>
                  <p class="position">Kabid Kreatifitas & Kewirausahaan</p>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="col-md-3 col-sm-6">
          <button type="button" class="btn modal-btn" data-toggle="modal" data-target="#modalMediaTekno">
            <div class="speaker_box">
              <div class="speaker_img">
                <img src="{{ asset('dsa/assets/img/team/arafi.JPG') }}" alt="" loading="lazy">
                <div class="info_box">
                  <h5 class="name">M. Ar Raafi Laupu</h5>
                  <p class="position">Kabid Media & Teknologi</p>
                </div>
              </div>
            </div>
          </button>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="speaker_box">
            <div class="speaker_img">
              <img src="{{ asset('dsa/assets/img/team/irham.JPG') }}" alt="" loading="lazy">
              <div class="info_box">
                <h5 class="name">M. Irham</h5>
                <p class="position">Kabid Organisasi & Komunikasi</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="speaker_box">
            <div class="speaker_img">
              <img src="{{ asset('dsa/assets/img/team/friska.JPG') }}" alt="" loading="lazy">
              <div class="info_box">
                <h5 class="name">Friska D. Manalu</h5>
                <p class="position">Kabid Rekrutmen & Kaderisasi</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
