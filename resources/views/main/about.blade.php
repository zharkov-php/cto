@extends('.layouts/main')

@section('content')



    <!-- About Us -->
    <section class="about-us">
        <div class="auto-container">
            <div class="row clearfix">
                <!-- Content Column -->
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <h2>О нас </h2>
                    <h4>Repair and Car Service</h4>
                    <div class="primary-text">Мы более 10 лет на рынке услуг  по  ремонту и техническому обслуживанию автотранспорта. У нас работаю мастера у которых более 5 лет опыта работы в сфере ремонта и технического обслуживания автотранспорта.</div>
                    <div class="text">Работаем как с корпоративными клиентами, так и с частными лицами. </div>
                    <div class="text">Индивидуальный подход к каждому клиенту.</div>
                    <div class="text">У нас гибкая система скидок на работы и материалы.</div>
                    <ul class="list-style-one clearfix">

                        <li>Капитальный ремонт двигателя</li>
                        <li>Ремонт ходовой системы</li>
                        <li>Ремонт топливной системы</li>
                        <li>Техническое обслуживание</li>
                        <li>Диагностика</li>
                        <li>Шиномонтаж</li>
                    </ul>
                </div>

                <!-- Image Column -->
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image-box">
                        <a href="/about"><img src="/main_template/images/main-slider/bmw_m5_merc_e63_01.jpg" alt=""></a>
                    </div>

                    <div class="image-box">
                        <a href="/about"><img src="/main_template/images/main-slider/bmw_m5_merc_e63_01.jpg" alt=""></a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->



    <!--Clients Section-->
    <section class="clients-section alternate">
        <div class="auto-container">
            <div class="sponsors-outer">
                <!--Sponsors Carousel-->
                <ul class="sponsors-carousel owl-carousel owl-theme">
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/1.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/2.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/3.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/4.png" alt=""></a></figure></li>
                    <li class="slide-item"><figure class="image-box"><a href="#"><img src="images/clients/5.png" alt=""></a></figure></li>
                </ul>
            </div>
        </div>
    </section>
    <!--End Clients Section-->

    <!--Page Title-->
    <section class="page-title" style="background-image:url(/main_template/images/background/2018-bmw-m5-first-drive.jpg);">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <ul class="bread-crumb clearfix">
                    <div class="btn-box">
                        <a href="#" class="theme-btn btn-style-one">Записаться на станцию</a>
                    </div>
                </ul>
            </div>
        </div>
    </section>
    <!--End Page Title-->
@endsection
