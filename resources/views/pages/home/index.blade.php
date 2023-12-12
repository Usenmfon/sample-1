@extends('layouts.app-master')

@section('title', 'Home - Employee Management System')
@section('content')
<section class="hero-7-bg position-relative bg-gradient-primary" id="home">
    <div class="hero-7-bg-overlay"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-title">
                    <h1 class="hero-7-title">
                        <span class="text-wrapper">
                            <span class="text-light font-weight-normal">Employee Management System </span>                        </span>                    </h1>
                    <p class="text-light-70 mb-4 pb-2">
                    Employee management is the process by which employers ensure workers perform their jobs to the
                    best of their abilities so as to achieve business goals. It typically entails building and maintaining
                    healthy relationships with employees, as well as monitoring their daily labor and measuring progress.
                    In this way, employers can identify opportunities for improvement and recognize achievements.

                    </p>
                </div>
            </div>

            <div class="col-lg-5 offset-lg-1">
                <div class="hero-login-form mx-auto p-4 rounded mt-5 mt-lg-0 bg-white">
                    <div class="text-center">
                        <h5 class="form-title mb-4">A Case study of Foundation Polytechnic, Ikot Ekpene</h5>
                    </div>
                    <img src="{{ asset('images/img1.jpg') }}" alt="" class="img-fluid mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

</section>

@endsection
