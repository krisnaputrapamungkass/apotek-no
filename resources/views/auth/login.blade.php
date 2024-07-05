@extends('auth.partials.master')
@section('content')
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="row w-100 m-0">
                    <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
                        <div class="card col-lg-4 mx-auto">
                            <div class="card-body px-5 py-5">
                                <h3 class="card-title text-left mb-3">Login</h3>
                                <form action="{{ route('login_check') }}" method="post" class="pt-3">
                                  @csrf
                                  <div class="form-group">
                                      <input type="email" class="form-control" name="email" id="email"
                                          placeholder="Masukkan Email" value="{{ old('email') }}">
                                  </div>
                                  <div class="form-group">
                                      <input type="password" class="form-control" name="password" id="password"
                                          placeholder="Masukkan Password">
                                  </div>
                                  <div class="mt-3">
                                      <input type="submit" class="btn btn-primary" value="Login">
                                  </div>
                                  <div class="my-2 d-flex justify-content-between align-items-center">
                                      <a href="#" class="auth-link text-black">Forgot password?</a>
                                  </div>
                                  <div class="text-center mt-4 font-weight-light">
                                      Don't have an account? <a href="{{ route('register') }}" class="text-primary">Create</a>
                                  </div>
                              </form>
                            </div>
                        </div>
                    </div>
                    <!-- content-wrapper ends -->
                </div>
                <!-- row ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
    @endsection
