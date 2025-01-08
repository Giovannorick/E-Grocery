@extends('template')
@section('title', 'Register')
@section('body')

@if (session('status'))
  <div class="alert alert-success text-center rounded justify-content-center" role="alert"> 
    {{ session('status') }}
  </div>
@endif

<form class="d-flex justify-content-center my-3 px-3 py-3" action="/register" enctype="multipart/form-data" method="POST">
  <div class="col-6 shadow p-5 mb-3 rounded" style="background: #030027">
    @csrf
      <h1 class="display-4 text-warning text-center fw-normal">{{__('register.title')}}</h1>
      <div class="d-flex flex-nowrap align-items-start justify-content-center flex-row mb-2">
        <div class="order-1 p-2 ">
            <label for="first_name" class="form-label text-warning fw-normal">{{__('register.first_name')}}</label>
            <input type="text" class="form-control w-100" id="first_name" name="first_name" placeholder="First Name">
            
            @if ($errors->has('first_name'))
                @foreach ($errors->get('first_name') as $error)
                    <div id="validateFirstName" class="form-text" style="color: red">{{ $error }}</div>
                @endforeach
            @endif
        </div>

        <div class="order-2 p-2">
            <label for="last_name" class="form-label text-warning fw-normal">{{__('register.last_name')}}</label>
            <input type="text" class="form-control w-100" id="last_name" name="last_name" placeholder="Last Name">
            
              @if ($errors->has('last_name'))
                @foreach ($errors->get('last_name') as $error)
                    <div id="validateLastName" class="form-text" style="color: red">{{ $error }}</div>
                @endforeach
              @endif
        </div>
      </div>

      <div class="d-flex flex-nowrap align-items-start justify-content-center flex-row mb-2">
        <div class="order-1 p-2 ">
            <label for="email" class="form-label text-warning fw-normal">{{__('register.email')}}</label>
            <input type="text" class="form-control w-100" id="email" name="email" placeholder="Email">
            
            @if ($errors->has('email'))
                @foreach ($errors->get('email') as $error)
                    <div id="validateEmail" class="form-text" style="color: red">{{ $error }}</div>
                @endforeach
            @endif
        </div>

        <div class="order-2 p-2">
          <label for="role" class="form-label text-warning fw-normal">{{__('register.role')}}</label>
          <select class="form-select form-control" name="role" id="role" style="width:200px;">
                <option selected></option>
                <option value="1">Admin</option>
                <option value="2">User</option>
          </select>
        </div>
      </div>

      <div class="d-flex flex-nowrap align-items-start justify-content-center flex-row mb-2">
            <div class="order-1 ps-5 ms-5">
              <div class="d-flex ps-3">
                <label for="gender" name="gender" class="form-label text-warning fw-normal">{{__('register.gender')}}</label>
              </div>
              
              <div class="d-flex ps-3">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="1">
                  <label class="form-check-label text-white" for="inlineRadio1">{{__('register.man')}}</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="2">
                  <label class="form-check-label text-white" for="inlineRadio2">{{__('register.woman')}}</label>
                </div>
              </div>
            </div>

            <div class="order-2 px-4 mx-4">
              <label for="image" class="form-label text-warning fw-normal">{{__('register.picture')}}</label>
                  <input class="form-control w-75" type="file" id="display_picture" name="display_picture">
              
                  @if ($errors->has('display_picture'))
                      @foreach ($errors->get('display_picture') as $error)
                          <div id="validateImage" class="form-text" style="color: red">{{ $error }}</div>
                      @endforeach
                  @endif
            </div>
      </div>

        <div class="d-flex flex-nowrap align-items-start justify-content-center flex-row mb-2">
          <div class="order-1 p-2 ">
              <label for="password" class="form-label text-warning fw-normal">{{__('register.password')}}</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">

              @if ($errors->has('password'))
                @foreach ($errors->get('password') as $error)
                    <div id="validatePass" class="form-text" style="color: red">{{ $error }}</div>
                @endforeach
              @endif
          </div>

        <div class="order-2 p-2">
          <label for="confirm_password" class="form-label text-warning fw-normal">{{__('register.confirm_password')}}</label>
          <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm Password">

          @if ($errors->has('confirm_password'))
            @foreach ($errors->get('confirm_password') as $error)
                <div id="validateConfirmPass" class="form-text" style="color: red">{{ $error }}</div>
            @endforeach
          @endif
        </div>
    </div>

    <div class="text-center p-2">
      <button type="submit" class="btn btn-warning w-25 text-center">{{__('register.registration')}}</button>
    </div>

    <div class="text-center justify-content-center p-2">
      <a href="/login">{{__('register.content')}}</a>
    </div>
  </div>
</form>  
@endsection