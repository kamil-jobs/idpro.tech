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
                        <li class="menu__item menu__item_big"> <a href="/">Кредо</a></li>
                        <li class="menu__item"><a href="/">Услуги</a></li>
                        <li class="menu__item"><a href="/">Проекты</a></li>
                        <li class="menu__item"><a href="/">Сотрудники</a></li>
                        <li class="menu__item"><a href="/">Блог</a></li>
                        <li class="menu__item menu__item_dynamic">
                            <img src="{{ asset('img/header/contacts-arrow.svg') }}" alt="arrow">
                            <a href="/">Контакты</a>
                        </li>
                        <li><a  class="menu__item btn js-modal-open ">Стать клиентом</a></li>
                    </ul>
                </div>
                <div class="mobile-menu-title">
                    <img src="{{ asset('img/header/contacts-arrow.svg') }}" alt="arrow">
                    <div>Меню</div>
                </div>
            </div>
            <div class="mobile-menu menu">
                <ul>
                    <li class="menu__item menu__item_big"> <a href="/">Кредо</a></li>
                    <li class="menu__item"><a href="/">Услуги</a></li>
                    <li class="menu__item"><a href="/">Проекты</a></li>
                    <li class="menu__item"><a href="/">Сотрудники</a></li>
                    <li class="menu__item"><a href="/">Блог</a></li>
                    <li class="menu__item menu__item_dynamic">
                        <img src="{{ asset('img/header/contacts-arrow.svg') }}" alt="arrow">
                        <a href="/">Контакты</a>
                    </li>
                </ul>
            </div>
            <a class="mobile-btn btn js-modal-open">Стать клиентом</a>
        </div>



    </header>

    @yield('list')

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
<div class="modal">
    <div class="modal-heading">
        <p class="modal-title">Напишите нам</p>
        <img src="{{ asset('img/modal/modal-exit-icon.svg') }}" alt="exit" class="js-modal-close">
    </div>

    <div class="feedback">
        <input type="text" class="name" placeholder="Введите ФИО">
        <input type="text" class="tel" placeholder="Введите телефон">
        <input type="text" class="email" placeholder="Введите e-mail">
        <input type="text" class="message-description" placeholder="Добавьте описание">
        <a href="" class="btn btn-big">Отправить</a>
    </div>
</div>
<div class="modal-overlay"></div>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/slider.js') }}"></script>
</body>

</html>
