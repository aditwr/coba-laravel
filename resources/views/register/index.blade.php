@extends('layouts.main')

@section('head')
    {{-- Login page style --}}
    <link rel="stylesheet" href="css/login/style.css">
@endsection

@section('container')
<div class="row justify-content-center mt-6 h-100 align-content-center px-5">
    <div class="col-md-4 mt-3">
        <main class="form-signin">
            <form class="d-block mt-3" action="/register" method="POST">
                <div class="d-flex justify-content-center mb-3">
                    <img src="https://img.icons8.com/external-bearicons-gradient-bearicons/64/000000/external-login-call-to-action-bearicons-gradient-bearicons-1.png" class="img-fluid w-25"/>
                </div>
              <h1 class="h3 mb-3 fw-normal">Register an Account</h1>
          
              <div class="form-floating mb-2">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Full name..">
                <label for="floatingInput">Name</label>
              </div>
              <div class="form-floating mb-2">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Your username..">
                <label for="floatingInput">Username</label>
              </div>
              <div class="form-floating mb-2">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
              </div>
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Confirm Password</label>
              </div>
              <button class="w-100 btn btn-lg btn-success" type="submit">Sign Up</button>
            </form>
            <small class="d-block mt-3 text-sm-center">Already have an account? <a href="/login" class="text-decoration-none text-white badge bg-primary">Sing In</a></small>
        </main>

    </div>
</div>

@endsection