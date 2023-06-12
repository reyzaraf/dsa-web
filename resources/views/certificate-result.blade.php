@extends('layouts.public')

@section('head')
    <style>
        .bg-primary {
            background: #01a449;
            color: white;
        }

        /* Medium devices (tablets, 768px and up) */
        @media (min-width: 768px) {
            /*  */
        }

        /* Large devices (desktops, 992px and up) */
        @media (min-width: 992px) {
            #check-certificate-result {
                margin-top: 8rem;
            }
        }

        /* Extra large devices (large desktops, 1200px and up) */
        @media (min-width: 1200px) {
            /*  */
        }
    </style>
@endsection

@section('content')
    <div class="triangle-wrap">
        <div class="triange"></div>
    </div>

    <div class="content-wrapper oh">
        <section id="check-certificate-result" class="py-5">
            <div class="container box-shadow p-4" style="border-radius: 5px;">
                <h2 class="promo-section__title promo-section__title--boxed pt-3 pt-md-0 text-green">
                    Certificate
                </h2>
                <div class="card rounded-0 border-0 shadow-md mx-auto">
                    <div class="card-body">
                        <table class="table table-borderless">
                            <tbody>
                                <tr class="bg-primary">
                                    <td class="w-25">Certificate No</td>
                                    <td>:</td>
                                    <td>{{ $certificate->no }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>:</td>
                                    <td>{{ $certificate->company_name }}</td>
                                </tr>
                                <tr class="bg-primary">
                                    <td>Location</td>
                                    <td>:</td>
                                    <td>{{ $certificate->location }}</td>
                                </tr>
                                <tr>
                                    <td>Training</td>
                                    <td>:</td>
                                    <td>{{ @$certificate->training ?? '-' }}</td>
                                </tr>
                                {{-- <tr class="bg-primary">
                                    <td>Scope</td>
                                    <td>:</td>
                                    <td style="word-break: break-all;">{{ $certificate->scope }}</td>
                                </tr> --}}
                            </tbody>
                        </table>

                        <div
                            class="d-flex flex-column flex-md-row align-items-center justify-content-around gap-3 gap-lg-4 pt-lg-2">
                            <div class="d-flex align-items-center gap-3 mb-2" style="gap: 1rem;">
                                <p class="m-0">Mulai Training</p>
                                <span
                                    class="bg-primary py-2 px-4 rounded-3">{{ \Carbon\Carbon::parse($certificate->issue_date)->format('d F Y') }}</span>
                            </div>

                            <div class="d-flex align-items-center gap-3 mb-2" style="gap: 1rem;">
                                <p class="m-0">Selesai Training</p>
                                <span
                                    class="bg-primary py-2 px-4 rounded-3">{{ \Carbon\Carbon::parse($certificate->expiry_date)->format('d F Y') }}</span>
                            </div>

                            {{-- <div class="d-flex align-items-center gap-3 mb-2" style="gap: 1rem;">
                                <p class="m-0">Status</p>
                                <span class="bg-primary py-2 px-4 rounded-3">{{ $certificate->status }}</span>
                            </div> --}}
                        </div>

                    </div>
                </div>
            </div>
        </section>

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
@endsection
