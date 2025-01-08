@extends('template')
@section('title', 'Index')
@section('body')
<div class="d-flex justify-content-center align-items-center">
    <div class=" d-flex justify-content-center align-items-center border border-5 rounded-circle shadow pb-3 mb-3 rounded" 
    style="height: 600px; width: 600px; border-color: #DC9E82 !important">
        <div class="text-center">
            <h1 class="text-center display-1 mx-auto my-auto fw-bold" style="color: #030027;">{{__('saved.title')}}</h1>
            <a href="/home">{{__('saved.link')}}</a>
        </div>
    </div>
</div>
@endsection
