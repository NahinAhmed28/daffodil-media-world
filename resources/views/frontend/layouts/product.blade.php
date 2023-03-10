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
        <!-- ======= Product Section ======= -->
        <section id="about-boxes" class="about-boxes" style="background: white!important;">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <div class="row">
                        <div class="col-md-6">
                            <h2>Our</h2>
                            <p>Products</p></div>
                        <div class="col-md-6 text-end">
                            <div class="input-group">
                              @if( request()->is('front/product*'))
                                    <form action="{{ route('front.searchProduct') }}" method="GET">
                                        <input type="text" class="border border-4 border-success rounded"
                                               placeholder="Search Products" name="search" aria-label="search" required/>
                                        <button type="submit" class="btn btn-outline-primary">Search</button>
                                    </form>
                              @else()
                              @endif

                            </div>
                        </div>
                    </div>

                </div>


                <div class="row ">
                    @foreach ($products as $product)

                        <div class="col-lg-4 col-md-6 portfolio-item filter-app ">
                            <a href=""
                               data-gallery="productGallery" class="portfolio-lightbox preview-link text-dark"
                               title="{{$product->description}}">
                                <img src="{{ asset('assets/uploads/product/'.$product->image)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4 class="text-center font-weight-bold">{{$product->title}}</h4>
                                    <p class="card-text px-2">{!! Str::limit(strip_tags($product->description), 100) !!} ...</p>
                                    <p class="card-text"><strong>Model:</strong>  {!!$product->model!!}</p>
                                    <p class="card-text"><strong>Category:</strong> {!!$product->category!!}</p>
                                    <p class="card-text"><strong>Brand:</strong> {!!$product->brand!!}</p>
                                    <p class="card-text"><strong>Manufacturer:</strong> {!!$product->manufacturer!!}</p>
                                    <p class="card-text"><strong>Origin:</strong> {!!$product->origin!!}</p>
                                    <p class="card-text"><strong>Status:</strong> {!!$product->status= 1 ? 'Available' :'Not Available'  !!}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Product Section -->
    </main><!-- End #main -->

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
@endsection
