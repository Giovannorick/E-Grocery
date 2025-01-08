@extends('template')
@section('title', 'Login')
@section('body')
<form class="d-flex justify-content-center my-5 px-5 py-5" action="/login" method="POST">
  @csrf
    <div class="col-6 shadow p-5 mb-5 rounded" style="background: #030027">
      <h1 class="display-4 text-warning text-center fw-normal">{{__('login.title')}}</h1>
        @csrf
        <div class="mb-4">
            <label for="email" class="form-label text-warning fw-normal"> {{__('login.email')}}</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email"  value={{Cookie::get('email') != null ? Cookie::get('email') : ""}}>
        </div>
  
        <div class="mb-4">
          <label for="password" class="form-label text-warning fw-normal"> {{__('login.password')}}</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Password" value={{Cookie::get('email') != null ? Cookie::get('password') : ""}}>
        </div>
  
        <div class="mb-1 form-check">
          <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me" value="on">
          <label class="form-check-label text-warning" for="remember_me"> {{__('login.remember')}}</label>
        </div>
  
        <div class="text-center p-2">
          <button type="submit" class="btn btn-warning w-25 text-center"> {{__('login.authorize')}}</button>
        </div>

        <div class="text-center justify-content-center p-2">
            <a href="/register">{{__('login.content')}}</a>
          </div>
  
        <div class="mb-1">
          @if ($errors->any())
            <i style="color: red">{{ $errors->first() }}</i>
          @endif
        </div>
    </div>
  </form>

@endsection