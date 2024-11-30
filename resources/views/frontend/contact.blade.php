@extends('frontend.layout.app')

@section('custom-style')
<style>
    .title-design {
        color:green;
    }
</style>
@endsection
@section('main-content')
{{--
    <div class="container-fluid">
        <h3 class="text-center title-design">{{ $page_title }}</h3>
    </div> --}}
    <div class="image-container position-relative">
        <img src="{{ asset('assets/AboutUs_banner.jpg') }}" class="d-block w-100" alt="About Us Banner">
        <div class="text-overlay">
            <h3 class="text-center">{{ $page_title }}</h3>
        </div>
    </div>
 <!-- Main Content Section -->



    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-6 p-4 bg-light border rounded shadow">
                <h3 class="text-center">Welcome To Contact Us Page</h3>
                <p class="text-center">
                    This is a simple col-6 box with text inside. You can add more content or customize it as needed.
                </p>
            </div>
        </div>
    </div>

    @endsection
    @section('custom-script')
    <script>

    </script>
    @endsection
