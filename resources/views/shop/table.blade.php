@extends('welcome')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h2 data-aos="fade-down">Restaurant Table Reservation</h2>
            <p data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
              incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              laboris nisi ut aliquip ex ea commodo consequat.</p>
          </div>
        </div>
      </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

      <div class="carousel-item active" style="background-image: url('{{ asset('public/customer/img/hero-carousel/1.jpg') }}')">
      </div>


    </div>

  </section><!-- End Hero Section -->


  <!-- ======= Services Section ======= -->
  <section id="constructions" class="constructions">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Most Popular Restaurants</h2>
        <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem
          dolore earum</p>
      </div>

      <div class="row gy-4">
          @foreach ($tables as $table)
              <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="card-item">
                      <div class="row">
                          <div class="col-xl-5">
                              <div class="card-bg" style="background-image: url('{{ asset('public/images/services/' . $table->image) }}');"></div>
                          </div>
                          <div class="col-xl-7 d-flex align-items-center">
                              <div class="card-body">
                                  <h4 class="card-title">{{ $table->name }}</h4>
                                  <p>{{ $table->description }}</p>
                                  <a href="{{ route('book-now', $table->id) }}" class="btn-book mt-3">Book Now</a>
                              </div>
                          </div>
                      </div>
                  </div>
              </div><!-- End Card Item -->
          @endforeach
      </div>

    </div>
  </section><!-- End Services Section -->


@endsection
