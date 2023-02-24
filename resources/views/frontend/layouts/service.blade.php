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

        <!-- ======= About Boxes Section ======= -->
        <section id="about-boxes" class="about-boxes">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Our</h2>
                    <p>Services</p>
                </div>
                <div class="row">
                    @foreach ($services as $service)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <a href="{{ asset('assets/uploads/service/'.$service->image) }}"
                               data-gallery="serviceGallery" class="portfolio-lightbox preview-link "
                               title="{{$service->description}}">
                                <img src="{{ asset('assets/uploads/service/'.$service->image)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4 class="text-center font-weight-bold">{{$service->title}}</h4>
                                        <p class="card-text px-2">{!! Str::limit(strip_tags($service->description), 100) !!} ...</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
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
