@extends('frontend.layouts.app')

@section('content')

    @push('style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    @endpush

    <!-- ======= Hero Section ======= -->
    @include('frontend.layouts.common.hero')
    <!-- End Hero -->

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
                                        <span data-purecounter-start="0" data-purecounter-end="{{$timeline->clients}}" data-purecounter-duration="1" class="purecounter"></span>
                                        <p>Happy Clients</p>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
                                    <div class="count-box">
                                        <i class="bi bi-journal-richtext"></i>
                                        <span data-purecounter-start="0" data-purecounter-end="{{$timeline->projects}}" data-purecounter-duration="1" class="purecounter"></span>
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
                        {{--                    <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="glightbox play-btn mb-4"></a>--}}
                    </div>

                    <div class="col-lg-6 mt-5 pt-3 pt-lg-0 content">
                        <h3>About Us</h3>
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
                            <img src="{{ asset('assets/uploads/mission/'.$mission->image)}}" class="card-img-top" alt="...">
                            <div class="card-icon">
                                <i class="ri-brush-4-line"></i>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><a href="">Our Mission</a></h5>
                                <p class="card-text">{!!$mission->description!!}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                        <div class="card">
                            <img src="{{ asset('assets/uploads/plan/'.$plan->image)}}" class="card-img-top" alt="...">
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
                            <img src="{{ asset('assets/uploads/vision/'.$vision->image)}}" class="card-img-top" alt="...">
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

        <!-- ======= Clients and Organization Section ======= -->
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
        </section><!-- End Clients and Organization Section -->

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

        <!-- ======= Services Boxes Section ======= -->
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

        <!-- ======= Product Section ======= -->
        <section id="about-boxes" class="about-boxes">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Our</h2>
                    <p>Products</p>
                </div>
                <div class="row">
                    @foreach ($products as $product)
                        {{--                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">--}}
                        {{--                            <div class="card">--}}
                        {{--                                <img src="{{ asset('assets/uploads/product/'.$product->image)}}" class="card-img-top"--}}
                        {{--                                     alt="...">--}}
                        {{--                                <div class="card-icon">--}}
                        {{--                                    <i class="ri-brush-4-line"></i>--}}
                        {{--                                </div>--}}
                        {{--                                <div class="card-body">--}}
                        {{--                                    <h5 class="card-title"><a href="">{!!$product->title!!}</a></h5>--}}
                        {{--                                    <p class="card-text">{!!$product->description!!}</p>--}}
                        {{--                                    <p class="card-text"><strong>Model:</strong>  {!!$product->model!!}</p>--}}
                        {{--                                    <p class="card-text"><strong>Category:</strong> {!!$product->category!!}</p>--}}
                        {{--                                    <p class="card-text"><strong>Stock:</strong> {!!$product->stock!!}</p>--}}
                        {{--                                </div>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}


                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <a href="{{ asset('assets/uploads/product/'.$product->image) }}"
                               data-gallery="productGallery" class="portfolio-lightbox preview-link ">
                                <img src="{{ asset('assets/uploads/product/'.$product->image)}}" class="img-fluid" alt="">
                                <div class="portfolio-info">

                                    <h4 class="text-center font-weight-bold">{{$product->title}}</h4>

                                    <p class="card-text px-2">{!!$product->description!!}</p>
                                    <p class="card-text"><strong>Model:</strong>  {!!$product->model!!}</p>
                                    <p class="card-text"><strong>Category:</strong> {!!$product->category!!}</p>
                                    <p class="card-text"><strong>Stock:</strong> {!!$product->stock!!}</p>

                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Product Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Check our Gallery</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('assets/uploads/gallery/'.$gallery->image)}}" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>{{$gallery->category}}</h4>
                                <a href="{{ asset('assets/uploads/gallery/'.$gallery->image) }}"
                                   data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$gallery->category}}"><i
                                        class="bx bx-zoom-in"></i></a>
                                {{--                            <a href="portfolio-details.html" class="details-link" title="More Details"><i--}}
                                {{--                                    class="bx bx-link"></i></a>--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section><!-- End Gallery Section -->


        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Check our Team</p>
                </div>

                <div class="row">

                    @foreach ($members as $member)
                        <div class="col-lg-4 col-md-6">
                            <div class="member" data-aos="fade-up" data-aos-delay="100">
                                <div class="pic"><img src="{{ asset('assets/uploads/member/'. $member->image) }}"
                                                      class="img-fluid" alt=""></div>
                                <div class="member-info">
                                    <h4>{{$member->name}}</h4>
                                    <span>{{$member->designation}}</span>
                                    <div class="social">
                                        <a href=""><i class="bi bi-twitter"></i></a>
                                        <a href=""><i class="bi bi-facebook"></i></a>
                                        <a href=""><i class="bi bi-instagram"></i></a>
                                        <a href=""><i class="bi bi-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class=" section-title">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">
                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-12">
                                <div class="info-box row">
                                    <div class="col-md-6">
                                        <i class="bx bx-map"></i>
                                        <h3>Our Address</h3>
                                        <p class="pb-2">Room: 9050-52, 8th Floor, MBA Building <br>
                                            Faculty of Business Studies <br>
                                            <strong>University of Dhaka</strong>  </p>
                                    </div>
                                    <div class="col-md-6 ">
                                        <div class="social-links mt-4">
                                            <a href="#" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                                            <a href="#" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a>  <br>
                                            <a href="#" target="_blank" class="google-plus"><i class="bx bxl-skype"></i></a>
                                            <a href="#" target="_blank" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="pt-2 " id="map" style='height:400px'></div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <form action="{{route('front.contactStore')}}" method="post" role="form" >
                            @csrf
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                           required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                           placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="address" id="address" placeholder="address"
                                       required>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="phone" id="phone" placeholder="phone"
                                       required>
                            </div>
                            <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                      required></textarea>
                            </div>
                            @include('sweetalert::alert')
                            <div class="my-3">
                                <div class="text-center"><button type="submit" class="btn btn-warning">Send Message</button></div>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
        <script>
            flatpickr("input[type=datetime-local]");
        </script>
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCw3JG8x31XxAZ1XBO4Szy_OdDp8qCMs28&callback=initMap"></script>
        <script src="https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js"></script>

        <script>

            function initMap() {
                const map = new google.maps.Map(document.getElementById("map"), {
                    zoom: 18,
                    center: {  lat: 23.735708, lng: 90.392929 },
                });

                marker = new google.maps.Marker({
                    map,
                    draggable: true,
                    animation: google.maps.Animation.DROP,
                    position: {  lat: 23.735708, lng: 90.392929 },
                });
                marker.addListener("click", toggleBounce);
            }

            function toggleBounce() {
                if (marker.getAnimation() !== null) {
                    marker.setAnimation(null);
                } else {
                    marker.setAnimation(google.maps.Animation.BOUNCE);
                }
            }

            window.initMap = initMap;

        </script>
    @endpush
@endsection
