@extends('frontend.layouts.app')

@section('content')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush


@include('frontend.layouts.common.heroheader')
<!-- Start #main -->
<main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <div class="row">

                <div class="row justify-content-end">
                    <div class="col-lg-11">
                        <div class="row justify-content-end">

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-emoji-smile"></i>
                                    <div class="row">
                                        <div class="col-md-4 text-left pr-0">
                                            <span style="white-space: normal;" data-purecounter-start="0" data-purecounter-end="{{$timeline->projects}}" data-purecounter-duration="1" class="purecounter ml-0 "></span>
                                        </div>
                                        <div class="col-md-8 text-left pl-0">
                                            <span class="ml-0 ">+</span>
                                        </div>
                                    </div>                                    <p>Happy Clients</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-journal-richtext"></i>
                                    <div class="row">
                                        <div class="col-md-4 text-left pr-0">
                                            <span style="white-space: normal;" data-purecounter-start="0" data-purecounter-end="{{$timeline->projects}}" data-purecounter-duration="1" class="purecounter ml-0 "></span>
                                        </div>
                                        <div class="col-md-8 text-left pl-0">
                                            <span class="ml-0 ">+</span>
                                        </div>
                                    </div>
                                    <p>Projects</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-clock"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{$timeline->experience}}" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Years of experience</p>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                <div class="count-box">
                                    <i class="bi bi-award"></i>
                                    <span data-purecounter-start="0" data-purecounter-end="{{$timeline->awards}}" data-purecounter-duration="1" class="purecounter"></span>
                                    <p>Awards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 video-box align-self-baseline" data-aos="zoom-in" data-aos-delay="100">


                    <img src="{{ asset('assets/uploads/about/'.$about->image)}}" class="img-fluid mt-5" alt="">
                                        <a href="https://www.youtube.com/watch?v=miOD55GGEWA" class="glightbox play-btn mb-4"></a>
                </div>
                <div class="col-md-6 pt-3 pt-lg-0 content">
                    <p class="fst-italic">
                        {!!$about->description!!}
                    </p>
                </div>

            </div>

        </div>
    </section><!-- End About Section -->

    <!-- ======= About Boxes Section ======= -->
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/mission/'.$mission->image) }}" class="card-img-top"
                            alt="...">
                        <div class="card-icon">
                            <i class="ri-brush-4-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Mission</a></h5>
                            <p class="card-text"> {!!$mission->description!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/plan/'.$plan->image) }}" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-calendar-check-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Plan</a></h5>
                            <p class="card-text">{!!$plan->description!!}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
                    <div class="card">
                        <img src="{{ asset('assets/uploads/vision/'.$vision->image) }}" class="card-img-top" alt="...">
                        <div class="card-icon">
                            <i class="ri-movie-2-line"></i>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><a href="">Our Vision</a></h5>
                            <p class="card-text">{!!$vision->description!!}</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End About Boxes Section -->


</main><!-- End #main -->

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
