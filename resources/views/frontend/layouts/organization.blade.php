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


    <!-- ======= Team Section ======= -->

    <div class="container" data-aos="fade-up">
        <div class="section-title">
            <h2>Team</h2>
            <p>Check our Team</p>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            @foreach ($members as $i => $member)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('assets/uploads/member/' . $member->image) }}" alt="Product Image">
                        <div class="card-body">
                            <h5 class="card-title font-weight-bold  text-success">{{ $member->name }}</h5>
                            <p class="card-text px-2">{!! $member->designation !!}</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#memberModal-{{$i}}">
                                View Details
                            </button>
                        </div>
                    </div>

                    <div class="modal fade" id="memberModal-{{$i}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <img class="img-fluid" src="{{ asset('assets/uploads/member/' . $member->image) }}" alt="Product Image">
                                    <div>{!! $member->designation !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- End Team Section -->


    <!-- ======= Clients Section ======= -->
    <section id="organization" class="clients">
        <div class="container" data-aos="zoom-in">
            <div class="section-title">
                <h2>Partners</h2>
            </div>
            <div class="row">

                @foreach($organizations as $organization)
                <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                    <img src="{{ asset('assets/uploads/organization/'.$organization->image)}}" class="img-fluid" alt="">
                </div>
                @endforeach

            </div>

        </div>
    </section><!-- End Clients Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
        <div class="container" data-aos="zoom-in">

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                <div class="swiper-wrapper">
                    @foreach ($members as $member)
                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <img src="{{ asset('assets/uploads/member/'. $member->image) }}" class="testimonial-img"
                                alt="">
                            <h3>{{$member->name}}</h3>
                            <h4>{{$member->designation}}</h4>
                            <p>
                                <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                {{$member->message}}
                                <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                            </p>
                        </div>
                    </div><!-- End testimonial item -->
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section><!-- End Testimonials Section -->

</main><!-- End #main -->

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    flatpickr("input[type=datetime-local]");
</script>
@endpush
@endsection
