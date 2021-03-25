@extends('layouts.guest')

@section('content')
<div class="login-wrapper d-flex align-items-center justify-content-center">
    <!-- Shape-->
    <div class="login-shape"><img src="/img/core-img/login.png" alt=""></div>
    <div class="login-shape2"><img src="/img/core-img/login2.png" alt=""></div>
    <div class="container">
      <!-- Login Text-->
      <div class="login-text text-center"><img class="login-img" src="/img/bg-img/12.png" alt="">
        <h3 class="mb-0">Welcome, Register Now!</h3>
        <!-- Shapes-->
        <div class="bg-shapes">
          <div class="shape1"></div>
          <div class="shape2"></div>
          <div class="shape3"></div>
          <div class="shape4"></div>
          <div class="shape5"></div>
          <div class="shape6"></div>
          <div class="shape7"></div>
          <div class="shape8"></div>
        </div>
      </div>
      <!-- Register Form-->
      <div class="register-form mt-5 px-3">
        <form action="http://demo.designing-world.com/newsten-v1.0.0/home.html" method="post">
          <div class="form-group text-left mb-4">
            <label for="username"><i class="lni lni-user"></i></label>
            <input class="form-control" id="username" type="text" name="username" placeholder="Username">
          </div>
          <div class="form-group text-left mb-4">
            <label for="email"><i class="lni lni-envelope"></i></label>
            <input class="form-control" id="email" type="email" name="email" placeholder="Email Address">
          </div>
          <div class="form-group text-left mb-4">
            <label for="password"><i class="lni lni-lock"></i></label>
            <input class="input-psswd form-control" id="registerPassword" type="password" name="password" placeholder="Password">
          </div>
          <button class="btn btn-primary btn-lg w-100">Register Now</button>
        </form>
      </div>
      <!-- Login Meta-->
      <div class="login-meta-data text-center">
        <p class="mt-3 mb-0">Already have an account?<a class="ml-2" href="login.html">Login</a></p>
      </div>
    </div>
  </div>
@endsection
