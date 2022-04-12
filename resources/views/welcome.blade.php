@extends('layouts.main')

@section('content')
    <div id="site" class="clearfix">

        <main>
            <section class="first_block">
                <div class="bg_image">
                    <div class="fill"></div>
                    <a href="/user/login" class="button" target="_blank" style="background-color:#FE566B;padding: 0.5em 0.5em;  -webkit-box-shadow: 0px 4px 0 #CE4658;box-shadow: 0px 4px 0 #CE4658;margin-top: 1.7rem;">
                        Личный кабинет
                    </a>
                    <div class="image"></div>
                </div>
                <div class="container">

                    <div class="content">

                        <h1 style="font-size: 4.2rem;">Электронный табель учета рабочего времени</h1>
                        <h3>Форматы табеля: Т-12, Т-13</h3>
                        <p class="rocket">
                            Экономьте до 35% времени на заполнении табеля!<br>
                            Теперь это в несколько раз быстрее и удобнее.
                        </p>
                        <p class="target">
                            Начните заполнение, и уже через 15 минут он будет готов.*<br>

                        </p>
                        <a href="/timesheet/index" class="button" target="_blank"><span>Начать заполнение (ОГРАНИЧЕННАЯ-ВЕРСИЯ)</span></a>
                        <!--                    open_popup_feedback-->
                        <!--                    --><!--user/register target="_blank" -->

                    </div>
                </div>
            </section>
            <section class="your_problem">
                <div class="container">
                    <div class="image_block">
                        <div class="container ">
                            <div class="bg_image"></div>
                        </div>
                    </div>
                    <div class="inner">
                        <h2 class="title">С какой проблемой вы столкнулись?</h2>
                        <div class="content">
                            <div class="list">
                                <p class="icon icon1">
                                    Только начинаете вести учет<br>
                                    и ищете наиболее<br>
                                    подходящий способ?
                                </p>
                                <p class="icon icon2">
                                    Ведение табеля отнимает<br>
                                    слишком много времени
                                </p>
                                <p class="icon icon3">
                                    Ищете более широкие возможности,<br>
                                    чем предусматривают стандартные<br>
                                    формы Т-12 и Т-13
                                </p>
                                <p class="icon icon4">
                                    Нужен более простой, быстрый<br>
                                    и эффективный способ ведения<br>
                                    учета, чем используемый?
                                </p>
                            </div>
                        </div>
                        <p class="decision">
                            Электронный табель Timesheet<br>
                            эффективно решает все эти и многие другие проблемы!
                        </p>
                    </div>
                </div>
            </section>
            <section class="how_it_work">
                <div class="container">
                    <h2 class="title">Как это работает?</h2>
                    <div class="items">
                        <div class="item item1">
                            <p class="name">ШАГ 1</p>
                            <div class="value">
                                <div>Регистрация</div>
                                <div class="time">Меньше 1 минуты</div>
                            </div>
                        </div>
                        <div class="item item2">
                            <p class="name">ШАГ 2</p>
                            <div class="value">
                                <div>Заполнение табеля онлайн</div>
                                <div class="time">15 минут</div>
                            </div>
                        </div>
                        <div class="item item3">
                            <p class="name">ШАГ 3</p>
                            <div class="value">
                                <div>Скачивание готового табеля</div>
                                <div class="time">Несколько секунд</div>
                            </div>
                        </div>
                        <a href="#" class="button open_popup_feedback">Узнать подробнее</a>
                        <!--                    --><!--user/register target="_blank"-->
                    </div>
                </div>
            </section>
            <section class="why">
                <div class="container">
                    <div class="items">
                        <div class="left">
                            <h2 class="title">
                                Почему Вам нужно<br>
                                использовать сервис Timesheet<br>
                                для заполнения табеля?
                            </h2>
                            <ul>
                                <li>Широкая функциональность сервиса делает заполнение табеля удобным и эффективным</li>
                                <li>Заполнение происходит онлайн, без установки громоздкого ПО на компьютере</li>
                                <li>Экономия средств. Не нужно нанимать квалифицированного специалиста, если не получается разобраться с учетом. С сервисом Timesheet всё очень просто.</li>
                            </ul>
                        </div>
                        <div class="right">
                            <ul>
                                <li>Позволяет сэкономить массу времени, особенно, если в компании много подразделений или учет ведется сразу для нескольких предприятий.</li>
                                <li>Надежное хранение данных. Защита от взлома и утечки данных.</li>
                                <li>Доступен для заполнения и загрузки, везде, где есть интернет: можно заполнить и отправить руководителю, находясь в командировке, отъезде и т.п</li>
                                <li>Подходит любому виду бизнеса или организации, независимо от сферы деятельности компании.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="trial">
                <div class="container">
                    <h2 class="title">
                        Ведите учет быстро и просто.<br>
                        Начните прямо сейчас!
                    </h2>
                    <a href="#" class="button open_popup_feedback">ПОПРОБОВАТЬ БЕСПЛАТНО</a>
                    <div class="info" style="color:#0092FF;font-size: 11px;">
                        Электронный табель «Timesheet», 2022<br>
                        Данный сайт не является публичной офертой<br>
                        <a href="/site/privacy-policy" target="_blank" style="color:#33A8FF;">Политика обработки персональных данных</a> |
                        <a href="/site/cookie-policy" target="_blank" style="color:#33A8FF;">Политика использования Cookie файлов</a> |
                        <a href="/site/terms" target="_blank" style="color:#33A8FF;">Пользовательское соглашение</a>                </div>
                </div>
            </section>
        </main>

    </div><!-- #site -->
@endsection
