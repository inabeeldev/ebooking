@extends('service_provider.layouts.app')

@section('content')


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold pt-3 ">Create New Service</h4>
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
                <h5 class="card-header">Create New Service</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('services-store') }}" enctype="multipart/form-data">
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
                            <label for="clientWebsite" class="form-label">Description</label>
                            <textarea
                                type="text"
                                name="description"
                                class="form-control"
                                rows="5"
                                id="description"
                                placeholder="Enter Description"
                            ></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="defaultFormControlInput" class="form-label">Service Type</label>
                            <input
                                type="text"
                                class="form-control"
                                id="defaultFormControlInput"
                                aria-describedby="defaultFormControlHelp"
                                value="{{ Auth::user()->service_type }} booking"
                                disabled
                            />
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input
                                type="file"
                                name="image"
                                class="form-control"
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
