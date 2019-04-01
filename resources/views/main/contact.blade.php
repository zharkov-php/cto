@extends('layouts.main')

@section('content')





    <!-- Contact Section -->
    <section class="contact-section">
        <div class="auto-container">
            <div class="sec-title text-center" id="lol">
                <h2>Напишите нам</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
            </div>


            <div id="zharkov-mob"></div>


            <div class="contact-form">
                <form method="post" action="{{route('send')}}" id="contact-form">
                    @csrf
                    @method('POST')
                                                @include('admin.errors')

                    <div class="row clearfix">
                        <div class="col-md-6 col-sm-12 col-xs-12 form-group pull-right">
                            <textarea name="message" placeholder="Сообщение" ></textarea>
                        </div>

                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="row clearfix">
                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="name" placeholder="Имя" >
                                </div>

                                <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input type="text" name="email" placeholder="Email" >
                                </div>

                                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                                    <input type="text" name="phone" placeholder="Телефон" >
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d14382.158722589205!2d30.68007179537006!3d50.414661862452725!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1z0JrQuNGX0LIsINCy0YPQuyDQnNC40LrQvtC70Lgg0KXQstC40LvRjNC-0LLQvtCz0L4gMTU!5e0!3m2!1suk!2sua!4v1539680048670" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
                                <p><strong>Телефон:</strong></p>
                                <p><strong></strong> 096 930 94 74</p>
                                <p><strong></strong> 063 533 47 74</p>
                                <p><strong>Почта:</strong><a href="#"> c.autokiev@gmail.com</a></p>
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



    <div id="zharkov"></div>

@endsection
@section('custom_scripts')
<script>

</script>

@endsection
