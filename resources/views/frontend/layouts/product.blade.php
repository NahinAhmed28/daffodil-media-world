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
        <!-- ======= Products Boxes Section ======= -->

        <!-- =======model test Products Boxes Section ======= -->

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Our</h2>
                <p>Products</p>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                @foreach ($products as $i => $product)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/uploads/product/' . $product->image) }}" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-success">{{ $product->title }}</h5>
                                <p class="card-text px-2">{!! Str::limit(strip_tags($product->description), 99) !!} ...</p>
                                <p class="card-text"><strong>Model:</strong>  {!!$product->model!!}</p>
                                <p class="card-text"><strong>Category:</strong> {!!$product->category!!}</p>
                                <p class="card-text"><strong>Brand:</strong> {!!$product->brand!!}</p>
                                <p class="card-text"><strong>Manufacturer:</strong> {!!$product->manufacturer!!}</p>
                                <p class="card-text"><strong>Origin:</strong> {!!$product->origin!!}</p>
                                <p class="card-text"><strong>Status:</strong> {!!$product->status= 1 ? 'Available' :'Not Available'  !!}</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#productModal-{{$i}}">
                                    View Details
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="productModal-{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="{{ asset('assets/uploads/product/' . $product->image) }}" alt="Product Image">
                                        <div>{!! $product->description !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- End Products Boxes Section -->
    </main><!-- End #main -->

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
@endsection
