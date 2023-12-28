@extends('layout.main')

@section('content')
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="/">Home</a></li>
                    <li>Reward</li>
                </ol>
                <h2>Reward</h2>
            </div>
        </section>
        <!-- End Breadcrumbs -->

        {{-- isi content --}}
    <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>REWARDS</h2>
            <p>Reward ini di berikan oleh partner kami. sebagai tanda penghargaan atas kinerja dalam mengerjakan Project</p>
          </div>
  
          <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Telecomunication</li>
            <li data-filter=".filter-card">Non telecomunication</li>
            <li data-filter=".filter-web">Certificate ISO</li>
          </ul>
  
          <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="assets/img/reward/1.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>Nokia Reward</p>
                <a href="assets/img/reward/1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Project Management Champion for Indonesia IOH Project"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="assets/img/reward/11.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Certificate</h4>
                <p>ISO 14001 : 2015</p>
                <a href="assets/img/reward/11.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Environmental Management System"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="assets/img/reward/2.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>NEC Reward 2023</p>
                <a href="assets/img/reward/2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Best Contribution Development Telkomsel Wireless"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="assets/img/reward/4.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>ZTE Reward 2021</p>
                <a href="assets/img/reward/4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Best Partner Indosat Project"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
  
           
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="assets/img/reward/3.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>ZTE Reward 2021</p>
                <a href="assets/img/reward/3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Outstanding Development Award"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="assets/img/reward/12.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Certificate</h4>
                <p>ISO 9001 : 2015</p>
                <a href="assets/img/reward/12.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Quality Management System"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-img"><img src="assets/img/reward/13.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Certificate</h4>
                <p>ISO 45001 : 2018</p>
                <a href="assets/img/reward/13.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Occupational Health and Safety Management System"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-img"><img src="assets/img/reward/pmi.png" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>PMI Reward</p>
                <a href="assets/img/reward/pmi.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="PIAGAM PENGHARGAAN PMI"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="assets/img/reward/6.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>ZTE Reward 2022</p>
                <a href="assets/img/reward/6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Strategi Partner Award"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>

            

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="assets/img/reward/7.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>ZTE Reward 2020</p>
                <a href="assets/img/reward/7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Best Partner Development Indosat Project"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="assets/img/reward/hwi2.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>HUAWEI Reward 2023</p>
                <a href="assets/img/reward/hwi2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Northern Region Best Subcontractor"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img"><img src="assets/img/reward/hwi1.jpg" class="img-fluid" alt=""></div>
              <div class="portfolio-info">
                <h4>Reward</h4>
                <p>HUAWEI Reward 2023</p>
                <a href="assets/img/reward/hwi1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="Best Site Supervisor"><i class="bx bx-plus"></i></a>
                {{-- <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a> --}}
              </div>
            </div>
           

          </div>
  
        </div>
      </section><!-- End Portfolio Section -->
    </main>
    <!-- End #main -->
@endsection
