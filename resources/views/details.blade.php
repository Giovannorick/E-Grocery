@extends('template')
@section('title', 'Product Details')
@section('body')

<h1 class="text-center text-white mb-2 pb-2 rounded" style="background: #030027">Product Details</h1>

<div class="container-fluid p-5">
    <div class="row">
        <div class="col-5">
            
            <img class="shadow mx-3 bg-body rounded" width="500px" height="500px" src="{{asset('storage/image/Cucumber.jpg')}}" alt="No Image">
        </div>
        <div class="col-6 p-5">
            <h2 class="display-1 fw-bold mb-2">{{$item->item_name}}</h2>
            <h1 class="display-5  fw-light mb-2">Rp. {{$item->price}}</h1>
            <hr>
            <h3 class="display-6 mb-3">{{$item->item_desc}}</h3>
            
            <div class="text-center p-2">
                <a href="/buy/{{$item->id}}/{{$item->price}}" class="btn btn-warning w-25 fw-bold text-center">{{__('update.buy')}}</a>
            </div>
            
        </div>
    </div>
</div>

@endsection