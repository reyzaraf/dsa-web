@extends('layouts.acaraAdminPanel')

@section('heads')
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp">
    <style>
        .ck-editor__editable_inline {
            min-height: 400px;
        }
    </style>
@endsection

@section('content')
    <div class="content-wrapper oh">
    <div class="text-center">
    <h1>Koreksi Artikel</h1>
    <span>Sebelum Artikel dipublish / diterbitkan akan ada tahap pengkoreksian oleh Super admin</span>
    </div>
    @can('systems control')
    <div class="text-center">
    <span>Apabila Artikel sudai sesuai, anda dapat menekan tombol Terima</span><br>
    <span>Jika Artikel tidak sesuai atau melanggar, anda dapat menekan tombol Tolak</span>
    </div>
    <div class="btn-group d-flex justify-content-center">
        <form action="{{ route('admin.blogs.accepting', $blog->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                        <button type="submit" class="btn btn-lg btn-success">
                            Publish
                        </button>
        </form>
        <form class="pl-2" action="{{ route('admin.blogs.declining', $blog->id) }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                        <button type="submit" class="btn btn-lg btn-danger">
                            Tolak Berita
                        </button>
        </form>
    </div>
    @endcan
  
        <section class="page-title blog-featured-img bg-color-overlay bg-color-overlay--1 text-center"
            id="blog-title">
            <div class="container">
                <div class="page-title__holder">
                    <h1 class="page-title__title">
                        {{ $blog->title }}
                    </h1>
                    <h3>
                       Penulis : {{ $blog->user->name}}
                    </h3>
                    <ul class="entry__meta">
                        <li class="entry__meta-date">{{ $blog->created_at->format('d F Y') }}</li>
                    </ul>
                </div>
            </div>
        </section>

        <section class="section-wrap pt-40 pb-48">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="blog__content">
                            <article class="entry mb-0">
                                <div class="entry__article-wrap">
                                    <div class="entry__article">
                                            <center class="pb-5">
                                            <img width="500px" height="100%" src="{{ Storage::disk('public')->url($blog->thumbnail) }}" alt="">
                                            </center>
                                        {!! $blog->body !!}
                                    </div>
                                    <!-- end entry article -->
                                </div>
                                <!-- end entry article wrap -->
                            </article>

                            {{-- <!-- Prev / Next Post --> --}}
                            {{-- <nav class="entry-navigation">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <a href="single-post.html" class="entry-navigation__url entry-navigation--left">
                                            <img src="img/blog/prev_post.jpg" alt=""
                                                class="entry-navigation__img" />
                                            <div class="entry-navigation__body">
                                                <i class="ui-arrow-left"></i>
                                                <span class="entry-navigation__label">Previous Post</span>
                                                <h6 class="entry-navigation__title">
                                                    How to design your first mobile app
                                                </h6>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-lg-6">
                                        <a href="single-post.html" class="entry-navigation__url entry-navigation--right">
                                            <div class="entry-navigation__body">
                                                <span class="entry-navigation__label">Next Post</span>
                                                <i class="ui-arrow-right"></i>
                                                <h6 class="entry-navigation__title">
                                                    How to design your first mobile app
                                                </h6>
                                            </div>
                                            <img src="img/blog/next_post.jpg" alt=""
                                                class="entry-navigation__img" />
                                        </a>
                                    </div>
                                </div>
                            </nav> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div id="back-to-top">
            <a href="#top"><i class="ui-arrow-up"></i></a>
        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('acaraAdminPanel/xhtml/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('acaraAdminPanel/xhtml/vendor/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('acaraAdminPanel/xhtml/js/plugins-init/select2-init.js') }}"></script>
    <script src="{{ asset('adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
    <script>
        $(function() {
            bsCustomFileInput.init();
        });
    </script>
    <script src="{{ asset('ckeditor5/build/ckeditor.js') }}"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#body'), {

                licenseKey: '',



            })
            .then(editor => {
                window.editor = editor;




            })
            .catch(error => {
                console.error('Oops, something went wrong!');
                console.error(
                    'Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:'
                );
                console.warn('Build id: 8ubb9kaqv8bd-mk6bg6wswnw1');
                console.error(error);
            });
    </script>
@endsection