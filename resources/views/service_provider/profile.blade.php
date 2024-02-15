@extends('service_provider.layouts.app')

@section('content')

<!-- Content -->

<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4">Account Setting</h4>

    <div class="row">
      <div class="col-md-12">
        <div class="card mb-4 animate__animated animate__fadeInUp">
          <h5 class="card-header">Profile Details</h5>
          <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            @endif
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
            <form id="formAccountSettings" method="POST" action="{{ route('update-profile') }}">
                @csrf
              <div class="row">
                <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">Name</label>
                    <input class="form-control" type="text" id="name" name="name" value="{{ $sp->name }}" autofocus />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="email" class="form-label">E-mail</label>
                    <input class="form-control" type="text" id="email" name="email" value="{{ $sp->email }}" autofocus />
                </div>
                <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">Phone</label>
                    <input class="form-control" type="text" id="phone" name="phone" value="{{ $sp->phone }}" autofocus />
                </div>

                <div class="mb-3 col-md-6">
                    <label for="firstName" class="form-label">CNIC</label>
                    <input class="form-control" type="number" id="cnic" name="cnic" value="{{ $sp->cnic }}" autofocus />
                </div>

                <div class="mb-3 col-md-6">
                    <label for="password" class="form-label">New Password</label>
                    <input class="form-control" type="password" id="password" name="password" />
                </div>

              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
              </div>
            </form>
          </div>
          <!-- /Account -->
        </div>

      </div>
    </div>
  </div>
  <!-- / Content -->


@endsection
