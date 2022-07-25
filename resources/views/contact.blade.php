@extends('layouts.contacts')

@section('blog_post')
    <div class="body" style="height: 100vh">
        <section id="hire">
            <h1>Contact Me</h1>

            <form action="{{route('contact.post')}}" method="POST">
                @csrf
                <div class="field name-box">
                    <input type="text" id="name" name="name" placeholder="Ваше имя"/>
                    <label for="name">Имя</label>
                    <span class="ss-icon">check</span>
                </div>

                <div class="field email-box">
                    <input type="text" id="email" name="phone" placeholder="+7 (000) 000 00 00"/>
                    <label for="email">Телефон</label>
                    <span class="ss-icon">check</span>
                </div>

                <div class="field msg-box">
                    <textarea id="msg" rows="4" name="message" placeholder="Введите свое сообщение здесь..."/></textarea>
                    <label for="msg">Сообщение</label>
                    <span class="ss-icon">check</span>
                </div>

                <input class="button" type="submit" value="Отправить" />
            </form>
        </section>
    </div>
@endsection
