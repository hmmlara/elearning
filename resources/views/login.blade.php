@extends('layouts.home')

@section('content')
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" style="margin-top: 80px;" data-wow-delay="0.3s">
                    <form action="{{route('login.User')}}"" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <h6 class="section-title bg-white text-start text-primary pe-3">Log in</h6>
                                <h1 class="mb-4">Welcome to eLEARNING</h1>
                                <div class="" style="max-width: 300px;">
                                    <input class="form-control border-2 w-60 py-3 ps-3 pe-4" type="text" placeholder="Email" name="email">
                                </div>
                                <div class="mt-3" style="max-width: 300px;">
                                    <input class="form-control border-2 w-60 py-3 ps-3 pe-4" type="password" placeholder="Password" name="password">
                                </div>
                                <button class="btn btn-primary py-3 px-5 mt-3">Login</button>
                                <p class="mt-1">Don't have an account? <a href="{{route('register')}}"> Register</a></p>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
@endsection