<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Reset -->
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/base.css') }}">
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('css/fonts/Inter/stylesheet.css') }}">
    <!-- Elements -->
    <link rel="stylesheet" href="{{ asset('css/elements/btn.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elements/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elements/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/elements/modal-overlay.css') }}">
    <!-- Blocks -->
    <link rel="stylesheet" href="{{ asset('css/blocks/header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/home.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/credo.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/solutions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/employees.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/contacts.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/services.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/projects.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blocks/footer.css') }}">
    <style>
        .card p {
            flex: 1;
            line-height: 1.4;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
<main>
    <header class="header ">
        <div class="container">
            <div class="header-row">
                <div class="header-row__logo">
                    <img src="{{ asset('img/header/header-logo.svg') }}" alt="Logo" class="logo-icon">
                    <p class="logo-title">IDPro</p>
                </div>
                <div class="header-row__menu menu">
                    <ul>
                        <li class="menu__item menu__item_big"> <a href="#credo">Кредо</a></li>
                        <li class="menu__item"><a href="#services">Услуги</a></li>
                        <li class="menu__item"><a href="#projects">Проекты</a></li>
                        <li class="menu__item"><a href="#employees">Сотрудники</a></li>
                        <li class="menu__item"><a href="#blog">Блог</a></li>
                        <li class="menu__item menu__item_dynamic">
                            <img src="{{ asset('img/header/contacts-arrow.svg') }}" alt="arrow">
                            <a href="#contacts">Контакты</a>
                        </li>
                        <li><a href="{{route('contact')}}" class="menu__item btn">Стать клиентом</a></li>
                    </ul>
                </div>
                <div class="mobile-menu-title">
                    <img src="{{ asset('img/header/contacts-arrow.svg') }}" alt="arrow">
                    <div>Меню</div>
                </div>
            </div>
            <div class="mobile-menu menu">
                <ul>
                    <li class="menu__item menu__item_big"> <a href="#credo">Кредо</a></li>
                    <li class="menu__item"><a href="#services">Услуги</a></li>
                    <li class="menu__item"><a href="#projects">Проекты</a></li>
                    <li class="menu__item"><a href="#employees">Сотрудники</a></li>
                    <li class="menu__item"><a href="#blog">Блог</a></li>
                    <li class="menu__item menu__item_dynamic">
                        <img src="{{ asset('img/header/contacts-arrow.svg') }}" alt="arrow">
                        <a href="#contacts">Контакты</a>
                    </li>
                </ul>
            </div>
            <a href="{{route('contact')}}" class="mobile-btn btn js-modal-open">Стать клиентом</a>
        </div>



    </header>

    <section class="home  ">
        <div class="container">
            <div class="home-content">
                <div class="home-discription">
                    <div class="home-heading">
                        <h1 class="home-heading__title">IDPro</h1>
                        <p class="home-heading__subtitle">digital - агентство</p>
                    </div>
                    <div class="home-text">
                        <p>Создаём функциональные сайты и креативные бренды</p>
                    </div>
                </div>
                <div class="home-decoration"></div>
            </div>

        </div>
        <div class="home-bg-img">
            <img src="{{ asset('img/home/home-bg.png') }}" alt="home-bg-fingerprint">
        </div>
    </section>

    <section class="credo" id="credo">
        <div class="container">
            <h2 class="credo-title">
                Команда ID PRO - это профессиональный подход и внимание к каждому клиенту.
            </h2>
            <div class="credo-content">
                <img src="{{ asset('img/credo/team-bg.png') }}" alt="team">
                <div class="credo-text">
                    <p>На­ша ра­бо­та осно­ва­на на <b>кли­ен­то­ориенти­ро­ван­нос­ти</b> и <b>полном
                            по­гру­же­нии</b> в биз­нес нашего клиен­та</p>
                    <p>Окажем весь спектр услуг, не­об­хо­ди­мых для <b>создания Вашей ком­па­нии</b> или бренда,
                        его
                        <b>раз­ви­тия</b> и прод­ви­же­ния.
                    </p>
                    <p> Вам больше не нужно думать о мар­ке­тин­ге</p>
                </div>
            </div>
        </div>
    </section>


    <div class="slider-wrapper ">
        <div class="slider-slides">
            <div class="slide ">

                <div class="slide__text slide-text">
                    <div class="slide-text__title">
                        <h2>Вам нужен <span>сайт</span>, если ваша ниша:</h2>
                    </div>
                    <div class="slide-text__description">
                        <ul>
                            <li>Строительство</li>
                            <li>B2B</li>
                            <li>Медицина</li>
                            <li>Ремонт и сервис</li>
                            <li>Недвижимость</li>
                            <li>Консалтинг и IT</li>
                            <li>Образование</li>
                            <li>Туризм</li>
                            <li>Промышленность</li>
                        </ul>
                    </div>
                </div>
                <div class="slide-bg__fingerprint">
                    <img src="{{ asset('img/slider/bg-img-fingerprint.png') }}" alt="">
                </div>
                <div class="slide-bg__giraffe giraffe-circle">
                    <img src="{{ asset('img/slider/bg-img-giraffe.png') }}" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="slide__text slide-text">
                    <div class="slide-text__title">
                        <h2>Вам нужно <span>комплексное продвижение</span>, если:</h2>
                    </div>
                    <div class="slide-text__description">
                        <ul>
                            <li>Хотите заполучить доверие и лояльность
                                аудитории</li>
                            <li>Необходим постоянный приток
                                трафика и рост продаж</li>
                            <li>Вы ничего не знаете о продвижении
                                в соц сетях</li>
                        </ul>
                    </div>
                </div>

                <div class="slide-bg__fingerprint">
                    <img src="{{ asset('img/slider/bg-img-fingerprint.png') }}" alt="">
                </div>
                <div class="slide-bg__giraffe giraffe-circle">
                    <img src="{{ asset('img/slider/bg-img-giraffe.png') }}" alt="">
                </div>
            </div>
            <div class="slide">
                <div class="slide__text slide-text">
                    <div class="slide-text__title">
                        <h2>Вам нужен <span>дизайн</span> , если:</h2>
                    </div>
                    <div class="slide-text__description">
                        <ul>
                            <li>Хотите выделяться среди конкурентов</li>
                            <li>Хотите создать бренд и быть
                                узнаваевыми на рынке </li>
                            <li>Нужно визуальное оформление
                                соц сетей</li>
                        </ul>
                    </div>
                </div>
                <div class="slide-bg__fingerprint">
                    <img src="{{ asset('img/slider/bg-img-fingerprint.png') }}" alt="">
                </div>
                <div class="slide-bg__giraffe giraffe-circle">
                    <img src="{{ asset('img/slider/bg-img-giraffe.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="slider-nav">
            <div class="slider-button-prev slider-button">
                <img src="{{ asset('img/slider/prev-slide.svg') }}" alt="">
            </div>
            <div class="slider-pagination">
                <div class="slider-pagination__bullet bullet active"></div>
                <div class="slider-pagination__bullet bullet"></div>
                <div class="slider-pagination__bullet bullet"></div>
            </div>
            <div class="slider-button-next slider-button">
                <img src="{{ asset('img/slider/next-slide.svg') }}" alt="">
            </div>
        </div>
    </div>


    <section class="solutions" id="solutions">
        <div class="container">
            <div class="main-solutions">
                <h2 class="main-solutions__title">Увеличим поток заявок в бизнес в 2-8 раз!</h2>
                <div class="mobile-main-solutions">
                    <img src="{{ asset('img/solutions/mobile-solutions-img.png') }}" alt="" >
                </div>
                <img src="{{ asset('img/solutions/solutions-img-bg.png') }}" alt="" class="main-solutions-bg" >
                <!-- <div class="main-solutions__content">
                    <img src="./img/solutions/solutions-img.png" alt="" class="main-solutions-bg">
                    <div class="main-solutions-text main-solutions-text_business">Упакуем бизнес</div>
                    <div class="main-solutions-text main-solutions-text_sales">Выстроим отдел продаж</div>
                    <div class="main-solutions-text main-solutions-text_reklam">Настроим рекламу</div>
                    <div class="main-solutions-text main-solutions-text_ideas">Реализуем ваши идеи</div>
                    <div class="main-solutions-text main-solutions-text_requests">Обеспечим бизнес заявками</div>
                </div> -->
            </div>
            <div class="problems">
                <h2 class="problems__title">Поможем решить вашу головную боль:</h2>
                <div class="problems__content">
                    <img src="{{ asset('img/solutions/solutions-photo.png') }}" alt="" class="problems-photo">
                    <div class="problems-wrapper">
                        <div class="problems-steps">
                            <img src="{{ asset('img/solutions/solutions-arrows.svg') }}" alt="" class="problems-steps__img">
                            <img src="{{ asset('img/solutions/solutions-mobile-arrows.svg') }}" alt="" class="problems-steps__mobile-img">
                            <ul>
                                <li>
                                    <p class="problems-steps__text">Сайт не приносит заявок </p>
                                </li>
                                <li>
                                    <p class="problems-steps__text">Нужно грамотное оформление аккаунта в соц сетях
                                    </p>
                                </li>
                                <li>
                                    <p class="problems-steps__text">Хочу отличаться от своих конкурентов</p>
                                </li>
                                <li>
                                    <p class="problems-steps__text">Хочу стать №1 в своей нише</p>
                                </li>
                                <li>
                                    <p class="problems-steps__text">Нужно повысить средний чек и продавать в разы
                                        больше
                                    </p>
                                </li>
                                <li>
                                    <p class="problems-steps__text problems-steps__text_long">Хочу автоматизоровать
                                        работу, но не знаю как </p>
                                </li>
                            </ul>
                        </div>
                        <div class="problems-btn-container">
                            <a href="{{route('contact')}}" class="btn btn-big ">Стать клиентом</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services" id="services">
        <div class="container">
            <div class="projects-heading">
                <p>Услуги</p>
            </div>

            <div class="box-container">
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center"
                             style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Разработка сайтов</h3>
                                <p>Создаем классные, продающие сайты</p>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                     class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                             style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Закажите бесплатную консультацию</h3>
                                <p>Наш менеджер свяжется с вами в течении 1 часа!</p>
                                <button class="flip-box-button js-open-modal" data-modal="1">Консультация</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center"
                             style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Разработка айдентики</h3>
                                <p>Айдентика для вашей компании</p>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                     class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                             style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Закажите бесплатную консультацию</h3>
                                <p>Наш менеджер свяжется с вами в течении 1 часа!</p>
                                <button class="flip-box-button js-open-modal" data-modal="1">Консультация</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center filter-"
                             style="background-image: url('https://i.ibb.co/k2gy1Bn/chto-prolili-eto-vazhnyj-moment-scaled.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Разработка приложений</h3>
                                <p>Многофункциональные приложения любой сложности</p>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                     class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                             style="background-image: url('https://s25.postimg.cc/l2q9ujy4f/cta-4.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Закажите бесплатную консультацию</h3>
                                <p>Наш менеджер свяжется с вами в течении 1 часа!</p>
                                <button class="flip-box-button js-open-modal" data-modal="1">Консультация</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center"
                             style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Комплексное продвижение</h3>
                                <p>Продвижение по любым платформам</p>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                     class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                             style="background-image: url('https://s25.postimg.cc/frbd9towf/cta-2.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Закажите бесплатную консультацию</h3>
                                <p>Наш менеджер свяжется с вами в течении 1 часа!</p>
                                <button class="flip-box-button js-open-modal" data-modal="1">Консультация</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center"
                             style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Комплексное продвижение + разработка айдентики</h3>
                                <p>Создадим для вас бренд и начнем его продвигать</p>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                     class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                             style="background-image: url('https://s25.postimg.cc/hj4c4qnov/cta-3.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Закажите бесплатную консультацию</h3>
                                <p>Наш менеджер свяжется с вами в течении 1 часа!</p>
                                <button class="flip-box-button js-open-modal" data-modal="1">Консультация</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-item">
                    <div class="flip-box">
                        <div class="flip-box-front text-center filter-"
                             style="background-image: url('https://s25.postimg.cc/l2q9ujy4f/cta-4.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Поддержка сайтов</h3>
                                <p>Обслуживание вашего сайта</p>
                                <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt=""
                                     class="flip-box-img">
                            </div>
                        </div>
                        <div class="flip-box-back text-center"
                             style="background-image: url('https://s25.postimg.cc/l2q9ujy4f/cta-4.png');">
                            <div class="inner color-white">
                                <h3 class="flip-box-header">Закажите бесплатную консультацию</h3>
                                <p>Наш менеджер свяжется с вами в течении 1 часа!</p>
                                <button class="flip-box-button js-open-modal" data-modal="1">Консультация</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="projects" id="projects">
        <div class="container">
            <h1 class="projects-title">Проекты</h1>
            <div class="projects-grid-container">

                <a href="">
                    <div class="projects_grid-container__box projects-box">
                        <div class="projects-box__description">
                            <p class="projects-box__text">Разработка логотипа для компании по походам на эльбрус
                            </p>
                            <img src="{{ asset('img/projects/projects-box-logo.svg') }}" alt="" class="projects-box__logo" style="object-fit: cover">
                        </div>
                        <div class="projects-box__bg-description"></div>
                        <img src="https://i.ibb.co/QPYJC9M/Logoelbrus.jpg" alt="" class="projects-box__bg-img">
                    </div>
                </a>


                <a href="">
                    <div class="projects_grid-container__box projects-box">
                        <div class="projects-box__description">
                            <p class="projects-box__text">Разработка сайта и комплексное продвижение для ООО «Бриллант»
                            </p>
                            <img src="{{ asset('img/projects/projects-box-logo.svg') }}" alt="" class="projects-box__logo">
                        </div>
                        <div class="projects-box__bg-description"></div>
                        <img src="https://i.ibb.co/hWy4WFy/brilliant.png" alt="" class="projects-box__bg-img">
                    </div>
                </a>
                <a href="">
                    <div class="projects_grid-container__box projects-box">
                        <div class="projects-box__description">
                            <p class="projects-box__text">Разработка сайта для ООО «Интеллигент строй»
                            </p>
                            <img src="{{ asset('img/projects/projects-box-logo.svg') }}" alt="" class="projects-box__logo">
                        </div>
                        <div class="projects-box__bg-description"></div>
                        <img src="https://i.ibb.co/26MMdBR/Port1.png" alt="" class="projects-box__bg-img">
                    </div>
                </a>
                <a href="">
                    <div class="projects_grid-container__box projects-box">
                        <div class="projects-box__description">
                            <p class="projects-box__text">Разработка логотипа насосных установок Российского производства для ООО «ЭТА»
                            </p>
                            <img src="{{ asset('img/projects/projects-box-logo.svg') }}" alt="" class="projects-box__logo">
                        </div>
                        <div class="projects-box__bg-description"></div>
                        <img src="https://i.ibb.co/6Dj38tX/LogoETA.png" alt="" class="projects-box__bg-img">
                    </div>
                </a>
                <a href="">
                    <div class="projects_grid-container__box projects-box">
                        <div class="projects-box__description">
                            <p class="projects-box__text">Название проекта и
                                заказчика ООО “Например”
                            </p>
                            <img src="{{ asset('img/projects/projects-box-logo.svg') }}" alt="" class="projects-box__logo">
                        </div>
                        <div class="projects-box__bg-description"></div>
                        <img src="{{ asset('img/projects/projects-box-img.jpg') }}" alt="" class="projects-box__bg-img">
                    </div>
                </a>
                <a href="">
                    <div class="projects_grid-container__box projects-box">
                        <div class="projects-box__description">
                            <p class="projects-box__text">Название проекта и
                                заказчика ООО “Например”
                            </p>
                            <img src="{{ asset('img/projects/projects-box-logo.svg') }}" alt="" class="projects-box__logo">
                        </div>
                        <div class="projects-box__bg-description"></div>
                        <img src="{{ asset('img/projects/projects-box-img.jpg') }}" alt="" class="projects-box__bg-img">
                    </div>
                </a>
            </div>

        </div>
    </section>

    <section class="employees" id="employees">
        <div class="container">
            <h2 class="employees-title">Наши сотрудники</h2>
            <div class="empolyees-cards">
                <div class="empolyees-card-wrapper">
                    <div class="empolyees-card">
                        <div class="empolyees-card-image">
                            <img src="https://i.ibb.co/g647Gwx/danya4.png" alt="profile two">
                        </div>
                        <div class="details">
                            <h2>Ивакин Данила Дмитриевич
                                <br>
                                <span class="job-title">СЕО компании</span>
                            </h2>
                            <p>Амбициозный, молодой и энергичный. Заводной апельсин компании. Ответственен за настрой и направление развития компании. Верит что мы когда нибудь купим яндекс.</p>
                        </div>
                    </div>
                </div>
                <div class="empolyees-card-wrapper">
                    <div class="empolyees-card">
                        <div class="empolyees-card-image">
                            <img src="https://i.ibb.co/thwqMMB/kamil2.png" alt="profile two">
                        </div>
                        <div class="details">
                            <h2>Гараев Камиль Фиркатович
                                <br>
                                <span class="job-title">CTO компании</span>
                            </h2>
                            <p>Технический специалист на все руки. Контролирует все проекты, программистов и походы в баню. Верит что коду нет конца и края, главное найти свое место.</p>
                        </div>
                    </div>
                </div>

                <div class="empolyees-card-wrapper">
                    <div class="empolyees-card">
                        <div class="empolyees-card-image">
                            <img src="https://i.ibb.co/3fnVX6d/stolet2.jpg" alt="profile two" style="position: absolute;bottom: -90px;">
                        </div>
                        <div class="details">
                            <h2>Столетов Даниил Владимирович
                                <br>
                                <span class="job-title">CVO компании</span>
                            </h2>
                            <p>Идейный вдохновитель и решала всей команды. Если что-то идет не так, то вход пускают этого ответственного и деятельно бойца. Верит в себя.</p>
                        </div>
                    </div>
                </div>
                <div class="empolyees-card-wrapper">
                    <div class="empolyees-card">
                        <div class="empolyees-card-image">
                            <img src="https://i.ibb.co/7G76Nvw/ilya2.jpg" alt="profile two" style="position: absolute;bottom: -130px;">
                        </div>
                        <div class="details">
                            <h2>Китаев Илья
                                <br>
                                <span class="job-title">Юрист</span>
                            </h2>
                            <p>Мастер в поиске юридических тонкостей, составлении договоров и напеве песен. Верит что можно захватить весь рынок и не уехать на долгий срок</p>
                        </div>
                    </div>
                </div>

                <div class="empolyees-card-wrapper">
                    <div class="empolyees-card">
                        <div class="empolyees-card-image" style="object-fit: contain;">
                            <img src="https://i.ibb.co/BVZQXt4/sabina.jpg" alt="profile two" style="position: absolute;bottom: -70px;">

                        </div>
                        <div class="details">
                            <h2>Абязова Сабина Радмиловна
                                <br>
                                <span class="job-title">SMM компании</span>
                            </h2>
                            <p>Креатив нашей Команды. Сабин как лучше написать текст? Сабин как это правильно назвать? Сабин когда реклама запускается? Это все к ней. Верит во все лучшее, без всего плохого.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

@yield('blog')

    <section class="contacts" id="contacts">
        <div class="container">
            <div class="contacts-row">
                <div class="contacts-text">
                    <h2 class="contacts-text__title">Контакты</h2>
                    <div class="contacts-text__address address">
                        <h3 class="address__title">Адрес</h3>
                        <p class="address__info">ул. КСКа, д. 3, офис 4.18 <br>
                            Казань, Респ. Татарстан, Россия, 420111</p>
                    </div>
                    <div class="contacts-text__contact-data contact-data">
                        <h3 class="contact-data__title">Контактные данные</h3>
                        <a href="tel:+79867708202" class="contact-data__tel">+7 986 770 82-02</a>
                        <p class="contact-data__mail">serb@gmail.ru</p>
                    </div>
                    <div class="contacts-btn-container contacts-btn-container-desktop ">
                        <a href="{{route('contact')}}" class="btn-big btn">Написать нам</a>
                    </div>

                </div>
                <div class="contacts-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2243.8134992223063!2d49.1191382!3d55.7791109!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x415ead03f3e4dc67%3A0x6e114522e34d7e4c!2z0YPQuy4g0KjQuNCz0LDQsdGD0YLQtNC40L3QsCDQnNCw0YDQtNC20LDQvdC4LCAyNCwg0JrQsNC30LDQvdGMLCDQoNC10YHQvy4g0KLQsNGC0LDRgNGB0YLQsNC9LCA0MjAwMjE!5e0!3m2!1sru!2sru!4v1657668588015!5m2!1sru!2sru"
                        width="544" height="360" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <div class="contacts-btn-container-mobile">
                        <a href="{{route('contact')}}" class="btn-big btn">Написать нам</a>
                    </div>
                    <div class="contacts-btn-container">
                        <a href="{{route('contact')}}" class="btn  btn-big btn-big-grey">Позвонить нам</a>
                    </div>

                </div>
            </div>
        </div>

    </section>

    <footer class="footer  ">
        <div class="container">
            <div class="footer-inner">
                <div class="footer-row footer-row-top">
                    <div class="footer-row__logo">
                        <img src="{{ asset('img/header/header-logo.svg') }}" alt="Logo" class="logo-icon">
                        <p class="logo-title">IDPro</p>
                    </div>
                    <div class="footer-row__menu menu">
                        <ul>
                            <li class="menu__item menu__item_big"> <a href="#credo">Кредо</a></li>
                            <li class="menu__item"><a href="#services">Услуги</a></li>
                            <li class="menu__item"><a href="#projects">Проекты</a></li>
                            <li class="menu__item"><a href="#employees">Сотрудники</a></li>
                            <li class="menu__item"><a href="#blog">Блог</a></li>
                            <li class="menu__item menu__item_dynamic">
                                <img src="{{ asset('img/header/contacts-arrow.svg') }}" alt="arrow">
                                <a href="#contacts">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer-row footer-row-medium-mobile">
                    <div class="footer-row__mobile-logo">
                        <img src="{{ asset('img/header/header-logo.svg') }}" alt="Logo" class="logo-icon">
                        <p class="logo-title">IDPro</p>
                    </div>
                    <div class="footer-row__mobile-info">
                        © 2022 IDPro
                    </div>
                </div>
                <div class="footer-row footer-row-bottom">
                    <p class="footer-row-bottom__info">
                        © 2022 IT company IDPro Информация на сайте не является публичной офертой ООО “Айди Про”<br>
                        ИНН/КПП 1684003087 ОГРН 1221600020410
                    </p>
                    <div class="footer-row-bottom__designed designed">
                        <img src="{{ asset('img/footer/footer-img.svg') }}" alt="" class="designed__img">
                        <div class="designed__text">
                            <p>Задизайнено в студии Laax</p>
                            <a href="">Информация о сайте--></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</main>


<div class="modal-overlay"></div>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
</body>

</html>
