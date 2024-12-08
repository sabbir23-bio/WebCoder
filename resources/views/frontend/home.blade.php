@extends('frontend.layout.app')

@section('custom-style')
{{-- <style>
    .title-design {
        color:red;
    }
</style> --}}
@endsection
@section('main-content')
    {{-- <div class="container-fluid">
        <h3 class="text-center title-design">{{ $page_title ?? "" }}</h3>
    </div> --}}
    <!-- Main Content Section -->
    <div id="homepageSlider" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicators -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homepageSlider" data-bs-slide-to="0" class="active" aria-current="true"></button>
            <button type="button" data-bs-target="#homepageSlider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#homepageSlider" data-bs-slide-to="2"></button>
        </div>

        <!-- Slider Items -->
        <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active">
                <img src="{{ asset('assets/banner_1.jpg') }}" class="d-block w-100" alt="Slide 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Welcome to Our Website</h5>
                    <p> {{ $banner_title1 }}</p>
                </div>
            </div>
            <!-- Slide 2 -->
            <div class="carousel-item">
                <img src="{{ asset('assets/banner_2.jpg') }}" class="d-block w-100" alt="Slide 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Services</h5>
                    <p>{{ $banner_title2 }}.</p>
                </div>
            </div>
            <!-- Slide 3 -->
            <div class="carousel-item">
                <img src="{{ asset('assets/banner_3.jpg') }}" class="d-block w-100" alt="Slide 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Join Us</h5>
                    <p>{{ $banner_title3 }}.</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#homepageSlider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homepageSlider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>



    <div class="container my-5">
        <div class="row justify-content-center">
            <!-- Apple -->
            <div class="col-4 col-md-3 mb-4">
                <img src="{{ asset('assets/apple.webp') }}" alt="Apple Certified Technician" class="img-fluid mb-2">
                <p>Certified Technician</p>
            </div>

            <!-- Dell -->
            <div class="col-4 col-md-3 mb-4">
                <img src="{{ asset('assets/dell.webp') }}" alt="Dell Authorized Service Center" class="img-fluid mb-2">
                <p>Authorized Service Center</p>
            </div>

            <!-- HP -->
            <div class="col-4 col-md-3 mb-4">
                <img src="{{ asset('assets/hp.webp') }}" alt="HP Authorized Service Center" class="img-fluid mb-2">
                <p>Authorized Service Center</p>
            </div>

            <!-- Lenovo -->
            <div class="col-4 col-md-3 mb-4">
                <img src="{{ asset('assets/lenovo.webp') }}" alt="Lenovo Authorized Service Partner" class="img-fluid mb-2">
                <p>Authorized Service Partner</p>
            </div>
        </div>
    </div>


@endsection
@section('custom-script')
<script>

</script>
@endsection
