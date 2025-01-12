@extends('template')
@section('title', 'Home')
@section('body')

    <div class="d-flex justify-content-center align-items-center">
        <div class="d-flex justify-content-center align-items-center border border-5 rounded-circle shadow pb-3 mb-3 rounded"
            style="height: 600px; width: 600px; border-color: #DC9E82 !important">
            <h1 class="text-center display-1 mx-auto fw-bold" style="color: #030027;">{{ __('login.logout') }}</h1>
        </div>
    </div>

    <script>
        // Redirect to the home page after 3 seconds
        setTimeout(function() {
            window.location.href = "{{ url('/') }}";
        }, 3000);
    </script>

@endsection
