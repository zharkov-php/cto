@extends('.layouts/main')

@section('content')


    <!--Appointment Page-->
    <div class="appointment-page">
        <div class="auto-container">
            <div class="sec-title">
                <h2>К нам лучше не записываться </h2>
                <p>Мы ничего не умеем!!!</p>
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
                                    <label for="service-1">Диагностика </label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-2">
                                    <label for="service-2">Ремонт ходовой</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-3">
                                    <label for="service-3">Ремонт двигателя</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-4">
                                    <label for="service-4">Замена масла</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-5">
                                    <label for="service-5">Подмена деталей на старые</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-6">
                                    <label for="service-6">Установка взрывчатки</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-7">
                                    <label for="service-7">Отмывка денег</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-8">
                                    <label for="service-8">Диагностика 7</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-9">
                                    <label for="service-9">Диагностика 8</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-10">
                                    <label for="service-10">Диагностика 9</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-11">
                                    <label for="service-11">Диагностика 10</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-12">
                                    <label for="service-12">Диагностика 11</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-13">
                                    <label for="service-13">Диагностика 12</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                <div class="check-box">
                                    <input type="checkbox" name="shipping-option" id="service-14">
                                    <label for="service-14">Другое</label>
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