@extends('template')
@section('title', 'Home')

@section('body')
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <div class="d-flex justify-content-center align-items-center">
        <div
            class="d-flex justify-content-center align-items-center border border-5 rounded-circle shadow rounded custom-border">
            <h1 class="text-center display-1 mx-auto fw-bold custom-text">{{ __('index.title') }}</h1>
        </div>
    </div>
@endsection
