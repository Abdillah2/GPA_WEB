@extends('layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Contact</li>
                </ol>
                <h2>Contact</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content --}}
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    {{-- <h2>Contact</h2> --}}
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

                            {{-- <div class="phone">
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
        {{-- selesai konten --}}

    </main>
    <!-- End #main -->
@endsection
