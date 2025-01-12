@extends('template')
@section('title', 'My Profile')
@section('body')
    @if (session('status'))
        <div class="alert alert-success text-center rounded justify-content-center" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <h1 class="text-center text-white mb-2 pb-2 rounded" style="background: #030027">Update Profile</h1>

    <div class="container-fluid p-3">
        <div class="row m-5 shadow p-5 mb-3 rounded" style="background: #030027">
            <div class="col-4 shadow p-5 mb-3 rounded" style="background: #030027">
                <div class="text-center">
                    <img class="shadow mx-3 bg-body rounded" width="360px"
                        src="{{ asset('storage/image/Profile/' . $user->display_picture_link) }}" alt="Error">
                </div>
            </div>
            <form class="col m-5" action="/updateProfile" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-2">
                            <label for="first_name"
                                class="form-label text-warning fw-normal">{{ __('register.first_name') }}</label>
                            <input type="text" class="form-control w-100" id="first_name" name="first_name"
                                value="{{ $user->first_name }}">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label text-warning fw-normal">
                                {{ __('register.email') }}</label>
                            <input type="text" class="form-control w-100" id="email" name="email"
                                placeholder="Email" value="{{ $user->email }}">
                        </div>
                        <div class="mt-4">
                            <label for="gender" name="gender" class="form-label text-warning fw-normal d-flex row">
                                {{ __('register.gender') }}</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                                    value="1">
                                <label class="form-check-label text-white"
                                    for="inlineRadio1">{{ __('register.man') }}</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                                    value="2">
                                <label class="form-check-label text-white" for="inlineRadio2">
                                    {{ __('register.woman') }}</label>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="password"
                                class="form-label text-warning fw-normal">{{ __('register.password') }}</label>
                            <input type="password" class="form-control" id="password" name="password"
                                value="{{ $user->password }}">
                        </div>

                    </div>
                    <div class="col">
                        <div class="mb-2">
                            <label for="last_name" class="form-label text-warning fw-normal">
                                {{ __('register.last_name') }}</label>
                            <input type="text" class="form-control w-100" id="last_name" name="last_name"
                                value="{{ $user->last_name }}">
                        </div>
                        <div class="mb-2">
                            <label for="role" class="form-label text-warning fw-normal">
                                {{ __('register.role') }}</label>
                            <select class="form-select form-control" name="role" id="role"
                                aria-label="Disabled input example" disabled readonly style="width:350px;">
                                @if ($user->role_id == 1)
                                    <option value="1">Admin</option>
                                @else
                                    <option value="2">User</option>
                                @endif
                            </select>
                        </div>
                        <div class="mb-2">
                            <label for="display_picture" class="form-label text-warning fw-normal">
                                {{ __('register.picture') }}</label>
                            <input type="file" class="form-control w-100" id="display_picture" name="display_picture"
                                value="{{ $user->display_picture_link }}">
                        </div>
                        <div class="mb-2">
                            <label for="confirm_password" class="form-label text-warning fw-normal">
                                {{ __('register.confirm_password') }}</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password"
                                value="{{ $user->password }}">
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-warning w-50 text-center"> {{ __('register.update') }}</button>
                </div>

                @if ($errors->any())
                    <b class="my-3" style="color: red">{{ $errors->first() }}</b>
                @endif
            </form>
        </div>
    </div>
@endsection
