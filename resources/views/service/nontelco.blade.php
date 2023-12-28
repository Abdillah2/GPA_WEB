@extends('layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Building Construction</li>
                </ol>
                <h2>Building Construction</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content building construction, building  renovation,railway, --}}
        <section id="clients" class="clients section">
            <div class="section-title">
                <h2>Building Construction</h2>
                <div class="container">
                    <div class="row py-2">
                        <div class="col-md-2 col-12 mt-2">
                            <img src="{{ asset('assets/img/serv/kont.png') }}" alt=""
                                class="img-fluid border border-3 rounded">
                        </div>
                        <div class="col-md-4 col-12 py-4">
                            <h3>Building Construction</h3>
                            <h5>Services</h5>
                            <p class="badge bg-success text-wrap">• Building Renovation</p>
                            <p class="badge bg-info text-wrap">• Railway</p>
                            <p class="badge bg-info text-wrap">• CME</p>
                            <p class="badge bg-info text-wrap">• Structure</p>
                            <p class="badge bg-info text-wrap">• Power</p>
                        </div>
                    </div>

                </div>
            </div>
            {{-- selesai konten --}}

    </main>
    <!-- End #main -->
@endsection
