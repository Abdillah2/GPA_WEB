@extends('layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>ABOUT </li>
                </ol>
                <h2>ABOUT GPA</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content --}}
        <section id="clients" class="clients section">
            <div class="section-title" style="padding-bottom: 0%">
                <h2>Grha Prima Agung</h2>
            </div>
        </section>

        <section id="about" class="about" style="padding: 0pt;">
            <div class="container" data-aos="fade-up">
                <p>
                    <strong>PT GRHA PRIMA AGUNG </strong>is a general Service , Traders and Engineering Contractors in
                    Jakarta, Indonesia.
                    GPA’s operations are staffed with professionals, each with significant experience in a variety of
                    construction applications. The in-house design capabilities provide our clients with single source
                    responsibility for their design and construction and installation needs. Started the business since 2018
                    with a legally limited corporation (PT).
                </p>
                <div class="row content">
                    <div class="col-lg-6">
                        <h1>Vision</h1>
                        <p>
                            GPA aims to become a global player in the engineering and service sectors,
                            signing under the prestigious projects for tomorrow’s world of business,
                            harmonizing innovative and progressive technology with its experience and
                            high caliber work, and in the future, is not just an development and construction company;
                            but dedicated team striving to bring growth to the community.
                        </p>
                        {{-- <ul>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Duis aute irure dolor in
                                reprehenderit in voluptate velit
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat
                            </li>
                        </ul> --}}
                    </div>
                    <div class="col-lg-6">
                        <h1>Mission</h1>
                        <p>
                            GPA is a leading company in trading, site service as well as land development,
                            providing the most appropriate and desired solution with the best quality without
                            overlooking ethical values the company relies on.
                        </p>
                        {{-- <ul>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Duis aute irure dolor in
                                reprehenderit in voluptate velit
                            </li>
                            <li>
                                <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                                aliquip ex ea commodo consequat
                            </li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </section>
        <br>
        <section id="compro" class="clients section">
            <div class="section text-center">
                <p>Download Company Profile</p>
                <h3><a href="{{ asset('assets/img/cpgppa.pdf') }}">Company Profile</h3></a>
            </div>
        </section>

        <section id="warehouse" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="padding-bottom: 0%">
                    <h1>WAREHOUSE & HOMEBASE GRHA PRIMA AGUNG</h1>
                </div>
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1QTU038PwykDj9ZBMfkrtw9FOq_XgDLY&ehbc=2E312F"
                    style="width: 100%;
                    height: auto;
                    min-height: 400px;"></iframe>
            </div>
        </section>

        <section id="certificate" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="padding-bottom: 0%">
                    <h1>GLOBAL CERTIFICATE</h1>
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/iso.png') }}" alt="" class="img-fluid">
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/achivment/1.jpg') }}" alt="" class="img-fluid">
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/iso.png') }}" alt="" class="img-fluid">
                </div>
                <div class="text-center">
                    <img src="{{ asset('assets/img/iso.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </section>

        {{-- <section id="homebase" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title" style="padding-bottom: 3%">
                    <h1>HOME BASE TEAM GRHA PRIMA AGUNG</h1>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="text-center">HB BANJARMASIN</h4>
                        <img src="{{ asset('assets/img/about/hb1.png') }}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="text-center">HB BALIKPAPAN</h4>
                        <img src="{{ asset('assets/img/about/hb2.png') }}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="text-center">HB SAMPIT</h4>
                        <img src="{{ asset('assets/img/about/hb3.png') }}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                    <div class="col-12 col-md-6 col-lg-3">
                        <h4 class="text-center">HB PALANGKA</h4>
                        <img src="{{ asset('assets/img/about/hb4.png') }}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </section> --}}


        {{-- selesai konten --}}

    </main>
    <!-- End #main -->
@endsection
