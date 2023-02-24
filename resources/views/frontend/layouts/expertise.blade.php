@extends('frontend.layouts.app')

@section('content')

@push('style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endpush

<!-- ======= Hero Section ======= -->
@include('frontend.layouts.common.heroheader')
<!-- End Hero -->

<!-- Start #main -->
<main id="main">


    <!-- ======= Expertises Section ======= -->
    <section id="about-boxes" class="about-boxes">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Expertises</h2>
                <p>Check our Expertises</p>
            </div>
            <div class="tab-content">
                <ul class="nav nav-tabs row d-flex ">
                    @foreach ($expertises as $expertise)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <a href="{{ asset('assets/uploads/expertise/'.$expertise->image) }}"
                               data-gallery="expertiseGallery" class="portfolio-lightbox preview-link "
                               title="{{$expertise->title}}">
                                <img src="{{ asset('assets/uploads/expertise/'.$expertise->image)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4 class="text-center font-weight-bold">{{$expertise->title}}</h4>
                                    <p class="card-text px-2">{!! Str::limit(strip_tags($expertise->description), 100) !!} ...</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </ul>
            </div>
        </div>
    </section><!-- End Expertises Section -->


</main><!-- End #main -->

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
