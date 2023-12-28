@extends('layout.main')

    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-6 col-lg-6 col-xl-5">
              <img src="{{ asset('assets/img/bgin.png') }}"
                class="img-fluid" alt="Sample image">
            </div>

                <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                    @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if (session()->has('loginErrors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginErrors') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                        <p class="lead fw-normal mb-3 me-3">Login</p>
                    </div>

                 <form action="/login" method="post">
                @csrf

                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" name="email" id="email" class="form-control form-control-lg @error('email')is-invalid @enderror"
                    placeholder="Enter a valid email address" autofocus required value="{{ old('email') }}"/>
                  <label class="form-label" for="email">Email address</label>
                  @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                  @enderror
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" id="password" class="form-control form-control-lg"
                    placeholder="Enter password" required/>
                  <label class="form-label" for="password">Password</label>
                </div>

                <div class="text-center text-lg-start mt-2 pt-0">
                  <button type="submit" class="btn btn-lg text-light"
                    style="padding-left: 2.5rem; padding-right: 2.5rem; background-color:#2ab3c5">Login</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register"
                        class="link-danger">Register</a></p>
                </div>

              </form>
            </div>
          </div>
        </div>
      </section>
<style>
    .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}

}
</style>
@section('content')
@endsection
