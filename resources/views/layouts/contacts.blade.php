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
        .post h1 {
            color: #222;
            font-weight: 500;
            margin-bottom: 15px;
            padding-top: 2%;
        }
        .post-meta {
            margin-bottom: 30px;
            text-align: center;
            text-transform: uppercase;
            font-size: .8em;
        }
        time,
        .author {
            padding-right: 26px;
            position: relative;
        }
        time:after,
        .author:after {
            content: "";
            background: #DDDDDF;
            width: 8px;
            height: 8px;
            position: absolute;
            top: 50%;
            right: 7px;
            transform: translateY(-50%) rotate(45deg);
        }
        .post-content p {
            line-height: 1.5;
            color: #222;
            font-weight: 400;
            text-align: center;
            margin-bottom: 1em;
        }
        @media (min-width: 768px) {
            body {
                font-size: 16px;
            }

            .post-image,
            .post h1 {
                text-align: center;

            }

            .post-image img {
                width: 70%;
            }
        }
        .body {

            font-size: 62.5%;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            color: #B6B6B6;
        }
        .body section {
            background: #efefef;
            margin: 60px auto 120px;
            border-top: 15px solid #313A3D;
            text-align: center;
            padding: 50px 0 110px;
            width: 80%;
            max-width: 1100px;
        }
        .body section h1 {
            margin-bottom: 40px;
            font-size: 4em;
            text-transform: uppercase;
            font-family: 'Lato', sans-serif;
            font-weight: 100;
        }
        form {
            width: 58.3333333333%;
            margin: 0 auto;
        }
        form .field {
            width: 100%;
            position: relative;
            margin-bottom: 15px;
        }
        form .field label {
            text-transform: uppercase;
            position: absolute;
            top: 0;
            left: 0;
            background: #313A3D;
            width: 100%;
            padding: 18px 0;
            font-size: 1.45em;
            letter-spacing: 0.075em;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
        }
        form .field label + span {
            font-family: 'SSStandard';
            opacity: 0;
            color: white;
            display: block;
            position: absolute;
            top: 12px;
            left: 7%;
            font-size: 2.5em;
            text-shadow: 1px 2px 0 #cd6302;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
        }
        form .field input[type="text"], form .field textarea {
            border: none;
            background: #E8E9EA;
            width: 80.5%;
            margin: 0;
            padding: 18px 0;
            padding-left: 19.5%;
            color: #313A3D;
            font-size: 1.4em;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }
        form .field input[type="text"]#msg, form .field textarea#msg {
            height: 18px;
            resize: none;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
        }
        form .field input[type="text"]:focus, form .field textarea:focus, form .field input[type="text"].focused, form .field textarea.focused {
            outline: none;
        }
        form .field input[type="text"]:focus#msg, form .field textarea:focus#msg, form .field input[type="text"].focused#msg, form .field textarea.focused#msg {
            padding-bottom: 150px;
        }
        form .field input[type="text"]:focus + label, form .field textarea:focus + label, form .field input[type="text"].focused + label, form .field textarea.focused + label {
            width: 18%;
            background: #FD9638;
            color: #313A3D;
        }
        form .field input[type="text"].focused + label, form .field textarea.focused + label {
            color: #FD9638;
        }
        form .field:hover label {
            width: 18%;
            background: #313A3D;
            color: white;
        }
        form input[type="submit"] {
            background: #FD9638;
            color: white;
            -webkit-appearance: none;
            border: none;
            text-transform: uppercase;
            position: relative;
            padding: 13px 50px;
            font-size: 1.4em;
            letter-spacing: 0.1em;
            font-family: 'Lato', sans-serif;
            font-weight: 300;
            -webkit-transition: all 333ms ease-in-out;
            -moz-transition: all 333ms ease-in-out;
            -o-transition: all 333ms ease-in-out;
            -ms-transition: all 333ms ease-in-out;
            transition: all 333ms ease-in-out;
        }
        form input[type="submit"]:hover {
            background: #313A3D;
            color: #FD9638;
        }
        form input[type="submit"]:focus {
            outline: none;
            background: #cd6302;
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

    @yield('blog_post')

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
<script>
    $('textarea').blur(function () {
        $('#hire textarea').each(function () {
            $this = $(this);
            if ( this.value != '' ) {
                $this.addClass('focused');
                $('textarea + label + span').css({'opacity': 1});
            }
            else {
                $this.removeClass('focused');
                $('textarea + label + span').css({'opacity': 0});
            }
        });
    });

    $('#hire .field:first-child input').blur(function () {
        $('#hire .field:first-child input').each(function () {
            $this = $(this);
            if ( this.value != '' ) {
                $this.addClass('focused');
                $('.field:first-child input + label + span').css({'opacity': 1});
            }
            else {
                $this.removeClass('focused');
                $('.field:first-child input + label + span').css({'opacity': 0});
            }
        });
    });

    $('#hire .field:nth-child(2) input').blur(function () {
        $('#hire .field:nth-child(2) input').each(function () {
            $this = $(this);
            if ( this.value != '' ) {
                $this.addClass('focused');
                $('.field:nth-child(2) input + label + span').css({'opacity': 1});
            }
            else {
                $this.removeClass('focused');
                $('.field:nth-child(2) input + label + span').css({'opacity': 0});
            }
        });
    });
</script>
</body>

</html>
