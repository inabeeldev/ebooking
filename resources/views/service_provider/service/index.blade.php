@extends('service_provider.layouts.app')

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
                <th>Name</th>
                <th>Service Type</th>
                <th>Description</th>
                <th>Action</th>
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

                    <td>
                        <div class="btn-group" role="group" aria-label="User Actions">
                            <button type="button" class="btn btn-primary btn-show" data-bs-toggle="modal" data-bs-target="#showServiceModal2{{ $service->id }}">Show</button>
                            {{-- <button type="button" class="btn btn-warning btn-edit" data-user-id="{{ $user->id }}">Edit</button> --}}
                            <form method="post" action="{{ route('services-delete', ['id' => $service->id]) }}" onsubmit="return confirm('Are you sure you want to delete this Service?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-delete" style="border-top-left-radius: 0; border-bottom-left-radius: 0;">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>

                <!-- Show Modal -->
               <!-- Show Modal -->
                <div class="modal fade" id="showServiceModal2{{ $service->id }}" tabindex="-1" aria-labelledby="showServiceModalLabel2{{ $service->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header bg-primary text-white">
                                <h5 class="modal-title" id="showServiceModalLabel2{{ $service->id }}" style="color: white">User Details</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">

                                <div class="mb-3">
                                    <strong>Service Name:</strong> {{ $service->name }}
                                </div>
                                <div class="mb-3">
                                    <strong>Service Description:</strong> {{ $service->description }}
                                </div>

                                <div class="mb-3">
                                    <strong>Service Type:</strong> {{ $service->service_type ?? 'Not available' }}
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Show Modal End -->
                @endforeach
            </tbody>
        </table>
        </div>
    </div>
    <!--/ Striped Rows -->


</div>
<!-- / Content -->


@endsection


