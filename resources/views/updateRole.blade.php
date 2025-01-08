@extends('template')
@section('title', 'Update Role')
@section('body')
@if (session('status'))
  <div class="alert alert-success text-center rounded justify-content-center" role="alert"> 
    {{ session('status') }}
  </div>
@endif

<div class="container-fluid text-start">
    <h2> {{__('update.name')}}</h2>
    <h1 class="fw-light m-3 text-warning">{{$user->first_name}} {{$user->last_name}}</h1>
    <h2> {{__('update.role')}}</h2>
    <h1 class="display-5 m-3 text-warning"> <u><b>{{$user->role->name}}</b></u></h1>
    <h2> {{__('update.new_role')}}</h2>
    <form action="/updateRole" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$user->id}}">
        <select class="form-select" name="role">
            <option value="1">Admin</option>
            <option value="2">User</option>
        </select>
        <div class="text-center">
            <button class="btn btn-warning m-5 w-50 text-center" type="submit">{{__('update.save')}}</button>
        </div>
        
        @if ($errors->any())
            <p>{{$errors->first()}}</p>
        @endif
    </form>
</div>

@endsection