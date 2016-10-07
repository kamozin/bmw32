<!DOCTYPE html>
<html>
<head>
    <title>{!! Seo::GetTitle($id) !!}</title>
    <meta name="keywords" content="{!! Seo::GetKeywords($id)!!}" />
    <meta name="description" content="{!! Seo::GetDescription($id)!!}" />
    <meta http-equiv="cleartype" content="on">
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

    <link rel="stylesheet" type="text/css" href="/includes/css/main.css">
    <link rel="stylesheet" href="/includes/js/mobile_nav/slicknav.css" />
    <link rel="stylesheet" href="//cdn.jsdelivr.net/jquery.sidr/2.2.1/stylesheets/jquery.sidr.dark.min.css">





</head>
<body>
<header class="headers">

    <div class="logo-header">
        <div id="mobile-header">
            <a id="responsive-menu-button" href="#sidr-main">☰</a>
        </div>
        Автошкола Б.М.В. <sup>с</sup>


    </div>



    <div class="navtop">

        <ul>
            <li><a href="/"><i class="fa fa-glazok"></i></a></li>
            <li><a href="/">Главная</a></li>
            <li><a href="/">Услуги и цены</a></li>
            <li><a href="/actions">Акции</a></li>
            <li><a href="">Сведения об организации</a></li>

        </ul>
        <button class="draw">Оставить заявку</button>

    </div>



</header>
<ul id="mobile-nav">

    <li><a href="/">Главная</a></li>
    <li><a href="/">Услуги и цены</a></li>
    <li><a href="">Акции</a></li>
    <li><a href="">Сведения об организации</a></li>
</ul>


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

<section class="footer-country">


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

<style>
    #mobile-header {
        display: none;
    }
    #navigation{
        display: none;
    }
    @media only screen and (max-width: 768px){
        #mobile-header {
            display: block;
        }
    }
</style>


<div id="navigation">
    <nav class="nav">
        <ul>
            <li><a href="#download">Download</a></li>
            <li><a href="#getstarted">Get started</a></li>
            <li><a href="#usage">Demos &amp; Usage</a></li>
            <li><a href="#documentation">Documentation</a></li>
            <li><a href="#themes">Themes</a></li>
            <li><a href="#support">Support</a></li>
        </ul>


    </nav>
</div>



<!-- scripts -->
<script   src="https://code.jquery.com/jquery-2.2.4.min.js"   integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="   crossorigin="anonymous"></script>
<script src="/includes/js/mobile_nav/jquery.slicknav.min.js"></script>
<!-- Include the Sidr JS -->
<script src="//cdn.jsdelivr.net/jquery.sidr/2.2.1/jquery.sidr.min.js"></script>
<script src="/includes/js/mobile_nav/2/js/classie.js"></script>


<script>

    $(function(){
        $('#mobile-nav').slicknav({
            label: ''
        });
    });
</script>

<script>
    $('#responsive-menu-button').sidr({
        name: 'sidr-main',
        source: '#navigation'
    });
</script>

</body>
</html>