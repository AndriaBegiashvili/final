@extends('layout')

@section('title', 'register')

@section('body')
    <main class="form-signin w-50 m-auto">
        <form method="POST">
          @csrf
        <h1 class="h3 mb-3 fw-normal">Please Register</h1>     
      <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
        <label for="floatingInput">Email address</label>
      </div>
      <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
        <label for="floatingPassword">Password</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
        <br>
        <a href="{{route('login')}}"> <button class="w-100 btn btn-lg btn-primary" type="submit">Login</button></a>
    </main>
@endsection 