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

        <!-- ======= Services Boxes Section ======= -->

        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Our</h2>
                <p>Services</p>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                @foreach ($services as $i => $service)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img class="card-img-top" src="{{ asset('assets/uploads/service/' . $service->image) }}" alt="Product Image">
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold text-success">{{ $service->title }}</h5>
                                <p class="card-text px-2">{!! $service->description !!}</p>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#serviceModal-{{$i}}">
                                    View Details
                                </button>
                            </div>
                        </div>

                        <div class="modal fade" id="serviceModal-{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img class="img-fluid" src="{{ asset('assets/uploads/service/' . $service->image) }}" alt="Product Image">
                                        <div>{!! $service->description !!}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


        <!-- End Services Boxes Section -->
    </main><!-- End #main -->

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
    @endpush
@endsection
