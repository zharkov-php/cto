@extends('.layouts/main')

@section('content')

<button id="button"></button>
    <!--Appointment Page-->
    <div class="appointment-page">
        <div class="auto-container">
            <div class="sec-title">
                <h2>Записаться к нам  </h2>
            </div>
            <div id="zharkov-mob"></div>



            <!-- Service form-->
            <div class="service-form">
                <form action="{{route('send.record')}}" method="post">
                    @csrf
                    @method('post')
                    @include('admin.errors')

                    <div class="vehicle-detail">
                        <div class="row clearfix">
                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Год выпуска</h3></div>
                                <input type="date" name="date" placeholder="Год выпуска" >
                            </div>

                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Марка и Модель</h3></div>
                                <input type="text" name="model" placeholder="Марка и Модель" >
                            </div>

                            <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                <div class="title"><h3>Пробег</h3></div>
                                <input type="number" name="run" placeholder="Пробег" >
                            </div>




                        </div>
                    </div>

                    <div class="services-needed" >
                        <div class="title"><h3>Выберите вид услуг</h3></div>
                        <div class="row clearfix">
                            @foreach($allServices as $service)
                                <div class="form-group col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                    <div class="check-box">
                                        <input type="checkbox" name="service[]" id="service-{{$service->id}}" value="{{$service->name}}">
                                        <label for="service-{{$service->id}}">{{$service->name}}</label>
                                    </div>
                                </div>
                            @endforeach
                        </div>



            <!--Contact Form-->

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="name" placeholder="Ваше имя" >
                        </div>

                        <div class="form-group col-md-4 col-sm-6 col-xs-12">
                            <input type="text" name="email" placeholder="Ваша почта" >
                        </div>

                        <div class="form-group col-md-4 col-sm-12 col-xs-12">
                            <input type="text" name="phone" placeholder="Номер телефона">
                        </div>

                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea name="text" placeholder="Дополнительная информация"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary btn-lg">Записаться</button>

        </div>
                </form>

            </div>
    </div><!--End Appointment Form-->

    </div>
    <!--End Appointment Page-->
<div id="zharkov"></div>
    <!-- Subscribe Section -->
    <section class="subscribe-section">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <h3>Вы  можете ознакомится с услугами</h3>
                <a href="{{route('service')}}" class="call-btn">Услуги</a>
            </div>
        </div>
    </section>
    <!-- End Subscribe Section -->

@endsection