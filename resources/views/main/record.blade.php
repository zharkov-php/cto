@extends('.layouts/main')

@section('content')


    <!--Appointment Page-->
    <div class="appointment-page">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Записаться к нам  </h2>
            </div>

            <!-- Service form-->
            <div class="service-form">
                <form>
                    <div class="vehicle-detail">
                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Год выпуска</h3></div>
                                <input type="number" name="v-mileage" placeholder="Год выпуска">
                            </div>

                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Марка и Модель</h3></div>
                                <input type="text" name="v-mileage" placeholder="Марка и Модель">
                            </div>

                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Пробег</h3></div>
                                <input type="number" name="v-mileage" placeholder="Пробег">
                            </div>




                        </div>
                    </div>

                    <div class="services-needed">
                        <div class="title"><h3>Выберите вид услуг</h3></div>
                        <div class="row clearfix">
                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-1">
                                    <label for="service-1">Ремонт двигателя</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-2">
                                    <label for="service-2">Ремонт ходовой сис-мы</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-3">
                                    <label for="service-3">Ремонт топливной сис-мы</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-4">
                                    <label for="service-4">Диагност. двигателя</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-5">
                                    <label for="service-5">Диагност. ходовой сис-мы</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-6">
                                    <label for="service-6">Тех-ское обслуживание</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-7">
                                    <label for="service-7">Шиномонтаж</label>
                                </div>
                            </div>
                        </div>


            </div><!--End Appointment Form-->

            <!--Contact Form-->

                    <div class="row clearfix">
                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="name" placeholder="Ваше имя">
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="email" name="email" placeholder="Ваша почта">
                        </div>

                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="telephone" placeholder="Номер телефона">
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea placeholder="Дополнительная информация"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Записаться</button>
                    </div>
                </form>

        </div>
        </div>
    </div>
    <!--End Appointment Page-->

    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h3>Вы  можете ознакомится с услугами</h3>
                <a href="/service" class="call-btn">Услуги</a>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

@endsection