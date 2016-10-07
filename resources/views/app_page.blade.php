<!DOCTYPE html>
<html>
<head>
    <title>{!! Seo::GetTitle($id) !!}</title>
    <meta name="keywords" content="{!! Seo::GetKeywords($id)!!}" />
    <meta name="description" content="{!! Seo::GetDescription($id)!!}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="/includes/css/main.css">
</head>
<body>
<header class="headers">

    <div class="logo-header">

        Автошкола Б.М.В. <sup>с</sup>
    </div>
    <div class="navtop">

        <ul>
            <li><a href="/"><i class="fa fa-glazok"></i></a></li>
            <li><a href="/">Главная</a></li>
            <li><a href="/">Услуги и цены</a></li>
            <li><a href="">Акции</a></li>
            <li><a href="">Сведения об организации</a></li>

        </ul>
        <button class="draw">Оставить заявку</button>

    </div>

</header>

<section class="left-block">

    <div class="phone">

        <aside>Советский район</aside>
        <span>{!! SettingsSites::GetPhoneSov() !!}</span>
        <aside>Бежицкий район</aside>
        <span>{!! SettingsSites::GetPhoneBej() !!}</span>

    </div>
    <ul class="leftnav">
        {!! NavHelper::GetLeftNav() !!}
        {{--<li><a href="/">Обучение</a></li>--}}
        {{--<li><a href="/">Абитуриентам</a></li>--}}
        {{--<li><a href="/">Учащимся</a></li>--}}
        {{--<li><a href="/">Фотогаллерея</a></li>--}}
        {{--<li><a href="/">Контакты</a></li>--}}
        {{--<li><a href="/">Вопросы и ответы</a></li>--}}
        {{--<li><a href="/">Экзамен ПДД онлайн</a></li>--}}
        {{--<li><a href="/">Новости</a></li>--}}
    </ul>
    <div class="reklama-left">




    </div>

</section>


    @yield('content')



<div style="clear:both;"></div>

<section class="footer-countrys">

    <div class="footer-car">


    </div>


</section>

<footer>

    <h1>Автошкола Б.М.В.<sup>с</sup></h1>

    <div class="right-footer">
        <div class="socseti">

            <i class="fa fa-vk"></i>
            <i class="fa fa-ok"></i>

        </div>
        <div class="phone-footer">
            <div class="sov">
                <aside>Советский район</aside>
                <span>+7 (4832) 30-02-17</span>
            </div>
            <div class="bej">
                <aside>Бежицкий район</aside>
                <span>+7 (4832) 30-02-17</span>
            </div>

        </div>

        <button>Оставить заявку</button>

    </div>
</footer>

<!-- scripts -->
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>


</body>
</html>