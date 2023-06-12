<header class="header navbar fixed-top navbar-expand-md sticky_header">
    <div class="container">
      <a class="navbar-brand logo" href="#">
        <img style="    float: left;
    max-width: 70px;
    margin-right: 3px;" src="{{ asset('dsa/assets/img/logo.png') }}" alt="Evento" />
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#headernav" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="lnr lnr-text-align-right"></span>
      </button>
      <div class="collapse navbar-collapse flex-sm-row-reverse" id="headernav">
        <ul class=" nav navbar-nav menu">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs(['landingpage']) ? 'active' : '' }}" href="{{ route('landingpage') }}">Beranda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">Tentang Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#tim">Tim Kami</a>
          </li>
          <li class="nav-item">
          <a href="{{ route('articles.indexPublic') }}"
                class="nav-link {{ request()->routeIs(['articles.indexPublic']) ? 'active' : '' }}">Artikel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs(['blogs.indexPublic']) ? 'active' : '' }}" href="{{ route('blogs.indexPublic') }}">Berita</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#kontak">Kontak</a>
          </li>
        </ul>
      </div>
    </div>
  </header>