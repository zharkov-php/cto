@extends('.layouts/main')

@section('content')



    <!-- Services Section -->
    <section class="services-page-section">
        <div class="auto-container">
            <div class="row clearfix">

            @foreach ($services as $service)
                <!-- Service Block -->
                <div class="service-block col-md-4 col-sm-6 col-xs-12">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure><img src="{{$service->getImage()}}" alt=""></figure>
                            <div class="title"><h4>{{$service->name}}</h4></div>
                        </div>
                        <div class="caption-box">
                            <div class="title-box">
                                <span class="icon flaticon-cogwheel"></span>
                                <h4>{{$service->name}}</h4>
                            </div>
                            <p>{{$service->title}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
                <div id="zharkov-mob"></div>

            </div>
            <div id="zharkov"></div>
          {{--  <!-- Styled Pagination -->
            <div class="styled-pagination text-center clearfix">
                <ul class="clearfix">
                    <li><a href="#" class="active">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a class="next" href="#"><span class="fa fa-angle-right"></span></a></li>
                </ul>
            </div>--}}
        </div>
    </section>
    <!-- End Services Section -->


    <!--Clients Section-->
   {{-- <section class="clients-section alternate">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-6.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-1.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-2.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-3.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-4.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-5.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-1.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-2.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-3.jpg" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="/main_template/images/resource/service-6.jpg" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>--}}
    <!--End Clients Section-->

@endsection