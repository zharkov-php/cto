@extends('.layouts/main')

@section('content')





    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Напишите нам</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>

            <div class="contact-form">
                <form method="post" action="/" id="contact-form">
                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group pull-right">
                            <textarea name="message" placeholder="Сообщение"></textarea>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="name" placeholder="Имя" required="">
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email" required="">
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="phone" placeholder="Телефон" required="">
                                </div>


                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <button type="submit" name="submit-form">Отправить</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>

            <div class="contact-info">
                <div class="row clearfix">
                    <div class="image-column col-md-8 col-sm-12 col-xs-12">
                        <figure><img src="/main_template/images/main-slider/bmw_m5_merc_e63_01.jpg" alt=""></figure>
                    </div>

                    <div class="info-column col-md-4 col-sm-12 col-xs-12">
                        <h3>Контакты</h3>
                        <ul>
                            <li>
                                <span class="icon flaticon-placeholder"></span>
                                <p><strong>Aдрес:</strong><br>Київ, вул Миколи Хвильового 15</p>
                            </li>

                            <li>
                                <span class="icon flaticon-phone"></span>
                                <p><strong>Телефон:</strong>096 930 94 74</p>
                                <p><span>Почта:</span><a href="#">pictehno@ukr.net</a></p>
                            </li>

                            <li>
                                <span class="icon flaticon-stopwatch"></span>
                                <p><strong>Время работы: </strong><br> С 09:00 – 19:00 </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section -->

    <!-- Contact Map Section -->
    <section class="contact-map-section">
        <!--Map Outer-->
        <div class="map-outer">
            <!--Map Canvas-->
            <div class="map-canvas"
                 data-zoom="12"
                 data-lat="50.503826"
                 data-lng="30.455552"
                 data-type="roadmap"
                 data-hue="#ffc400"
                 data-title="Envato"
                 data-icon-path="images/icons/map-marker.png"
                 data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
            </div>
        </div>
    </section>
    <!-- End Map Section -->


@endsection
