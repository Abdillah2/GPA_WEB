@extends('layout.main')
<style>
    .item-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .item-list li {
        border-bottom: 1px solid #ccc;
        /* warna dan gaya garis sesuaikan kebutuhan Anda */
        padding-bottom: 10px;
        /* sesuaikan kebutuhan Anda */
        margin-bottom: 10px;
        /* sesuaikan kebutuhan Anda */
    }

    .item-list li:last-child {
        border-bottom: none;
        /* Menghapus garis bawah untuk elemen terakhir */
    }

    @media (max-width: 767px) {
        .col-md-4 {
            margin-bottom: 20px;
            /* Tambahkan margin-bottom pada kolom pertama */
        }

        .col-md-8 {
            margin-top: 20px;
            /* Tambahkan margin-top pada kolom kedua */
        }
    }
</style>
@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Product</li>
                </ol>
                <h2>Product</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content --}}
        <div class="container">
            <div class="row py-3">
                <div class="col-md-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="false"
                                        aria-controls="flush-collapseOne">
                                        IP/MPLS/IPRAN
                                    </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                Compact IPRAN/MPLS Platform
                                            </li>
                                            <li>
                                                IPRAN/MPLS Aggregation Pl
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">
                                        PTN/MPLS-TP
                                    </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        Compact PTN Platform
                                        PTN Aggregation Platform
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseThree" aria-expanded="false"
                                            aria-controls="flush-collapseThree">
                                            Ethernet Access
                                        </button>
                                    </h2>
                                    <div id="flush-collapseThree" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    Carrier Ethernet/EDD/NID
                                                </li>
                                                <li>
                                                    Media Converter
                                                </li>
                                                <li>
                                                    Fiber-Optic/4G Dual-routing
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseFour" aria-expanded="false"
                                            aria-controls="flush-collapseFour">
                                            GPON
                                        </button>
                                    </h2>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    GPON
                                                </li>
                                                <li>
                                                    PON Optical Module
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapsesix" aria-expanded="false"
                                            aria-controls="flush-collapsesix">
                                            SDH+MPLS+PCM Hybrid Mux
                                        </button>
                                    </h2>
                                    <div id="flush-collapsesix" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    SDH+PCM Integrated Servic...
                                                </li>
                                                <li>
                                                    Compact SDH+PCM Multiplexer
                                                </li>
                                                <li>
                                                    SDH+MPLS+PCM Hybrid Multi...
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseseven" aria-expanded="false"
                                            aria-controls="flush-collapseseven">
                                            SDH/PDH Multiplexer
                                        </button>
                                    </h2>
                                    <div id="flush-collapseseven" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    SDH+MPLS-TP Dual-core Mux
                                                </li>
                                                <li>
                                                    SDH Multiplexer
                                                </li>
                                                <li>
                                                    PDH Multiplexer
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseEIGHT" aria-expanded="false"
                                            aria-controls="flush-collapseEIGHT">
                                            PCM
                                        </button>
                                    </h2>
                                    <div id="flush-collapseEIGHT" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    Integrated Service Access
                                                </li>
                                                <li>
                                                    Compact PCM Multiplexer
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapsenine"
                                            aria-expanded="false" aria-controls="flush-collapsenine">
                                            Protocol Converter
                                        </button>
                                    </h2>
                                    <div id="flush-collapsenine" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    Converter Rack
                                                </li>
                                                <li>
                                                    EoPDH Converter
                                                </li>
                                                <li>
                                                    V.35 over E1 Converter
                                                </li>
                                                <li>
                                                    EoSDH Converter
                                                </li>
                                                <li>
                                                    Ethernet over E3/DS3 Conv...
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseten"
                                            aria-expanded="false" aria-controls="flush-collapseten">
                                            TDMoIP
                                        </button>
                                    </h2>
                                    <div id="flush-collapseten" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    TDM over IP
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapseeleven"
                                            aria-expanded="false" aria-controls="flush-collapseeleven">
                                            Smart Enterprise Gateway
                                        </button>
                                    </h2>
                                    <div id="flush-collapseeleven" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    Enterprise Gateway
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse12"
                                            aria-expanded="false" aria-controls="flush-collapse12">
                                            xWDM/OTN
                                        </button>
                                    </h2>
                                    <div id="flush-collapse12" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    OTN
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse13"
                                            aria-expanded="false" aria-controls="flush-collapse13">
                                            OLP
                                        </button>
                                    </h2>
                                    <div id="flush-collapse13" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    Optical Line Protection
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                            aria-expanded="false" aria-controls="flush-collapse1">
                                            Wireless Transportation/Radio
                                        </button>
                                    </h2>
                                    <div id="flush-collapse1" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    IP Radio
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse14"
                                            aria-expanded="false" aria-controls="flush-collapse14">
                                            SFP/SFP+/xWDM/PON Optical Module
                                        </button>
                                    </h2>
                                    <div id="flush-collapse14" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    Optical Module
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse15"
                                            aria-expanded="false" aria-controls="flush-collapse15">
                                            Network Management System
                                        </button>
                                    </h2>
                                    <div id="flush-collapse15" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    NMS
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapse16" aria-expanded="false"
                                            aria-controls="flush-collapse16">
                                            DSL Router
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse17"
                                            aria-expanded="false" aria-controls="flush-collapse17">
                                            Precision Time Protocol (PTP) <br>
                                            Grandmaster Clock
                                        </button>
                                    </h2>
                                    <div id="flush-collapse17" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    PTP/IEEE 1588 Grandmaster...
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse18"
                                            aria-expanded="false" aria-controls="flush-collapse18">
                                            Small Cell
                                        </button>
                                    </h2>
                                    <div id="flush-collapse18" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="accordion-body">
                                            <ul>
                                                <li>
                                                    Small Cell HSC103 Femto C...
                                                </li>
                                                <li>
                                                    Small Cell HSC312 Nano Cell
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse19"
                                            aria-expanded="false" aria-controls="flush-collapse19">
                                            SDWAN
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse19"
                                            aria-expanded="false" aria-controls="flush-collapse18">
                                            uCPE hardware
                                        </button>
                                    </h2>
                                </div>

                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#flush-collapse19"
                                            aria-expanded="false" aria-controls="flush-collapse18">
                                            Ethernet switch
                                        </button>
                                    </h2>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <div class="card">
                        <div class="card-header text-center">
                            Featured
                        </div>
                        <div class="card-body">
                            <ul class="item-list">
                                <li>
                                    <img src="{{ asset('assets/img/why-us.png') }}" style="width: 15%" alt="">
                                    <div class="li-right">
                                        <h2>Compact IPRAN/MPLS Platform</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, repellat! <br>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti
                                            nesciunt cupiditate inventore pariatur accusamus est. Dolor culpa eos hic. </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/why-us.png') }}" style="width: 15%" alt="">
                                    <div class="li-right">
                                        <h2>IPRAN/MPLS Aggregation Pl</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, repellat! </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/why-us.png') }}" style="width: 15%" alt="">
                                    <div class="li-right">
                                        <h2>Compact IPRAN/MPLS Platform</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, repellat! <br>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti
                                            nesciunt cupiditate inventore pariatur accusamus est. Dolor culpa eos hic. </p>
                                    </div>
                                </li>
                                <li>
                                    <img src="{{ asset('assets/img/why-us.png') }}" style="width: 15%" alt="">
                                    <div class="li-right">
                                        <h2>IPRAN/MPLS Aggregation Pl</h2>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, repellat! </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="pagination">
                        <ul class="pagination py-2">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>

                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        {{-- selesai konten --}}
    </main>
    <!-- End #main -->
@endsection
