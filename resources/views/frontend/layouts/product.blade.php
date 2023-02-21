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
                    @foreach ($products as $product)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                            <div class="card">
                                <img src="{{ asset('assets/uploads/product/'.$product->image)}}" class="card-img-top"
                                     alt="...">
                                <div class="card-icon">
                                    <i class="ri-brush-4-line"></i>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title"><a href="">{!!$product->title!!}</a></h5>
                                    <p class="card-text">{!!$product->description!!}</p>
                                    <p class="card-text"><strong>Model:</strong>  {!!$product->model!!}</p>
                                    <p class="card-text"><strong>Category:</strong> {!!$product->category!!}</p>
                                    <p class="card-text"><strong>Stock:</strong> {!!$product->stock!!}</p>
                                </div>
                            </div>
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
