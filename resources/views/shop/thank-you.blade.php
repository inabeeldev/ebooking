@extends('welcome')

@section('content')

{{-- <section id="footer2" class="footer2">

</section> --}}

 <!-- ======= Breadcrumbs ======= -->
 <div class="breadcrumbs d-flex align-items-center" style="background-image: url('{{ asset('public/customer/img/breadcrumbs-bg.jpg') }}');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

      <h2>Thank You</h2>
      <ol>
        <li><a href="{{ url('/') }}">Home</a></li>
        <li>Thank You</li>
      </ol>

    </div>
  </div><!-- End Breadcrumbs -->

  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-header">
            <h2>Thank You For Booking</h2>
            <p>Thank you for booking! Our representative or service provider will contact you shortly to confirm your booking.</p>
            <img src="{{ asset('public/customer/img/thanks.gif') }}"  alt="thank you">
          </div>
          <div style="width:100%;height:0;padding-bottom:75%;position:relative;">

        </div>

    </div>
</section><!-- End Contact Section -->


@endsection
