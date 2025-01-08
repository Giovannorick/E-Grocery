@extends('template')
@section('title', 'Home')
@section('body')
<div class="container-fluid">
    <div class="row row-cols-5 m-5 p-5">
        @foreach ($items as $i)
            <div class="col text-center p-3">
                <img class="shadow mx-3 bg-body rounded" width="250px" height="250px" src="{{asset('storage/image/Cucumber.jpg')}}" alt="">
                <h3 class="mx-3">{{$i->item_name}}</h3>
                <a class="btn btn-outline-danger mt-2 w-50" href="/detail/{{ $i-> id }}">Details</a>
            </div>
        @endforeach
    </div>
    <div class="d-flex justify-content-center my-5">
        {{ $items->links() }}
    </div>
</div>
@endsection