@extends('layouts.public')

@section('head')
@endsection

@section('content')
    <section id="home" class="home-cover">
    <div class="cover_slider owl-carousel owl-theme">
      <div class="cover_item one" style="background: url('dsa/assets/img/bg/bg.jpg');">
        <div class="slider_content">
          <div class="slider-content-inner">
            <div class="container">
              <div class="slider-content-center">
                <h2 class="cover-title">
                  Selamat Datang Di
                </h2>
                <strong class="cover-xl-text">RUMAH KEBANGSAAN DUTA SULUT AMAN</strong>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="cover_item" style="background: url('dsa/assets/img/bg/bg-2.JPG');">
        <div class="slider_content">
          <div class="slider-content-inner two">
            <div class="container">
              <!-- <div class="slider-content-left">
                <h2 class="cover-title">
                  Prepare yourself for the
                </h2>
                <strong class="cover-xl-text">conference</strong>
                <p class="cover-date">
                  12-14 February 2018 - Los Angeles, CA.
                </p>
                <a href="#" class=" btn btn-primary btn-rounded">
                  Buy Tickets Now
                </a>
              </div> -->
            </div>
          </div>
        </div>
      </div>

      <div class="cover_item" style="background: url('{{asset('dsa/assets/img/bg/bg-3.JPG')}}');">
        <div class="slider_content mt70">
          <div class="slider-content-inner three">
            <div class="container">
              <div class="slider-content-center-bottom three">
                <div class="d-block">
                  <strong class="cover-xl-text primary-color">pencanangan duta sulut aman</strong>
                  <p class="cover-date secondary-color">
                    Hotel Mercure Manado, 21-23 Februari 2023
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="cover_nav">
      <ul class="cover_dots">
        <li class="active" data="0"><span>1</span></li>
        <li data="1"><span>2</span></li>
        <li data="2"><span>3</span></li>
      </ul>
    </div>
  </section>

  <section class="pb100" id="about">
    <div class="container">
      <div class="sambutan">
        <div class="row d-flex align-items-center">
          <div class="col-md-8">
            <p>Salam Pancasila!</p>

            <p>
              Kita berkumpul di sini, dirumah kebangsaan untuk bersama merefleksikan dan memperkuat komitmen kita, para
              Duta Sulut
              Aman untuk menjunjung tinggi Pancasila dalam segala aspek kehidupan.
            </p>

            <p>
              Melalui rumah kebangsaan ini, kita kobarkan semangat untuk
            </p>

            <ol>
              <li>Menjadikan Sulawesi Utara aman dari ancaman <span class="italic">hoax, ekstrimisme,</span> dan <span
                  class="italic">politik identitas.</span></li>
              <li>Menggapai kehidupan yang lebih berkualitas dan semakin berkiprah dalam membangun Negeri.</li>
              <li>Menyuarakan, memperlihatkan dan menginspirasikan hikmat.</li>
              <li>Meningkatkan ilmu, dan mengamalkan ilmu</li>
              <li>Mengabdikan diri sebagai inspirator Indonesia unggul.</li>
            </ol>

            <p>
              Terima kasih. Demikian kata sambutan saya
            </p>

            <p class="mb-0">
              Salam Pancasila. Semoga Tuhan memberkati!
            </p>
          </div>

          <div class="col-md-4">
            <img src="{{ asset('dsa/assets/img/bg/bapak kapolda dan ibu salam.png') }}" alt="" class="img-fluid">
          </div>
        </div>
      </div>

      <div class="section_title">
        <h3 class="title">
          Tentang Kami
        </h3>
      </div>
      <div class="row justify-content-center">
        <div class="col-12 col-md-6">
          <p>
            Era digital saat ini, sangat rawan terhadap perkembangan hoaks, ekstrimisme dan politik identitas sehingga
            netizen
            dituntut untuk semakin memiliki keluasan literasi digital dibarengi dengan pemikiran kritis yang berwawasan
            kebangsaan.
            Dalam kaitannya, Rumah Kebangsaan Duta Sulut Aman hadir untuk memberi khasanah literasi digital dengan
            mewadahi anak
            bangsa dari berbagai latar belakang suku, agama, ras, dan antar golongan saling berkomunikasi, dan bersama
            membangun
            koordinasi, kolaborasi dan networking untuk
            tangkal hoax, ekstrimisme dan politik identitas.
          </p>
        </div>
        <div class="col-12 col-md-6">
          <p>
            Harapannya, melalui wadah ini para mahasiswa/siswa bersama Dit Intelkam Polda Sulut dapat saling berbagi
            dalam suasana
            yang akrab berbagi cerita, pengalaman dan ide-ide kritis untuk menggelorakan semangat membangun Negeri
            dengan
            mengimplementasikan Tridharma Perguruan Tinggi. Melalui wadah ini semoga lebih memampukan para anggota untuk
            lebih
            berdampak menjadikan Sulut aman, rukun dan damai menuju Indonesia unggul.
          </p>
        </div>
      </div>

      <div class="pt100 pb100" id="visi-misi">
        <div class="container">
          <div class="section_title mb50">
            <h3 class="title">
              Visi & Misi Kami
            </h3>
          </div>
          <div class="row">
            <div class="col-md-6 col-12">
              <div class="price_box active d-flex align-items-center">
                <div>
                  <h4>Visi</h4>
                  <p class="m-0">Mewujudkan Sulut aman, rukun dan damai menuju Indonesia unggul
                  </p>
                </div>
                
              </div>
            </div>
            <div class="col-md-6 col-12">
              <div class="price_box active d-flex flex-column align-items-center">
                <div class="wrapper">
                  <h4>Misi</h4>
                  <p>
                    Menggelorakan semangat:
                  </p>
                  <ol>
                    <li>Tangkal hoax, ekstrimisme, dan politik identitas;</li>
                    <li>Pendidikan, penelitian dan pengabdian masyarakat;</li>
                    <li>Mengabdi mensukseskan program-program pemerintah dalam membangun Negeri;</li>
                    <li>Berbangsa dan bernegara dengan dasar Pancasila dan UUD 1945.</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="section_title mt100">
        <h3 class="title">
          Ikrar Kami
        </h3>
      </div>
      <div class="row justify-content-center mt30">
        <div class="col-12 col-md-6 col-lg-6">
          <div class="icon_box_one d-flex align-items-center">
            <div class="content">
              <h4>BERSATU MENDUKUNG PANCASILA DAN NKRI</h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="icon_box_one d-flex align-items-center">
            <div class="content">
              <h4>BERSATU MENANGKAL HOAX, EKSTRIMISME & POLITIK IDENTITAS</h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="icon_box_one d-flex align-items-center">
            <div class="content">
              <h4>BERSATU & BERJUANG MENJADIKAN INDONESIA UNGGUL</h4>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-6">
          <div class="icon_box_one d-flex align-items-center">
            <div class="content">
              <h4>BERSATU MENGHARGAI KEBERAGAMAN & TOLERANSI BERAGAMA.</h4>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

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
                <p class="card-text" style="overflow-wrap: break-word;">Kapolda selaku Pelindung</p>
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
                  <p class="card-text" style="overflow-wrap: break-word;">Ketua Forum Rektor selaku Penasehat</p>
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
                <p class="card-text" style="overflow-wrap: break-word;">Dir Intelkam selaku Koor Pembina</p>
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
                  <p class="card-text" style="overflow-wrap: break-word;">Kadispar Sulut selaku Pembina</p>
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
                  <p class="card-text" style="overflow-wrap: break-word;">Kadis Kominfo Sulut selaku Pembina</p>
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
                <p class="card-text" style="overflow-wrap: break-word;">Kadis PPA Sulut selaku Pembina</p>
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
                <p class="card-text" style="overflow-wrap: break-word;">Kabankesbangpol Sulut selaku Pembina</p>
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
                  <p class="card-text" style="overflow-wrap: break-word;">FKUB Sulut selaku Pembina</p>
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

  <!-- ALL MODAL : START -->
  <div class="modal fade" id="modalKadispar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-end">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="mb-3">
            <h5 class="text-center mb-0">ARAHAN KADISPAR PROV. SULUT</h5>
            <p class="text-center mb-0">Oleh : Henry Kaitjily</p>
          </div>
          <p class="mb-2">
            Potensi sektor pariwisata memiliki peran yang sangat penting dalan menunjang
            keberhasilan pembangunan nasional maupun daerah. Karenanya, untuk dapat berkiprah, Dinas
            Pariwisata Sulut senantiasa bergiat untuk membenahi dan mengembangkan destinasi wisata
            serta membuka konektivitas transportasi/rute penerbangan internasional agar lebih menarik
            minat. Pembukaan penerbangan bagi wisatawan asing dari negara Singapore, Jepang, dan
            China ke Bandara Internasional Sam Ratulangi Manado secara langsung merupakan wujud
            implementasi dari niatan di atas.
          </p>

          <p class="mb-2">
            Selain upaya di atas, peran pengembangan SDM (Sumber Daya Manusia) juga digiatkan
            di kabupaten/kota dan desa yang memiliki destinasi pariwisata yang bertujuan untuk mendorong
            masyarakat setempat agar mengelola dan mengembangkan obyek wisata.
          </p>

          <p class="mb-2">
            Dalam kaitannya, kehadiran Duta Sulut Aman diharapkan dapat mengambil peran untuk
            membantu Dinas Pariwisata dalam menjadikan obyek wisata menjadi sesuatu yang penting dan
            menarik untuk dikunjungi. Terdapat banyak potensi pariwisata Sulut yang dapat dikembangkan
            seperti potensi bahari, ekowisata, dan event-event budaya yang perlu sentuhan daya kreativitas
            untuk dikenalkan via internet serta sentuhan kehangatan sebagai warga yang bersahabat dalam
            pergaulan internasional yang menjungjung tinggi HAM, keberagaman dan toleransi beragama.
            Karenanya melalui pencanangan Duta Sulut Aman tangkal hoax, ekstrimisme dan politik
            identitas serta gelora semangat melayani dan bertindak melindungi yang dicanangkan Polda
            Sulut dapat semakin berdampak pada rasa keamanan dan kenyamanan yang pada gilirannya
            semakin menarik minat untuk dikunjungi.
          </p>

          <p class="mb-2">
            Akhir kata, melalui wadah Rumah Kebangsaan Duta Sulut Aman, ada karya anak bangsa
            yang juga berdampak bagi terciptanya iklim pariwisata progresif yang secara sinergis
            menciptakan Sulut aman, Sulut maju dan Sulut Indah sehingga menambah pesona untuk
            dikunjungi dan secara berkelanjutan mendukung pendapatan perkapita Sulut menuju Indonesia
            unggul. Berharap ada wadah ada karya. Tuhan berkati!
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- modal kadis kominfo -->
  <div class="modal fade" id="modalKadiskominfo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-end">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-3">
            <h5 class="mb-0">ARAHAN KADISKOMINFO PROV SULUT</h5>
            <p class="mb-0">EVANS STEVEN LIOW, S.Sos., MM</p>
          </div>

          <p class="mb-2">
            Secara geofrafi, Sulut merupakan pintu gerbang Indonesia di Kawasan Asia Pasifik.
            Posisi ini berpengaruh pada dinamika sosial Sulut yang berpenduduk 2.6 juta orang yang
            menempati 287 pulau, 11 kabupaten, 4 kota, 171 kecamatan, 1508 desa dan 333
            kelurahan. Dewasa ini, dalam era teknologi dan komunikasi, ancaman paling nyata dalam
            dinamika sosial adalah adanya hoax, ekstrimisme dan politik identitas.
          </p>
          <p class="mb-2">
            Berharap, semboyan yang didengungkan Sam Ratulangi; “Sitou Timou Tumou Tou”
            (manusia hidup untuk menghidupkan manusia lain) terus bergema bahwa secara universal
            manusia mempunyai misi untuk memanusiakan manusia lain. Semboyan tersebut diperkuat
            oleh slogan Gubernur Sulut, Olly Dondokambey yaitu Torang Samua Ciptaan Tuhan.
            Semakin mengukuhkan budaya Sulut untuk tangkal politik identitas. Torang samua
            bersaudara tanpa diskriminasi suku, agama, ras dan antar golongan. Kedua pandangan
            tersebut merupakan pegangan untuk menangkal politik identitas dan sikap ekstrimisme.
          </p>

          <p class="mb-2">
            Namun, tak dapat dipungkiri kemajuan Ilpekteng telah membawa dampak negatif
            yang terus membayangi melalui pemberitaan hoax, ajaran ekstrimisme dan ajakan politik
            identitas jelang Pemilu 2024 ditambah tantangan adanya kecenderungan sumber daya
            manusia (SDM) yang masih dikategorikan “malas” atau kurang disiplin. Bagaimana cara
            untuk mengatasi tantangan tersebut?
          </p>

          <p class="mb-2">
            Mengutip buku Sosiologi berjudul “Masyarakat Sedang Berkembang” karya Drs.
            Aluimandan, Saya ingin menekankan kepada para Duta Sulut Aman bahwa masyarakat
            maju ditentukan dari 3 hal yaitu; hasil dari proses, tindakan dan interaksi. Tiga hal tersebut
            dapat dipakai untuk masyarakat Sulut untuk mengatasi ancaman bagi SDM yang kurang
            disiplin.
          </p>

          <p class="mb-2">
            Selanjutnya, Saya mengajak para Duta Sulut Aman untuk mempersiapkan diri menjadi
            generasi yang unggul dengan menerapkan atau menekankan keharusan memiliki visi, role
            model, dan mental model yang sama serta memiliki disiplin atas komitmen bersama. Duta
            Sulut Aman merupakan inisiasi yang sangat bagus dari Direktur Intelkam Polda Sulut untuk
            mewadahi para Duta Sulut Aman mencapai visi dan melaksanakan misi menjadikan Sulut
            aman. Karenanya, mari perkuat barisan dengan semangat Torang Samua Ciptaan Tuhan
            untuk mewujudkan kebersamaan dalam membangun Negri terlepas dari hoax, ekstrimisme
            dan politik identitas sehingga tercipta kehidupan aman, rukun dan damai yang sinergis
            dengan upaya-upaya pembangunan Sulut yang maju demi Indonesia unggul.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- modal kadis kominfo : end -->

  <!-- modal fkub : start -->
  <div class="modal fade" id="modalFKUB" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-end">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-3">
            <h5 class="mb-0">ARAHAN KETUA FORUM KERUKUNAN UMAT BERAGAMA</h5>
            <p class="mb-0">Pdt. Lucky Rumopa MTh</p>
            <h6 class="mt-2">
              Disampaikan saat memimpin Ibadah Minggu<br>
              4 Juni 2023 di Wisma Lorenzo
            </h6>
          </div>
          <p class="mb-2">
            Dalam upaya menjaga kerukunan antar umat beragama dan intra umat
            beragama dengan pemerintah, hendaknya para Duta Sulut Aman memiliki
            semangat dan dibangun di atas dasar yang kokoh. Dikaitkan dengan 1
            Korintus 3:12: ”Entahkah orang membangun di atas dasar ini dengan emas,
            perak, batu permata, kayu, rumput kering atau Jerami”, diharapkan para
            Duta Sulut dapat berdampak dan melakukan pekerjaan secara berkelanjutan
            seumpama emas yang ketika dibakar akan menunjukan kualitasnya, tidak
            seperti Jerami yang saat dibakar langsung lenyap.
          </p>

          <p class="mb-2">
            Hendaknya para Duta Sulut Aman berakar dan berdasar di dalam Kasih,
            melibatkan Tuhan dalam doa dan karya yang tak pernah putus untuk
            menghasilkan sesuatu yang mulia yang digambarkan dengan emas. Emas
            dipakai secara kiasan untuk menggambarkan sifatsifat seperti iman yang
            kuat, hikmat ilahi, ketajaman rohani, kesetiaan, dan penghargaan yang
            pengasih kepada Tuhan dan hukumNya. Sifat-sifat sedemikian perlu agar
            seseorang memperoleh hubungan yang sangat intim dengan Allah. Sifat-
            sifat ini membentuk struktur kepribadian yang harus diusahakan dalam diri
            para duta.
          </p>

          <p class="mb-2">
            Kiranya dalam berkat Tuhan, melalui Gerakan tangkal hoax,
            ekstrimisme dan politik identitas, para Duta Sulut Aman dapat berkarya
            bangun negeri, jaga keamanan, kerukunan dan kedamaian yang sinergis
            dengan pembangunan untuk kesejahteraan Sulut dan Indonesia unggul.
            Terima kasih.
          </p>
        </div>
      </div>
    </div>
  </div>
  <!-- modal fkub : end -->

  <!-- modal forum rektor : start -->
        <div class="modal fade" id="modalForumRektor" tabindex="-1" role="dialog" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header d-flex justify-content-end">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="text-center mb-3">
                  <h5 class="mb-0">Rekomendasi</h5>
                  <h6 class="mb-0">KESEPAKATAN BERSAMA 15 PIMPINAN PERTI SULUT & PEMANGKU KEPENTINGAN DUTA SULUT AMAN</h6>
                </div>
                <p class="mb-2">Dengan memanjatkan puji syukur kepada Tuhan Yang Maha Kuasa, Kami a.n. Pimpinan Perti se-Sulawesi
                Utara bersama pimpinan stakeholder terkait (sesuai terlampir daftar hadir Rapat Koordinasi Duta Sulut Aman tanggal
                10-11 Mei 2023 di hotel Minahasa Manado), atas inisiasi Direktur Dit Intelkam Polda Sulut, telah melaksanakan
                diskusi, pengkajian dan musyawarah bersama untuk menindak lanjuti hal-hal yang disepakati bersama saat
                pencanangan Duta Sulut Aman pada 20 – 23 Februari 2023 di hotel Mercure Tateli Beach Hotel Manado (terlampir
                BAP kesepakatan bersama). Adapun tindak lanjut yang kami sepakati dituangkan dalam bentuk pernyataan bersama
                berupa rekomendasi sebagai berikut:</p>
                <ol>
                  <li>kami mendukung keberadaan Duta Sulut Aman dan berupaya ikut mewujudkan Sulawesi Utara yang aman,
                  bebas dari hoax, ekstrimisme dan politik identitas terutama dalam terselenggaranya Pemilu yang damai dan
                  berkualitas;</li>
                  <li>untuk mewujudkan maksud tersebut, kami sepakat membentuk Forum Rumah Kebangsaan Duta Sulut Aman,
                  dengan penggerak utama seluruh perguruan tinggi baik pimpinan maupun mahasiswa dan civitas akademika;</li>
                  <li>sepakat membentuk Forum Rumah Kebangsaan Duta Sulut Aman dengan struktur kepengurusan-nya
                  berintikan pada mahasiswa dan stakeholder pendukung bersama Pembina-nya, yang didalamnya masing-
                  masing pimpinan Perti bidang kemahasiswaan;</li>
                  <li>dalam rangka pembentukan Forum Rumah Kebangsaan Duta Sulut Aman, maka perlu dibuatkan AD-ART
                  sekaligus pemilihan pengurus yang akan melaksanakan tugas;</li>
                  <li>merekomendasikan kepada Bapak Kapolda Sulut, agar siapapun yang menjadi Direktur Intelkam Polda Sulut,
                  dapat melanjutkan program Duta Sulut Aman;</li>
                  <li>menugaskan tim perumus untuk menyusun AD-ART dan melengkapi struktur kepengurusan untuk selanjutnya
                  menyerahkan roda organisasi kepada pengurus yang dibentuk serta melakukan/membangun komunikasi,
                  koordinasi, dan bekerja sama dengan Gubernur Sulut, Forkompinda serta stakeholder terkait.</li>
                </ol>

                <p>Demikian rekomendasi ini dibuat untuk digunakan sesuai keperluannya, demi Sulawesi Utara yang aman dan
                sejahtera serta Indonesia Unggul. Semoga Tuhan Yang Maha Esa memberkati.</p>
              </div>
            </div>
          </div>
        </div>
  <!-- modal forum rektor : end -->

  <!-- modal kabid media tekno : start  -->
  <div class="modal fade" id="modalMediaTekno" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-end">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-3">
            <h5 class="mb-1">Bidang Media & Teknologi<br>
            Forum Rumah Kebangsaan<br>
            Duta Sulut Aman<br>
            </h5>
            <p class="fw-bold mb-0">2023-2024</p>
          </div>
          <h5 class="text-center mb-3">Struktur Pengurus</h5>
          <img src="{{asset('dsa/assets/img/modal/struktur-bid-media-teknologi.jpg')}}" alt="">
        </div>
      </div>
    </div>
  </div>
  <!-- modal media tekno : end -->

  <!-- Modal Kabid Investigasi : Start -->
  <div class="modal fade" id="modalKabidInvestigasi" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header d-flex justify-content-end">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-4">
            <h5 class="mb-0">ARAHAN KADISKOMINFO PROV SULUT</h5>
            <p class="mb-0">EVANS STEVEN LIOW, S.Sos., MM</p>
          </div>
          <h5 class="text-center mb-2">Struktur Organisasi</h5>
          <img src="{{asset('dsa/assets/img/modal/struktur-bid-investigasi.png')}}" alt="" class="mb-2">
          
          <h5 class="mb-2">SAPTA PROGRAM KERJA BIDANG INVESTIGASI</h5>
          <ol>
            <li>Membantu Ketua Umum dalam menjalankan visi dan misi organisasi</li>
            <li>Memperkaya literasi digital dalam rangka tangkal hoax dan sosialisasi bijak
            berinternet</li>
            <li>Membantu Polda dalam memberikan informasi terkait potensi konflik dan
            indikasi cyber crime</li>
            <li>Mendeteksi dan mencegah radikalisme khususnya di lembaga Pendidikan</li>
            <li>Memberi saran kepada Ketua Umum terkait konten website Rumah Kebangsaan
            Duta Sulut Aman</li>
            <li>Membantu Ketua Umum dan Pembina dalam mengevaluasi kinerja para
            koordinator wilayah dan para kepala bidang</li>
            <li>Mempersiapkan pelatihan investigasi untuk para anggota</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Kabid Investigasi : End -->
  <!-- ALL MODAL : END -->

  <!-- <section class="pb100">
    <div class="container">
      <div class="table-responsive">
        <table class="event_calender table">
          <thead class="event_title">
            <tr>
              <th>
                <i class="ion-ios-calendar-outline"></i>
                <span>Kalender Acara</span>
              </th>
              <th></th>
              <th></th>
              <th></th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img src="assets/img/cleander/c1.png" alt="event" loading="lazy">
              </td>
              <td class="event_date">
                22
                <span>February</span>
                <span>2023</span>
              </td>
              <td>
                <div class="event_place">
                  <h5>Pencanangan Duta Sulut Aman</h5>
                  <h6>08 AM - 04 PM</h6>
                  <p>Speaker: Daniel Hill</p>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-primary btn-rounded">Registrasi</a>
              </td>
            </tr>
            <tr>
              <td>
                <img src="assets/img/cleander/c1.png" alt="event" loading="lazy">
              </td>
              <td class="event_date">
                22
                <span>February</span>
                <span>2023</span>
              </td>
              <td>
                <div class="event_place">
                  <h5>Pencanangan Duta Sulut Aman</h5>
                  <h6>08 AM - 04 PM</h6>
                  <p>Speaker: Daniel Hill</p>
                </div>
              </td>
              <td>
                <a href="#" class="btn btn-primary btn-rounded">Registrasi</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </section> -->

  <!-- Artikel : start -->
  <section class="pt100 pb100" id="artnews">
    <div class="container">
      <div class="section_title mb50">
        <h3 class="title">
          Artikel
        </h3>
      </div>
      <div class="row">
      @foreach ($articles as $article)
                    <div class="col-12 col-md-4 pt50">
                        <div class="card">
                            <img class="card-img-top" height="250px" style="object-fit:cover;" src="{{ Storage::disk('public')->url($article->thumbnail) }}" alt="Card image cap">
                            <div class="card-body">
                            <div class="title-wrapper">
                                <h5 class="card-title mb-0">{{ $article->title }}</h5>
                            </div>
                            <div class="desc-wrapper">
                                <p class="card-text" style="overflow-wrap: break-word;">{{ $article->short_description ?? '-' }}
                            </div>
                            <div class="writer-wrapper d-flex align-items-center pt-3 pb-2">
                                <img src="{{ Storage::disk('public')->url($article->user->image) ? asset('acaraAdminPanel/xhtml/images/profile/17.jpg')  : 'https://dummyimage.com/34x34/000/fff&amp;text=+' }}" alt="" class="writer-img">
                                <div class="writer-info">
                                <p class="writer-name mb-0">{{$article->user->name}}</p>
                                <p class="date mb-0">{{ $article->created_at->format('d m Y') }}</p>
                                </div>
                            </div>
                            </p>
                            <a href="{{ route('articles.showPublic', $article->slug) }}" class="btn btn-primary">Baca selengkapnya</a>
                            </div>
                        </div>
                        </div>
                    @endforeach

      </div>
      <div class="d-flex justify-content-end pt50">
        <a href="{{ route('articles.indexPublic') }}" class="btn btn-primary">Artikel Selengkapnya</a>
      </div>
    </div>
  </section>
  <!-- Artikel : end -->

  <!-- Berita : start -->
  <section class="pt100 pb100" id="artnews">
    <div class="container">
      <div class="section_title mb50">
        <h3 class="title">
          Berita
        </h3>
      </div>
      <div class="row">
  
      @foreach ($blogs as $blog)
                    <div class="col-12 col-md-4 pt50">
                        <div class="card">
                            <img class="card-img-top" height="250px" style="object-fit:cover;" src="{{ Storage::disk('public')->url($blog->thumbnail) }}" alt="Card image cap">
                            <div class="card-body">
                            <div class="title-wrapper">
                                <h5 class="card-title mb-0">{{ $blog->title }}</h5>
                            </div>
                            <div class="desc-wrapper">
                                <p class="card-text" style="overflow-wrap: break-word;">{{ $blog->short_description ?? '-' }}
                            </div>
                            <div class="writer-wrapper d-flex align-items-center pt-3 pb-2">
                                <img src="{{ Storage::disk('public')->url($blog->user->image) ? asset('acaraAdminPanel/xhtml/images/profile/17.jpg')  : 'https://dummyimage.com/34x34/000/fff&amp;text=+' }}" alt="" class="writer-img">
                                <div class="writer-info">
                                <p class="writer-name mb-0">John Doe</p>
                                <p class="date mb-0">{{ $blog->created_at->format('d m Y') }}</p>
                                </div>
                            </div>
                            </p>
                            <a href="{{ route('blogs.showPublic', $blog->slug) }}" class="btn btn-primary">Baca selengkapnya</a>
                            </div>
                        </div>
                        </div>
                    @endforeach
  
      </div>
      <div class="d-flex justify-content-end pt50">
        <a href="{{ route('blogs.indexPublic') }}" class="btn btn-primary">Berita Selengkapnya</a>
      </div>
    </div>
  </section>
  <!-- Berita : end -->


  <section class="bg-gray pt100 pb100">
    <div class="container">
      <div class="section_title mb50">
        <h3 class="title">
          Kolaborasi
        </h3>
      </div>
      <div class="brand_carousel owl-carousel">
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/1.jpg')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/2.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/3.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/4.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/5.jpeg')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/6.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/7.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/8.jpg')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/9.jpg')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/10.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/11.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/12.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/13.jpeg')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/14.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/15.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/16.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/17.png')}}" alt="brand">
        </div>
        <div class="brand_item text-center">
          <img src="{{ asset('dsa/assets/img/brands/18.png')}}" alt="brand">
        </div>
      </div>
    </div>
  </section>


  
    <!-- end content wrapper -->
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
