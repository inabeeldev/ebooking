@extends('admin.layouts.app')

@section('content')


<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">

    <div class="row animate__animated animate__fadeIn">
        <div class="col-lg-12 mb-4 order-0">
            <div class="card">
              <div class="d-flex align-items-end row">
                <div class="col-sm-9">
                  <div class="card-body">
                    <h4 class="card-title text-primary">All Services</h4>
                  </div>
                </div>
                <div class="col-sm-3 text-center text-sm-left">
                  <div class="card-body pb-0 px-0 px-md-4">
                    <img
                      src="{{ asset('public/admin/img/illustrations/man-with-laptop-light.png') }}"
                      height="100"
                      alt="View Badge User"
                      data-app-dark-img="illustrations/man-with-laptop-dark.png"
                      data-app-light-img="illustrations/man-with-laptop-light.png"
                    />
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif
    <!-- Striped Rows -->
    <div class="card animate__animated animate__fadeInUp">
        <h5 class="card-header">List of Services</h5>
        <div class="table-responsive text-nowrap">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Provider Name</th>
                <th>Provider Email</th>
                <th>Service Name</th>
                <th>Service Type</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody class="table-border-bottom-0">
                @foreach ($services as $service)
                <tr>
                    <td><strong>{{ $loop->iteration }}</strong></td>
                    <td>
                    @if($service->image)
                        <img src="{{ asset('public/images/services/' . $service->image) }}" alt="{{ $service->name }}" width="50" style="border-radius: 50%;">
                    @endif</td>
                    <td>{{ $service->serviceProvider->name }}</td>
                    <td>{{ $service->serviceProvider->email }}</td>
                    <td>{{ $service->name }}</td>
                    <td>{{ $service->service_type }}</td>
                    <td>
                        @php
                            $description = $service->description;
                            $wordCount = str_word_count($description);
                            $limitedDescription = $wordCount > 50 ? str_limit($description, 50) . '...' : $description;
                        @endphp
                        {{ $limitedDescription }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    <!--/ Striped Rows -->


</div>
<!-- / Content -->


@endsection


