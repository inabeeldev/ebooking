@extends('welcome')

@section('content')

{{-- <section id="footer2" class="footer2">

</section> --}}

 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('public/customer/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Book Now</h2>
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Book Now</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->


<!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">

        <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-6 order-lg-1 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="{{ asset('public/images/services/' . $service->image) }}" alt="Restaurant Table Booking" class="img-fluid">
                    </div>
                    <div class="col-lg-6 order-lg-2  d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
                        <h3>{{ $service->name }}</h3>
                        <p class="fst-italic">
                            {{ $service->description }}
                        </p>
                        <a href="service-details.html" class="readmore stretched-link mt-3" style="font-size: 22px; font-weight: bold;">Book Now <i
                                class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div><!-- End tab content item -->
        </div>
    </div>
</section><!-- End Features Section -->



<section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-header">
            <h2>Book Now</h2>
            <p>Please complete the form below to finalize your booking.</p>
          </div>
          @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                </button>
            </div>
            @endif
        <div class="row gy-4 mt-1">
            <div class="col-lg-8 mx-auto">

                <form action="{{ route('complete-booking') }}" method="post"  class="php-email-form2">
                    @csrf
                    <input type="hidden" name="service_id" value="{{ $service->id }}">
                    <input type="hidden" name="service_provider_id" value="{{ $service->service_provider_id }}">
                    <div class="row gy-4">
                        <div class="col-12 col-md-6 form-group">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label for="email">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" required>
                    </div>
                    <div class="form-group">
                        <label for="contact_through">How should the Service provider contact you?</label>
                        <select class="form-select" name="contact_through" id="contact_through" required>
                            <option value="" selected disabled>Choose an option</option>
                            <option value="email">Email</option>
                            <option value="phone">Phone</option>
                            <option value="whatsapp">WhatsApp</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Add Notes</label>
                        <textarea class="form-control" name="message" id="message" rows="5" placeholder="Add Notes" required></textarea>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-primary">Book Now</button></div>
                </form>

            </div><!-- End Contact Form -->
        </div>
    </div>
</section><!-- End Contact Section -->







@endsection
