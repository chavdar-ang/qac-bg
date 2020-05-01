@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<!-- main-title -->
<div class="slider">
    <div class="width-center">
        <div class="text c2 p2">
            <h1>Подкрепяме бизнеса по пътя към успешната сертификация</h1>
            <div class="line"></div>
            <p>Повече от 20 години изпълняваме тази мисия чрез нашите консултантски услуги и курсове и обучение</p>
            <a class="submit" href="{{ route('contacts.show') }}">направи запитване</a>
        </div><div class="cert c2 ">
            <img src="/images/cert.jpg" alt="">
        </div>
    </div>
</div>
<!-- main-title-end -->

<!-- services -->
<h1 class="services-title">Нашите услуги</h1>
<hr class="hr-line">

<div class="services" id="services">
    <section class="grid">
        <div class="index-icon ce">
            <h2>Подготовка за продуктова сертификация</h2>
            <ul>
                <li>маркировка CE</li>
                <li>маркировка GS</li>
                <li>и други</li>
            </ul>
            <br />
            <p>Покрийте задължителните условия за пускането на продуктите Ви на пазара на Европейското и световното икономическо пространство. </p>

        </div>
        <div class="index-icon iso">
            <h2>Внедряване на международни стандарти</h2>
            <ul>
                <li>ISO 9001</li>
                <li>ISO 13485</li>
                <li>ISO 27001</li>
                <li>ISO 14001</li>
            </ul>
        <a href="">﹥ Внедряването на кои международни стандарти подпомагаме?</a>

        </div>   
        <div class="index-icon aqap">
            <h2>Внедряване на изискванията на НАТО</h2>
            <ul>
                <li>AQAP 2110</li>
            </ul>
            <p>Какви са изискванията НАТО към производителите и доставяните изделия за отбраната и как да ги изпълните? </p>
            <br />
            <br />
            <a href="{{ route('contacts.show') }}" class="red submit">Свържи се с нас</a>
        </div>
    </section>
</div>
<!-- services-end -->

<!-- suggestion -->
<h1 class="suggestions-title">За да успее бизнесът Ви предлагаме</h1>
<hr class="hr-line">

<div class="fixed">
    <section class="container-fixed">
        <div class="bg-gray">
            <h2>Бизнес консултации</h2>
            <p> 
                За повече от 20 годишния опит сме консултирали внедряването на редица международни стандарти и публикации на НАТО от стотици фирми.
                Някои от тях използват регулярни консултации и одит за осигуряване на продължаващото свое развитие.
            </p>
        </div>
        <div class="bg-lightorange">
            <h2>Практически обучения</h2>
            <p> 
                Удовлетворяваме Вашия интерес и необходимост от знания и умения на Вашите специалисти чрез специализирани обучения за придобиване на ключови компетенции.
                Високите оценки на обучените от нас над 4500 специалисти потвърждават качеството на нашите курсове.

            </p>
        </div>
    </section>
</div>
<!-- suggestion-end -->

<!-- US -->
<section class="us">
    <h1>Защо да работите с нас?</h1>
    <hr class="hr-line">
    <p>Всички проекти по внедряване на системи за управление, подготовка за сертификация на продукти и обучения, изпълнявани от "Кю Ей Си" ООД се реализират в условията на изградена и сертифицирана система за управление на качеството. </p>
</section>
<!-- US-end -->

<!-- QAS-CE-MARK -->
    <div class="qas-gradient">
        <section class="row">
            <div class="CE-content">
                <h1>Маркировка CE</h1>
                <h3>Как да отговаряте на условията на <strong>(500 милионния) европейския пазар?</strong></h3>
                <ul>
                    <li>﹥ Нашият екип ще Ви води през целия процес </li><br/>
                    <li>﹥ Даваме насоки без да Ви затрупваме с правни жаргони и излишна техническа документация </li><br/>
                    <li>﹥ Предоставяме Ви точна и безпристрастна информация, съобразена с действащото законодателство </li><br/>
                    <li>﹥ Ние предлагаме прагматичен и икономически ефективен подход за постигане на CE маркировка и помощ за спазване на изискванията за продуктите </li>
                </ul>
                <a class="submit" href="{{ route('contacts.show') }}">Изпратете запитване</a> &nbsp;
                <a class="submit-border" href="{{ route('contacts.show') }}">Научeте повече</a>
            </div>
            <div class="stars">
                <img src="/images/ce-mark-tr.png" alt="">
            </div>
        </section>
    </div>
<!-- QAS-CE-MARK-END -->

<!-- PARTNERS -->   
    <div class="partners">
        <h1>Фирмите, които ни се довериха</h1>
        <hr class="hr-line">
        <div class="c4 p2">
            <img src="/images/parners/actavis.png" alt="">
        </div><div class="c4 p2">
            <img src="/images/parners/aec.png" alt="">
        </div><div class="c4 p2">
            <img src="/images/parners/glassco.png" alt="">
        </div><div class="c4 p2">
            <img src="/images/parners/kentamed.png" alt="">
        </div>

        <div class="c3 p2">
            <img src="/images/parners/kontrax.png" alt="">
        </div><div class="c3 p2">
            <img src="/images/parners/ochna_optika.png" alt="">
        </div><div class="c3 p2">
            <img src="/images/parners/persi.png" alt="">
        </div>
    </div>
<!-- PARTNERS-END -->

@endsection