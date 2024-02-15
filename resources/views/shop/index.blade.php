@extends('welcome')

@section('content')



<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Welcome to <span>E-Booking</span></h2>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</p>
              <a data-aos="fade-up" data-aos-delay="200" href="#" onclick="scrollToSection('features2')" class="btn-get-started">Book Now</a>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url(public/customer/img/hero-carousel/1.jpg)">
      </div>
      <div class="carousel-item" style="background-image: url(public/customer/img/hero-carousel/2.jpg)"></div>
      <div class="carousel-item" style="background-image: url(public/customer/img/hero-carousel/3.jpg)"></div>
      <div class="carousel-item" style="background-image: url(public/customer/img/hero-carousel/4.jpg)"></div>
      <div class="carousel-item" style="background-image: url(public/customer/img/hero-carousel/5.jpg)"></div>
      <div class="carousel-item" style="background-image: url(public/customer/img/hero-carousel/6.jpg)"></div>

      <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>

  </section><!-- End Hero Section -->

  <main id="main">


    <!-- ======= Services Section ======= -->
    <section id="constructions" class="constructions">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>
          <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
            dolore earum</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(public/customer/img/1a.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Car Booking</h4>
                    <p>Fuga in dolorum et iste et culpa. Commodi possimus nesciunt modi voluptatem placeat deleniti
                      adipisci. Cum delectus doloribus non veritatis. Officia temporibus illo magnam. Dolor eos et.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(public/customer/img/2a.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Cinema Ticket Booking</h4>
                    <p>Sunt deserunt maiores voluptatem autem est rerum perferendis rerum blanditiis. Est laboriosam qui
                      iste numquam laboriosam voluptatem architecto. Est laudantium sunt at quas aut hic. Eum
                      dignissimos.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(public/customer/img/3a.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Hotel Room Booking</h4>
                    <p>Dicta porro nobis. Velit cum in. Nesciunt dignissimos enim molestiae facilis numquam quae quaerat
                      ipsam omnis. Neque debitis ipsum at architecto officia laboriosam odit. Ut sunt temporibus nulla
                      culpa.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(public/customer/img/4a.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Stadium Ticket Booking</h4>
                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque
                      architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores
                      libero nobis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(public/customer/img/5a.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Table Booking</h4>
                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque
                      architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores
                      libero nobis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg" style="background-image: url(public/customer/img/6a.jpg);"></div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title">Event Hall Booking</h4>
                    <p>Aut est quidem doloremque voluptatem magnam quis excepturi vero quia. Eum eos doloremque
                      architecto illo at beatae dolore. Fugiat suscipit et sint ratione dolores. Aut aliquid ea dolores
                      libero nobis.</p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

        </div>

      </div>
    </section><!-- End Services Section -->




    <!-- ======= Features Section ======= -->
    <section id="features2" class="features section-bg">
      <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row g-2 d-flex">

            <li class="nav-item col-2">
              <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                <h4>Restaurant Table Booking</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                <h4>Stadium Seat Booking</h4>
              </a><!-- End tab nav item -->

            <li class="nav-item col-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                <h4>Hotel Room Booking</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                <h4>Event Hall Booking</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
                <h4>Car Booking</h4>
              </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-2">
              <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
                <h4>Cinema Ticket Booking</h4>
              </a>
            </li><!-- End tab nav item -->

          </ul>

        <div class="tab-content" id="features2">

            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3>Restaurant Table Booking</h3>
                    <p class="fst-italic">
                      Reserve a table at your favorite restaurant for a seamless dining experience.
                    </p>
                    <ul>
                      <li><i class="bi bi-check2-all"></i> Easily book tables online or via phone.</li>
                      <li><i class="bi bi-check2-all"></i> Choose your preferred date, time, and seating.</li>
                      <li><i class="bi bi-check2-all"></i> Receive instant confirmation of your reservation.</li>
                    </ul>
                    <a href="{{ route('table') }}" class="readmore stretched-link mt-3" style="font-size: 22px; font-weight: bold;">Book Now <i
                        class="bi bi-arrow-right"></i></a>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('public/customer/img/5a.jpg') }}" alt="Restaurant Table Booking" class="img-fluid">
                  </div>
                </div>
              </div><!-- End tab content item -->

              <div class="tab-pane" id="tab-2">
                <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3>Stadium Seat Booking</h3>
                    <p class="fst-italic">
                      Secure your seats for upcoming stadium events and enjoy the action live.
                    </p>
                    <ul>
                      <li><i class="bi bi-check2-all"></i> Reserve seats for sporting events, concerts, and more.</li>
                      <li><i class="bi bi-check2-all"></i> Select seats based on your preferences and budget.</li>
                      <li><i class="bi bi-check2-all"></i> Receive e-tickets instantly upon successful booking.</li>
                    </ul>
                    <a href="{{ route('stadium') }}" class="readmore stretched-link mt-3" style="font-size: 22px; font-weight: bold;">Book Now <i
                        class="bi bi-arrow-right"></i></a>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('public/customer/img/4a.jpg') }}" alt="Stadium Seat Booking" class="img-fluid">
                  </div>
                </div>
              </div><!-- End tab content item -->

              <div class="tab-pane" id="tab-3">
                <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3>Hotel Room Booking</h3>
                    <p class="fst-italic">
                      Find and book hotel rooms for your next trip with ease.
                    </p>
                    <ul>
                      <li><i class="bi bi-check2-all"></i> Explore a wide range of hotels and accommodations.</li>
                      <li><i class="bi bi-check2-all"></i> Filter options based on price, location, and amenities.</li>
                      <li><i class="bi bi-check2-all"></i> Securely reserve your room and receive booking confirmation.</li>
                    </ul>
                    <a href="{{ route('hotel') }}" class="readmore stretched-link mt-3" style="font-size: 22px; font-weight: bold;">Book Now <i
                        class="bi bi-arrow-right"></i></a>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('public/customer/img/3a.jpg') }}" alt="Hotel Room Booking" class="img-fluid">
                  </div>
                </div>
              </div><!-- End tab content item -->

              <div class="tab-pane" id="tab-4">
                <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3>Event Hall Booking</h3>
                    <p class="fst-italic">
                      Book event halls and venues for your special occasions.
                    </p>
                    <ul>
                      <li><i class="bi bi-check2-all"></i> Browse a variety of event spaces suitable for any occasion.</li>
                      <li><i class="bi bi-check2-all"></i> Customize your event with flexible booking options.</li>
                      <li><i class="bi bi-check2-all"></i> Coordinate with venue staff for seamless event planning.</li>
                    </ul>
                    <a href="{{ route('event') }}" class="readmore stretched-link mt-3" style="font-size: 22px; font-weight: bold;">Book Now <i
                        class="bi bi-arrow-right"></i></a>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('public/customer/img/6a.jpg') }}" alt="Event Hall Booking" class="img-fluid">
                  </div>
                </div>
              </div><!-- End tab content item -->

              <div class="tab-pane" id="tab-5">
                <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3>Car Booking</h3>
                    <p class="fst-italic">
                      Rent cars for your travel needs with ease and convenience.
                    </p>
                    <ul>
                      <li><i class="bi bi-check2-all"></i> Choose from a wide selection of vehicles to suit your preferences.</li>
                      <li><i class="bi bi-check2-all"></i> Select rental duration and pickup/drop-off locations.</li>
                      <li><i class="bi bi-check2-all"></i> Enjoy hassle-free booking and reliable customer support.</li>
                    </ul>
                    <a href="{{ route('car') }}" class="readmore stretched-link mt-3" style="font-size: 22px; font-weight: bold;">Book Now <i
                        class="bi bi-arrow-right"></i></a>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('public/customer/img/1a.jpg') }}" alt="Car Booking" class="img-fluid">
                  </div>
                </div>
              </div><!-- End tab content item -->

              <div class="tab-pane" id="tab-6">
                <div class="row">
                  <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                    data-aos="fade-up" data-aos-delay="100">
                    <h3>Cinema Ticket Booking</h3>
                    <p class="fst-italic">
                      Reserve movie tickets for the latest releases at your favorite cinemas.
                    </p>
                    <ul>
                      <li><i class="bi bi-check2-all"></i> Explore movie schedules and showtimes.</li>
                      <li><i class="bi bi-check2-all"></i> Book tickets in advance and avoid long queues.</li>
                      <li><i class="bi bi-check2-all"></i> Choose seats and pay securely online.</li>
                    </ul>
                    <a href="{{ route('cinema') }}" class="readmore stretched-link mt-3" style="font-size: 22px; font-weight: bold;">Book Now <i
                        class="bi bi-arrow-right"></i></a>
                  </div>
                  <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="{{ asset('public/customer/img/2a.jpg') }}" alt="Cinema Ticket Booking" class="img-fluid">
                  </div>
                </div>
              </div><!-- End tab content item -->

        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Our Projects Section ======= -->
    <section id="projects" class="projects">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Gallery</h2>
          <p>Consequatur libero assumenda est voluptatem est quidem illum et officia imilique qui vel architecto
            accusamus fugit aut qui distinctio</p>
        </div>

        <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
          data-portfolio-sort="original-order">

          <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-table">Table Reservation</li>
            <li data-filter=".filter-car">Car Booking</li>
            <li data-filter=".filter-stadium">Stadium Seat</li>
            <li data-filter=".filter-event">Event Hall</li>
            <li data-filter=".filter-hotel">Hotel Room</li>
            <li data-filter=".filter-cinema">Cinema Seat</li>
          </ul><!-- End Projects Filters -->

          <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-4 col-md-6 portfolio-item filter-table">
              <div class="portfolio-content h-100">
                <img src="{{ asset('public/customer/img/projects/t1.jpg') }}" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <p>Lorem ipsum, dolor sit amet consectetur</p>
                  <a href="{{ asset('public/customer/img/projects/t1.jpg') }}"
                     class="glightbox preview-link"></a>
                </div>
              </div>
            </div><!-- End Projects Item -->

            <div class="col-lg-4 col-md-6 portfolio-item filter-cinema">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('public/customer/img/projects/c1.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('public/customer/img/projects/c1.jpg') }}"
                       class="glightbox preview-link"></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-event">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('public/customer/img/projects/e1.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('public/customer/img/projects/e1.jpg') }}"
                       class="glightbox preview-link"></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-hotel">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('public/customer/img/projects/h1.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('public/customer/img/projects/h1.jpg') }}"
                       class="glightbox preview-link"></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-stadium">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('public/customer/img/projects/s1.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('public/customer/img/projects/s1.jpg') }}"
                       class="glightbox preview-link"></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-car">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('public/customer/img/projects/ca1.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('public/customer/img/projects/ca1.jpg') }}"
                       class="glightbox preview-link"></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->




              <div class="col-lg-4 col-md-6 portfolio-item filter-table">
                <div class="portfolio-content h-100">
                  <img src="{{ asset('public/customer/img/projects/t2.jpg') }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                    <a href="{{ asset('public/customer/img/projects/t2.jpg') }}"
                       class="glightbox preview-link"></a>
                  </div>
                </div>
              </div><!-- End Projects Item -->

              <div class="col-lg-4 col-md-6 portfolio-item filter-cinema">
                  <div class="portfolio-content h-100">
                    <img src="{{ asset('public/customer/img/projects/c2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="{{ asset('public/customer/img/projects/c2.jpg') }}"
                         class="glightbox preview-link"></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-event">
                  <div class="portfolio-content h-100">
                    <img src="{{ asset('public/customer/img/projects/e2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="{{ asset('public/customer/img/projects/e2.jpg') }}"
                         class="glightbox preview-link"></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-hotel">
                  <div class="portfolio-content h-100">
                    <img src="{{ asset('public/customer/img/projects/h2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="{{ asset('public/customer/img/projects/h2.jpg') }}"
                         class="glightbox preview-link"></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-stadium">
                  <div class="portfolio-content h-100">
                    <img src="{{ asset('public/customer/img/projects/s2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="{{ asset('public/customer/img/projects/s2.jpg') }}"
                         class="glightbox preview-link"></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->

                <div class="col-lg-4 col-md-6 portfolio-item filter-car">
                  <div class="portfolio-content h-100">
                    <img src="{{ asset('public/customer/img/projects/ca2.jpg') }}" class="img-fluid" alt="">
                    <div class="portfolio-info">
                      <p>Lorem ipsum, dolor sit amet consectetur</p>
                      <a href="{{ asset('public/customer/img/projects/ca2.jpg') }}"
                         class="glightbox preview-link"></a>
                    </div>
                  </div>
                </div><!-- End Projects Item -->



                <div class="col-lg-4 col-md-6 portfolio-item filter-table">
                    <div class="portfolio-content h-100">
                      <img src="{{ asset('public/customer/img/projects/t3.jpg') }}" class="img-fluid" alt="">
                      <div class="portfolio-info">
                        <p>Lorem ipsum, dolor sit amet consectetur</p>
                        <a href="{{ asset('public/customer/img/projects/t3.jpg') }}"
                           class="glightbox preview-link"></a>
                      </div>
                    </div>
                  </div><!-- End Projects Item -->

                  <div class="col-lg-4 col-md-6 portfolio-item filter-cinema">
                      <div class="portfolio-content h-100">
                        <img src="{{ asset('public/customer/img/projects/c3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <p>Lorem ipsum, dolor sit amet consectetur</p>
                          <a href="{{ asset('public/customer/img/projects/c3.jpg') }}"
                             class="glightbox preview-link"></a>
                        </div>
                      </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-event">
                      <div class="portfolio-content h-100">
                        <img src="{{ asset('public/customer/img/projects/e3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <p>Lorem ipsum, dolor sit amet consectetur</p>
                          <a href="{{ asset('public/customer/img/projects/e3.jpg') }}"
                             class="glightbox preview-link"></a>
                        </div>
                      </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-hotel">
                      <div class="portfolio-content h-100">
                        <img src="{{ asset('public/customer/img/projects/h3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <p>Lorem ipsum, dolor sit amet consectetur</p>
                          <a href="{{ asset('public/customer/img/projects/h3.jpg') }}"
                             class="glightbox preview-link"></a>
                        </div>
                      </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-stadium">
                      <div class="portfolio-content h-100">
                        <img src="{{ asset('public/customer/img/projects/s3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <p>Lorem ipsum, dolor sit amet consectetur</p>
                          <a href="{{ asset('public/customer/img/projects/s3.jpg') }}"
                             class="glightbox preview-link"></a>
                        </div>
                      </div>
                    </div><!-- End Projects Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item filter-car">
                      <div class="portfolio-content h-100">
                        <img src="{{ asset('public/customer/img/projects/ca3.jpg') }}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                          <p>Lorem ipsum, dolor sit amet consectetur</p>
                          <a href="{{ asset('public/customer/img/projects/ca3.jpg') }}"
                             class="glightbox preview-link"></a>
                        </div>
                      </div>
                    </div><!-- End Projects Item -->



          </div><!-- End Projects Container -->

        </div>

      </div>
    </section><!-- End Our Projects Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Testimonials</h2>
          <p>Quam sed id excepturi ccusantium dolorem ut quis dolores nisi llum nostrum enim velit qui ut et autem uia
            reprehenderit sunt deleniti</p>
        </div>

        <div class="slides-2 swiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{ asset('public/customer/img/testimonials/testimonials-1.jpg') }}" class="testimonial-img" alt="">
                    <h3>Ahmed Nabeel</h3>
                    <h4>Marketing Manager</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      I have been using this service for years now, and I'm always impressed by the quality and reliability. Highly recommended for anyone looking for a seamless experience!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{ asset('public/customer/img/testimonials/testimonials-2.jpg') }}" class="testimonial-img" alt="">
                    <h3>Afshan Ramzan</h3>
                    <h4>Business Owner</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      I cannot express how satisfied I am with the level of service provided. From booking to completion, everything was smooth and hassle-free. Will definitely be using again!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{ asset('public/customer/img/testimonials/testimonials-3.jpg') }}" class="testimonial-img" alt="">
                    <h3>Muqadas Ghafoor</h3>
                    <h4>Software Engineer</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      As someone who travels frequently, this service has made my life so much easier. The convenience and efficiency are unmatched. Thank you for providing such a valuable service!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{ asset('public/customer/img/testimonials/testimonials-4.jpg') }}" class="testimonial-img" alt="">
                    <h3>Shoaib Malik</h3>
                    <h4>Accountant</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      This service exceeded my expectations in every way possible. The staff was courteous, the process was seamless, and the results were outstanding. Highly recommended!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

              <div class="swiper-slide">
                <div class="testimonial-wrap">
                  <div class="testimonial-item">
                    <img src="{{ asset('public/customer/img/testimonials/testimonials-5.jpg') }}" class="testimonial-img" alt="">
                    <h3>Kamran Ahmed</h3>
                    <h4>HR Manager</h4>
                    <div class="stars">
                      <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                        class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                    </div>
                    <p>
                      <i class="bi bi-quote quote-icon-left"></i>
                      From start to finish, the entire experience was top-notch. I was impressed by the professionalism and attention to detail. Will definitely be using this service again!
                      <i class="bi bi-quote quote-icon-right"></i>
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->



  </main><!-- End #main -->

  <script>
    function scrollToSection(sectionId) {
        // Get the target section by its id
        var section = document.getElementById(sectionId);

        // Scroll to the target section
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
        }
    }
</script>


@endsection
