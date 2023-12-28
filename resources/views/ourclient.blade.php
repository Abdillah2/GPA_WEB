@extends('layout.main')

@section('content')
<div id="preloader"></div>
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Our Client</li>
                </ol>
                <h2>Our client</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content dikelompokkan  Equipment Vendor,  TLP, FLP, non telco --}}
        <section id="clients" class="clients section">
            <div class="section-title">
                <h2>Our Client</h2>
                <div class="container">
                    <div class="row" data-aos="zoom-in">
                        <h6 class="text-start mt-3">Operator</h6>
                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/xl.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">XL Axiata</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/telkom.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Telkomsel</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/isat.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Indosat</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/smart.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Smartfren</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/3.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Tri</p>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row" data-aos="zoom-in">
                        <h6 class="text-start mt-3">Equipment Vendor</h6>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/nec.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Nippon Electric Company</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/bach.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Bach Multi Global</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/zte.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">ZTE Indonesia</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/hw.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Huawei Indonesia</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/kopin.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Kopindosat</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/nokia.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Nokia Indonesia</p>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="row" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/ericson.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Ericsson Indonesia</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/era.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Era Bangun</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/protel.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Protelindo</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/stp.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Solusi Tunas Pratama</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/bs.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Berlian Sakti</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/ccsi.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">China Chomservice Indonesia</p>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/lte.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Lintas Teknologi Evolusi</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/forte.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">iForte Solusi Infotek</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/ibs.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Infrastuktur Bisnis Sejahtera</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/bakti.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Badan Aksesibilitas Telekomunikasi dan Informasi</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/persada.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Personel Alih Daya</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/pt.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Multi Piranti Jaya</p>
                        </div>

                    </div>
                </div>

                <div class="container">
                    <div class="row" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/yof.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">YOFC INTERNATIONAL INDONESIA</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/mnc.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">MNC Multimedia Networks</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/msn.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Media Solusi Network</p>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row" data-aos="zoom-in">
                        <h6 class="text-start mt-3">Building Construction</h6>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/kri.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Kereta Api Indonesia</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/kuli.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Kuli Web</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/tut.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2"> Tut Wuri Handayani</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/m.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Rekso Nasional Food</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/dsb.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Digital Solusindo Bestama</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/wika.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Wijaya Karya</p>
                        </div>
                    </div>

                </div>

                <div class="container">
                    <div class="row" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/ananta.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Ananta Multitech Internusa</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/mw.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">MW</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/Advan.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">ADVANCEDNET INDONESIA</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/aldan.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Aldana Sejahtera</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/mal.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Mall Taman Anggrek</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/cmrt.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Crisis Management Response Team</p>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/ayama.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Ayama Cahaya Mandiri</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/patra.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Patra Jasa</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/paku.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Pakuwon Tower</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/angkasa.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Angkasa Pura 2</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/trito.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Tricada Intronik</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/toyota.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Toyota Boshoku Indonesia</p>
                        </div>

                    </div>

                </div>

                <div class="container">
                    <div class="row" data-aos="zoom-in">

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/pgn.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Telemedia Dinamika Sarana</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/kamp.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Kamp</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/ganda.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Gandaria City</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/asia.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Asian Games 2018</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/ener.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Energi dan Sumberdaya Mineral</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/kfc.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Fast Food Indonesia</p>
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex flex-column align-items-center justify-content-center">
                            <img src="assets/img/client/harif.png" class="img-fluid" alt=""
                                style="margin-bottom: 5px;" />
                            <p class="text-center mb-2">Hariff Daya Tunggal Engineering</p>
                        </div>

                    </div>

                </div>
            </div>



        </section>
        {{-- selesai konten --}}

    </main>
    <!-- End #main -->
@endsection
