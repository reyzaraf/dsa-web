@extends('layouts.public')

@section('head')
@endsection

@section('content')
    <div class="content-wrapper oh" style="
    padding-top: 90px;
">
        <section class="page-title text-center">
            <div class="container">
                <div class="page-title__holder">
                    <h1 class="page-title__title">Artikel</h1>
                    <h3 class="page-title__subtitle">
                        Artikel Terbaru
                    </h3>
                </div>
            </div>
        </section>

        <section class="section-wrap bottom-divider" id="artnews">
            <div class="container">
                <div class="row card-row">
                    @foreach ($blogs as $blog)
                    <div class="col-12 col-md-4 pt50">
                        <div class="card">
                            <img class="card-img-top" height="250px" style="object-fit:cover;" src="{{ Storage::disk('public')->url($blog->thumbnail) }}" alt="Card image cap">
                            <div class="card-body">
                            <div class="title-wrapper">
                                <h5 class="card-title mb-0">{{ $blog->title }}</h5>
                            </div>
                            <div class="desc-wrapper">
                                <p class="card-text">{{ $blog->short_description ?? '-' }}
                            </div>
                            <div class="writer-wrapper d-flex align-items-center pt-3 pb-2">
                                <img src="{{ Storage::disk('public')->url($blog->user->image) ? asset('acaraAdminPanel/xhtml/images/profile/17.jpg')  : 'https://dummyimage.com/34x34/000/fff&amp;text=+' }}" alt="" class="writer-img">
                                <div class="writer-info">
                                <p class="writer-name mb-0">{{$blog->user->name}}</p>
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
                <div class="d-flex">
                {!! $blogs->links() !!}
            </div>
                <!-- {{ $blogs->onEachSide(2)->links('pagination::default') }} -->

                <!-- Pagination -->
                {{-- <nav class="pagination">
                    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i
                            class="ui-arrow-left"></i></a>
                    <span class="pagination__page pagination__page--current">1</span>
                    <a href="#" class="pagination__page">2</a>
                    <a href="#" class="pagination__page">3</a>
                    <a href="#" class="pagination__page">4</a>
                    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i
                            class="ui-arrow-right"></i></a>
                </nav> --}}
            </div>
        </section>
        <x-public.footer />
        <!-- footer : end -->

        <div id="back-to-top">
            <a href="#top"><i class="ui-arrow-up"></i></a>
        </div>
    </div>
@endsection

@section('script')
@endsection
