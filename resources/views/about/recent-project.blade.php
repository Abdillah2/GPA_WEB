@extends('layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>RECENT PROJECT</li>
                </ol>
                <h2>Recent Project</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content --}}
        <section id="clients" class="clients section">
            <div class="section-title pb-0">
                <h2>Recent Project</h2>
            </div>
        </section>

        <div class="container-fluid">
            <div class="container py-3">
                <!-- First Row -->
                <div class="row py-2">
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/ibs.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/alita.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/pt.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <!-- Second Row -->
                <div class="row my-3">
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/kai.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/cisco.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/LINTAS.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <!-- Third Row -->
                <div class="row my-3">
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/nokia.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/cmrt.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/cme.png') }}" alt="" class="img-fluid">
                    </div>
                </div>

                <!-- Fourth Row -->
                <div class="row my-3">
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/bakti.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/xl.png') }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-12 col-md-4 mb-3">
                        <img src="{{ asset('assets/img/expe/ipran.png') }}" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        {{-- selesai konten --}}

    </main>
    <!-- End #main -->
@endsection
