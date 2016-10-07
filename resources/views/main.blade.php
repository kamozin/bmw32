@extends('app')



@section('content')

    <section class="right-block" >
        <div class="right-header">

            <div class="ekran-bg">



            </div>

            <div class="car"></div>



        </div>

        <section class="nabor">
            <div class="left-nabor">
                <img src="/includes/img/sovetskiy.png" height="74" width="472">

            </div>

            <div class="right-nabor">
                <img src="/includes/img/bezhitskiy.png" height="74" width="472">


            </div>
        </section>


        <section class="advantages">

            <h1>Наши преимущества</h1>

            <div class="advantages-top">
                <section class="top-adv">
                    <div class="advantages-item" >

                        <div class="col-4 oplata">




                        </div>
                        <div class="text-item">Оплата обучения в рассрочку</div>
                    </div>

                    <div class="advantages-item">
                        <div class=" col-4 avtopark">


                        </div>
                        <div class="text-item">Современный автопарк</div>

                    </div>


                    <div class="advantages-item">
                        <div class="col-4 instrucktors">


                        </div>

                        <div class="text-item">Профессиональные инструкторы и преподаватели</div>
                    </div>
                </section>
            </div>

            <div class="advantages-bottom">
                <div class="advantages-item">
                    <div class="col-4 avtodrom">


                    </div>
                    <div class="text-item">Наш автодром располагается в центре города</div>


                </div>

                <div class="advantages-item">
                    <div class="col-4 teachers">


                    </div>
                    <div class="text-item">Индивидуальный подход к каждому ученику</div>
                </div>

                <div class="advantages-item">

                    <div class="col-4 gibdd">

                    </div>
                    <div class="text-item">Организованная сдача экзаменнов в ГИБДД</div>
                </div>


                <div class="advantages-item">
                    <div class="col-4 support">


                    </div>
                    <div class="text-item">Мы с Вами с начала обучения до получения водительского удостоверения</div>
                </div>


            </div>



        </section>


        <section class="main-content">

            {!! $page->text !!}

        </section>


    </section>



    @stop