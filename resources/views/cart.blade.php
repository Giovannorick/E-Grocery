@extends('template')
@section('title', 'My Carts')
@section('body')
@if (session('status'))
  <div class="alert alert-success text-center rounded justify-content-center" role="alert"> 
    {{ session('status') }}
  </div>
@endif



<h1 class="text-center text-white mb-2 pb-2 rounded" style="background: #030027">My Carts</h1>

<table class="table table-dark my-3">
    <thead>
      <tr>
        <th scope="col">{{__('cart.image')}}</th>
        <th scope="col">{{__('cart.name')}}</th>
        <th scope="col">{{__('cart.price')}}</th>
        <th scope="col">{{__('cart.action')}}</th>
      </tr>
    </thead>
    <tbody>
        @php
            $price = 0;
        @endphp
        @foreach ($order as $o)
        <tr>
            <td>
                <img class="shadow mx-3 bg-body rounded" width="250px" height="250px" src="{{asset('storage/image/Cucumber.jpg')}}" alt="No Image">
            </td>
            <td>
                <h4>{{$o->item->item_name}}</h4>
            </td>
            <td>
                <h6 class="">{{$o->item->price}}</h6>
            </td>
            <td>
                <a href="/delete/{{$o->id}}" class="btn btn-danger w-50 fw-bold text-dark-center">{{__('cart.delete')}}</a>
            </td>
        </tr>
        @php 
            $price+=$o->item->price;
        @endphp
        @endforeach
        <tr>
            <td colspan="3" class="fw-bold"><h4>Total: {{$price}}</h4></td>
            <td>
                <a href="/checkout" class="btn btn-warning w-50 fw-bold text-center">{{__('cart.checkout')}}</a>
            </td>
        </tr>
    </tbody>
</table>

@endsection