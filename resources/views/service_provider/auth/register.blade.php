<!DOCTYPE html>

<html
  lang="en"
  class="light-style customizer-hide"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Register | Getclout</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('public/admin/vendor/fonts/boxicons.css') }}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('public/admin/vendor/css/core.css') }}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('public/admin/vendor/css/theme-default.css') }}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('public/admin/css/demo.css') }}" />


    <link rel="stylesheet" href="{{ asset('public/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />

    <link rel="stylesheet" href="{{ asset('public/admin/vendor/css/pages/page-auth.css') }}" />

    <!-- select2 -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('public/admin/vendor/js/helpers.js') }}"></script>


    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('public/admin/js/config.js') }}"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner2 authentication-inner-register">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center d-flex">
                    <a href="index.html" class="app-brand-link gap-2">
                        <img src="{{ asset('public/admin/img/logo/logo.jpg') }}" alt="" style="object-fit: cover; max-width: 200px; height: auto;">
                    </a>
                </div>
                <!-- /Logo -->
                @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>{{ session('success') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>

                @endif

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
                <h3 class="mb-5 text-center">Sign Up</h3>
                <h4 class="mb-2">Adventure starts here with only $20 🚀</h4>
                <p class="mb-4">Make your booking management easy and fun!</p>
            <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('service-providers-register-post') }}">
            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter your Name" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter Your Mobile Number" />
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                    <label for="phone" class="form-label">CNIC</label>
                    <input type="text" class="form-control" id="cnic" name="cnic" placeholder="Enter Your CNIC" />
                    </div>
                </div>


                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="service_type" class="form-label">Service Type</label>
                        <select class="form-select" id="service_type" name="service_type">
                            <option value="">Choose Service Type</option>
                                <option value="table">Table Reservation</option>
                                <option value="room">Hotel Room</option>
                                <option value="cinema">Cinema Seat</option>
                                <option value="stadium">Stadium Seat</option>
                                <option value="event">Event Hall</option>
                                <option value="car">Car Booking</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter Your Password" />
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Enter Password again" />
                    </div>
                </div>
                <br><br>
                <div class="col-md-6">
                    <div class="mb-3">
                    <label for="card" class="form-label">Enter Card Information</label>
                    </div>
                </div>
                <div id="card-element">
                    <!-- A Stripe Element will be inserted here. -->
                </div>

                <!-- Used to display form errors. -->
                <div id="card-errors" role="alert"></div>
                <br><br>

                <div class="mb-3">
                        <label class="form-check-label" for="terms-conditions">
                            Please read our
                            <a href="#" data-bs-toggle="modal" data-bs-target="#termsModal">terms and conditions</a>
                        </label>
                </div>
                <button class="btn btn-primary d-grid w-100" type="submit">Sign up</button>
            </div>

            </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{ route('service-providers-login') }}">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->



    <!-- Modal -->
<div class="modal fade" id="termsModal" tabindex="-1" aria-labelledby="termsModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="termsModalLabel">Terms and Conditions</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>
                    I agree to be contacted by email AND/OR text message using the platform I selected above to:
                </p>
                <ol>
                    <li>Check the status of my service request</li>
                    <li>Access special pricing for partners</li>
                    <li>Provide any additional information required for my service request</li>
                    <li>Receive updates and communications upon approval of my service request</li>
                </ol>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('public/admin/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ asset('public/admin/vendor/js/bootstrap.js') }}../"></script>
    <script src="{{ asset('public/admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script src="{{ asset('public/admin/vendor/js/menu.js') }}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="{{ asset('public/admin/js/main.js') }}"></script>



    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

<script src="https://js.stripe.com/v3/"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        var stripe = Stripe('{{ config('services.stripe.key') }}');
        var elements = stripe.elements();
        var cardElement = elements.create('card');
        cardElement.mount('#card-element');

        var form = document.getElementById('formAuthentication');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(cardElement).then(function(result) {
                if (result.error) {
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    var tokenInput = document.createElement('input');
                    tokenInput.setAttribute('type', 'hidden');
                    tokenInput.setAttribute('name', 'stripeToken');
                    tokenInput.setAttribute('value', result.token.id);
                    form.appendChild(tokenInput);
                    form.submit();
                }
            });
        });
    });
</script>



  </body>
</html>



