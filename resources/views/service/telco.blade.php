@extends('layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Telecomunication</li>
                </ol>
                <h2>Telecomunication</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content --}}
        <section id="clients" class="clients section">
            <div class="section-title">
                <h2>TELECOMUNICATION</h2>

                <div class="container">
                    <!-- Wireless Services -->
                    <div class="row py-2">
                        <div class="col-md-2 col-12 mt-2">
                            <img src="{{ asset('assets/img/serv/it_sol.png') }}" alt=""
                                class="img-fluid border border-3 rounded">
                        </div>
                        <div class="col-md-4 col-12 py-4">
                            <h3>Wireless</h3>
                            <h5>Brand Services</h5>
                            <p class="badge bg-primary text-wrap">• Huawei</p>
                            <p class="badge bg-success text-wrap">• Ericsson</p>
                            <p class="badge bg-info text-wrap">• NOKIA</p>
                        </div>
                        <div class="col-md-2 col-12">
                            <img src="{{ asset('assets/img/serv/resi.png') }}" alt=""
                                class="img-fluid border border-3 rounded">
                        </div>
                        <div class="col-md-4 col-12">
                            <h3>IP Datacom</h3>
                            <h5>Brand Services</h5>
                            <p class="badge bg-primary text-wrap">• Huawei</p>
                            <p class="badge bg-success text-wrap">• ZTE</p>
                            <p class="badge bg-info text-wrap">• NOKIA</p>
                            <p class="badge bg-dark text-wrap">• CISCO</p>
                        </div>
                    </div>

                    <div class="row py-2">
                        <div class="col-md-2 col-12 mt-2">
                            <img src="{{ asset('assets/img/serv/infra.png') }}" alt=""
                                class="img-fluid border border-3 rounded">
                        </div>
                        <!-- Infrastructure Services -->
                        <div class="col-md-4 col-12 py-4">
                            <h3>Infrastructure</h3>
                            <h5>Brand Services</h5>
                            <p class="badge bg-primary text-wrap">• Build tower</p>
                            <p class="badge bg-success text-wrap">• Install vsat</p>
                            <p class="badge bg-success text-wrap">• Solar Panel+Power</p>
                        </div>
                        <div class="col-md-2 col-12">
                            <img src="{{ asset('assets/img/serv/fiber.png') }}" alt=""
                                class="img-fluid border border-3 rounded">
                        </div>

                        <!-- Fiberization Services -->
                        <div class="col-md-4 col-12">
                            <h3>Fiberization</h3>
                            <h5>Brand Services</h5>
                            <p class="badge bg-primary text-wrap">• FTTH</p>
                            <p class="badge bg-success text-wrap">• Opticalization</p>
                        </div>
                    </div>


                    <!-- Microwave Services -->
                    <div class="row py-2">
                        <div class="col-md-2 col-12 mt-2">
                            <img src="{{ asset('assets/img/serv/mic.png') }}" alt=""
                                class="img-fluid border border-3 rounded">
                        </div>
                        <div class="col-md-4 col-12">
                            <h3>Microwave</h3>
                            <h5>Brand Services</h5>
                            <p class="badge bg-primary text-wrap">• ALU</p>
                            <p class="badge bg-success text-wrap">• NEC</p>
                            <p class="badge bg-danger text-wrap">• MLTN</p>
                            <p class="badge bg-info text-wrap">• ZTE</p>
                            <p class="badge bg-secondary text-wrap">• RTN</p>
                        </div>
                        <div class="col-md-2 col-12">
                            <img src="{{ asset('assets/img/serv/npo.png') }}" alt=""
                                class="img-fluid border border-3 rounded">
                        </div>
                        <div class="col-md-4 col-12 py-4">
                            <h3>Network Performance & Optimization</h3>
                            <h5>Brand Services</h5>
                            <p class="badge bg-primary text-wrap">• DT</p>
                            <p class="badge bg-success text-wrap">• RF</p>
                            <p class="badge bg-info text-wrap">• PLO</p>
                            <p class="badge bg-dark text-wrap">• RNO</p>
                            <p class="badge bg-secondary text-wrap">• RNP</p>
                        </div>
                    </div>


                </div>
                {{-- selesai konten --}}

    </main>
    <!-- End #main -->
@endsection
