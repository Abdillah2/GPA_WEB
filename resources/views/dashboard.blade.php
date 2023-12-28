@extends('layout.main')

@section('content')
    <script src="assets/js/bootstrap.js"></script>
    <!-- ======= Hero Section ======= -->

    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>GRHA PRIMA AGUNG</h1>
                    <h2>
                        GPA is a general Service, Traders and
                        Engineering Contractors in Jakarta, Indonesia.
                        GPA’s operations are staffed with professionals,
                        One stop solution E2E delivery service projects.
                    </h2>
                    {{-- <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div> --}}
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    {{-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt="" /> --}}
                    <div id="carouselExample" class="carousel slide">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('assets/img/a.png') }}" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('assets/img/aaa.png') }}" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">
        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <h1>Vision</h1>
                        <p>
                            GPA aims to become a global player in the engineering and service sectors,
                        signing under the prestigious projects for tomorrow’s world of business,
                        harmonizing innovative and progressive technology with its experience and
                        high caliber work, and in the future, is not just an development and construction company;
                        but dedicated team striving to bring growth to the community
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
                <a href="{{ 'about' }}" class="btn-learn-more">Learn More</a>
            </div>
        </section>
        <!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">
                <div class="row">
                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1">
                        <div class="content">
                            <h3>
                                <strong>K3 Policy Commitment, Drug and Alcohol Use
                                    Grha Prima Agung</strong>
                            </h3>
                            <p>
                                We, PT. Grha Prima Agung as a company operating in the construction sector, telecommunications, and procurement we have a strong commitment to enforcing the K3 Policy which contains health and safety procedures for employees.
                                <a href="{{ 'hse' }}" class="btn-learn-more">Learn More</a>
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>
                                <li>
                                    <a data-bs-toggle="collapse" class="collapse"
                                        data-bs-target="#accordion-list-1"><span>01</span>
                                        Monitor and organize. <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                        <p>
                                            Monitor and organize the enforcement of our K3 and Environmental Procedures arrange it, and we carry it out in all work processes that the company carries out.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> Manage company business risks
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Manage company business risks and potential dangers related to work activities at the location
                                            work to prevent incidents from occurring to workers, assets (physical & data), the environment,
                                            social and corporate reputation.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Guarantee that all workers
                                         <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Guarantee that all workers, partners and subcontractors will not use alcohol
                                            and drugs while working in the company.
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style="background-image: url('assets/img/why-us.png')" data-aos="zoom-in" data-aos-delay="150">
                        &nbsp;
                    </div>
                </div>
            </div>
        </section>
        <!-- End Why Us Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Services</h2>
                    <p>
                        We, PT. Grha Prima Agung as a company operating in the construction sector,
                        telecommunications,
                    </p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box w-100 text-center">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4>
                                <a href="">Branch</a>
                            </h4>
                            <h1>
                                25
                            </h1>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box w-100 text-center">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Employee</a></h4>
                            <h1>
                                346
                            </h1>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box w-100 text-center">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Projects</a></h4>
                            <h1>
                                325
                            </h1>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box w-100 text-center">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Customers</a></h4>
                            <h1>
                                275
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Section -->


        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="section-title">
                <h2>Our Client</h2>
                <div class="container">
                    <div class="row" data-aos="zoom-in">
                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/client/nokia.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/client/telkom.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/client/nec.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/client/isat.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/client/zte.png" class="img-fluid" alt="" />
                        </div>

                        <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                            <img src="assets/img/client/hw.png" class="img-fluid" alt="" />
                        </div>
                    </div>
                    <a href="{{ 'ourclients' }}" class="btn-learn-more">Moore</a>
                </div>
        </section>
        <!-- End Cliens Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Contact</h2>
                    <h4>Let's get in touch</h4>
                    <p>We're open any suggestion or just to have chat.</p>
                </div>

                <div class="row">
                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Menara Centennial, Lantai 29, Kav. 24-25 Unit D-E, Jl. Jenderal Gatot
                                    Subroto, No. 27,
                                    DKI Jakarta – Indonesia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>marketing@grhaprimaagung.com || cs@grhaprimaagung.com</p>
                            </div>
{{--
                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>0821 1311 9124 || 0858 8606 4881</p>
                            </div> --}}

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2543256602776!2d106.81826461096917!3d-6.230164393731938!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3a1e339e897%3A0xec3a7bf9c2bb54d6!2sCentennial%20Tower!5e0!3m2!1sid!2sid!4v1700412862735!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name" required />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email" required />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Subject</label>
                                <input type="text" class="form-control" name="subject" id="subject" required />
                            </div>
                            <div class="form-group">
                                <label for="name">Message</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">
                                    Your message has been sent. Thank you!
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->
    <script>
        const myCarouselElement = document.querySelector('#carouselExample')
        console.log(myCarouselElement)

        const carousel = new bootstrap.Carousel(myCarouselElement, {
            interval: 2000,
            pause: false,
            ride: true,
        });
    </script>
@endsection
