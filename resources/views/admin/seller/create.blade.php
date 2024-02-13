@extends('admin.layouts.app')

@section('content')


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold pt-3 ">Create Service Provider</h4>
    </div>

    @if (count($errors) > 0)
        <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
    @endif
    <!-- form section -->
    <div class="row animate__animated animate__fadeInUp">
        <div class="col-md-12">
            <div class="card mb-4">
                <h5 class="card-header">Create New Service Provider</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('service-providers-store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Name</label>
                            <input
                                type="text"
                                name="name"
                                class="form-control"
                                id="defaultFormControlInput"
                                placeholder="Enter Full Name"
                                aria-describedby="defaultFormControlHelp"
                            />
                        </div>

                        <!-- Additional Form Elements -->
                        <div class="mb-3">
                            <label for="clientWebsite" class="form-label">Email</label>
                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                id="clientWebsite"
                                placeholder="Enter Email"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="service_type" class="form-label">Service Type</label>
                            <select class="form-select" name="service_type" id="service_type">
                                <option value="">Choose Service Type</option>
                                <option value="table">Table</option>
                                <option value="room">Room</option>
                                <option value="cinema">Cinema</option>
                                <option value="stadium">Stadium</option>
                                <option value="event">Event</option>
                                <option value="car">Car</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="cnic" class="form-label">CNIC</label>
                            <input
                                type="text"
                                name="cnic"
                                class="form-control"
                                id="cnic"
                                placeholder="Enter CNIC of Service Provider"
                                aria-describedby="defaultFormControlHelp"
                            />
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input
                                type="text"
                                name="phone"
                                class="form-control"
                                id="phone"
                                placeholder="Enter Phone Number of Service Provider"
                                aria-describedby="defaultFormControlHelp"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input
                                type="password"
                                name="password"
                                class="form-control"
                                id="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            />
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input
                                type="password"
                                name="password_confirmation"
                                class="form-control"
                                id="password_confirmation"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            />
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- / Content -->




@endsection
