@extends('layouts.app')

@section('title', 'Контакти')

@section('content')

<div class="bg-contacts">
    <h1>Контакти</h1>
</div>

<section class="form">
    <div class="c2 p024">
        <form class="contacts" method="post" id="contactForm">
            <fieldset>
                <div class="w100">
                    <legend class="required">Име:</legend>

                    <input type="text" name="name" id="name" data-msg="Въведете име" data-reg="^.{3,255}$">

                    <legend class="required">Телефон:</legend>
                    <input type="text" name="phone" id="phone" data-msg="Въведете валиден телефонен номер" data-reg="^\+?[0-9 ]{8,24}$">

                    <legend class="required">Е-mail:</legend>
                    <input type="text" name="email" id="email" data-msg="Въведете валиден email" data-reg="^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-\.]+[a-zA-Z\.]{2,7}$">

                    <legend class="required">Отностно</legend>
                    <select name="subject" id="subject" class="form-control" required="">
                        <option value="" selected="" disabled="" hidden="">Изберете...</option>
                        @foreach($subjects as $subject)
                        <option value="{{ $subject->id }}">{{ $subject->title }}</option>
                        @endforeach
                    </select>

                    <legend class="required">Съобщение:</legend>
                    <textarea name="body" id="body" data-msg="Въведената стойност е грешна или непълна" data-reg="^.|[\r\n]{3,}$"></textarea>
                </div>

                <div class="flexx">
                    <label class="checkbox"><input type="checkbox" name="IAgree" value="1" data-reg=":checked" data-msg="За да продължите трябва да приемете условията на сайта!"><span></span> Съгласен съм с <a href="/bg/общи-условия.html" target="_blank">условията на сайта.</a></label>
                    <button type="submit">Изпрати</button>
                </div>
            </fieldset>
        </form>
    </div>
    <div class="c2 p2">
        <div class="google-maps">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2933.781640931837!2d23.258805215350943!3d42.66598247916752!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40aa84b56d494005%3A0x614208208b0e7998!2z0LHRg9C7LiDigJ7QptCw0YAg0JHQvtGA0LjRgSBJSUnigJwgMTY4LCDQtdGCLjMg0L7RhCAzMSwgMTYxOCDQutCyLiDQntCy0YfQsCDQutGD0L_QtdC7LCDQodC-0YTQuNGP!5e0!3m2!1sbg!2sbg!4v1588255782670!5m2!1sbg!2sbg" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>

<script type="text/javascript">
    $('#contactForm').on('submit', function(event) {
        event.preventDefault();

        name = $('#name').val();
        email = $('#email').val();
        phone = $('#phone').val();
        subject = $('#subject').val();
        body = $('#body').val();

        $.ajax({
            url: "/submit",
            type: "POST",
            data: {
                "_token": "{{ csrf_token() }}",
                name: name,
                email: email,
                phone: phone,
                subject: subject,
                body: body,
            },
            success: function(response) {
                console.log(response);
            },
        });
    });
</script>

@endsection