@extends('template')
@section('title', 'Account Maintenance')
@section('body')
@if (session('status'))
  <div class="alert alert-success text-center rounded justify-content-center" role="alert"> 
    {{ session('status') }}
  </div>
@endif

<h1 class="text-center text-white mb-2 pb-2 rounded" style="background: #030027">Account Maintenance</h1>

<div class="container-fluid p-3">
        <table class="table table-dark m-2">
            <thead>
              <tr>
                <th scope="col">{{__('maintenance.account')}}</th>
                <th scope="col">{{__('maintenance.action')}}</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                <tr>
                    <td>
                        <p>{{$u->first_name}} - {{$u->role->name}}</p>
                    </td>
                    <td class="mb-2">
                        <a href="/updateRole/{{$u->id}}" class="btn btn-danger w-25 fw-bold m-2 text-dark-center"> {{__('maintenance.update_role')}}</a>
                        <a href="/deleteAccount/{{$u->id}}" class="btn btn-danger w-25 fw-bold m-2 text-dark-center"> {{__('maintenance.delete')}}</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>

@endsection