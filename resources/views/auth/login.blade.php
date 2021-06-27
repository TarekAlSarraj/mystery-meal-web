@extends('layouts.app')

@section('content')

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image">
                    <img src="/img/mystery_meal_new.png" alt="" height="300" width="300">
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">

                            <div class="text-center">

                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form class="user" method="POST" action="{{ route('login') }}">
                            @csrf

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user @error('username') is-invalid @enderror"
                                        id="username" name="username" value="{{ old('username') }}"
                                        placeholder="Enter Username..." required autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>


                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                        id="password" name="password"
                                        placeholder="Enter Password..."required autocomplete="current-password" >

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>






                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>


                            </form>
                            <hr>
                          

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>













@endsection
