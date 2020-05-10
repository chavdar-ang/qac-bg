@extends('layouts.app')

@section('title', 'Качеството - реално бъдеще')

@section('content')

<script type="application/ld+json">
    {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "Qac Ltd/",
        "url": "https://qac-bg.com",
        "sameAs": [
            "https://www.facebook.com/QACbg"
        ],
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "168 Tsar Boris 3 blvd.",
            "addressRegion": "Sofia",
            "postalCode": "1632",
            "addressCountry": "BG"
        }
    }
</script>

<!-- main-title -->
<div class="slider">
    <div class="width-center">
        <div class="text c2">
            <h1>Подкрепяме бизнеса по пътя към успешната сертификация</h1>
            <!-- <div class="line"></div> -->
            <p>Над 23 години помагаме на бизнеса като му осигуряваме достъп до европейския пазар.</p>
            <br />
            <a class="submit" href="{{ route('contacts.show') }}"> запитване</a>
        </div><div class="cert c2 ">
            <img src="/images/cert.jpg" alt="">
        </div>
    </div>
</div>
<!-- main-title-end -->

<!-- services -->
<h1 class="services-title">Нашите услуги</h1>

<div class="services " id="services">
    <section class="flex">
        <div class="part">
            <div class="info ce">
                <a href="#">
                    <img class="icon" src="/svg/CE.svg" alt="">
                    <h2> CE маркировка </h2>
                    <p>Ние ви помагаме да постигнете съответствие с приложимите европейски директиви и регламенти за продуктова безопасност.</p><br />
                </a>
            </div>
            <div class="button c">
                <p><b>Вземете Вашата декларация за съответствие сега</b></p>
                <br/>
                <a class="submit" href="{{ route('contacts.show') }}">Запитване » </a>
            </div>
        </div>
        <div class="part mrg">
            <div class="info ce">
                <a href="#">
                <img class="icon" src="/svg/iso.svg" alt="">
                <h2>Внедряване на ISO стандарти</h2>
                <p>За организациите, които искат да подобрят качеството на своите продукти и услуги и последователно да отговарят на очакванията на клиентите си, ние имаме отговор.</p><br />
                </a>
            </div>
            <div class="button c">
                <p><b> Ние Ви гарантираме успешна ISO сертификация</b></p>
                <br/>
                <a class="submit" href="{{ route('contacts.show') }}">Запитване » </a>
            </div>
        </div>
    </section>
</div>
<!-- services-end -->

<!-- QAS-CE-MARK -->
<div class="qas-gradient">
    <section class="row">
        <div class="CE-content">
            <h1>Маркировка CE</h1>
            <h3>Как да отговаряте на условията на <strong>(500 милионния) европейския пазар?</strong></h3>
            <ul>
                <li>» Нашият екип ще Ви води през целия процес </li><br />
                <li>» Даваме насоки без да Ви затрупваме с правни жаргони и излишна техническа документация </li><br />
                <li>» Предоставяме Ви точна и безпристрастна информация, съобразена с действащото законодателство </li><br />
                <li>» Ние предлагаме прагматичен и икономически ефективен подход за постигане на CE маркировка и помощ за спазване на изискванията за продуктите </li>
            </ul>

            <!-- <a class="submit" href="{{ route('contacts.show') }}">Изпратете запитване</a> &nbsp; -->
            <!-- <a class="submit-border" href="{{ route('contacts.show') }}">Научeте повече</a> -->
        </div>
        <div class="stars">
            <img src="/images/ce-mark-tr.png" alt="">
        </div>
    </section>
</div>
<!-- QAS-CE-MARK-END -->

<!-- suggestion -->
<!-- <h1 class="suggestions-title">За да успее бизнесът Ви предлагаме</h1>

<div class="fixed">
    <section class="container-fixed">
        <div class="bg-gray c2 p2">
            <h2>Бизнес консултации</h2>
            <p>
                За повече от 20 годишния опит сме консултирали внедряването на редица международни стандарти и публикации на НАТО от стотици фирми.
                Някои от тях използват регулярни консултации и одит за осигуряване на продължаващото свое развитие.
            </p>
        </div><div class="bg-lightorange c2 p2">
            <div></div>
            <h2>Практически обучения</h2>
            <p>
                Удовлетворяваме Вашия интерес и необходимост от знания и умения на Вашите специалисти чрез специализирани обучения за придобиване на ключови компетенции.
                Високите оценки на обучените от нас над 4500 специалисти потвърждават качеството на нашите курсове.

            </p>
        </div>
    </section>
</div> -->
<!-- suggestion-end -->

<!-- PARTNERS -->
<div class="partners">
    <h1>Фирмите, които ни се довериха</h1>
    <div class="c4 p2">
        <img src="/images/parners/actavis.png" alt="">
    </div>
    <div class="c4 p2">
        <img src="/images/parners/aec.png" alt="">
    </div>
    <div class="c4 p2">
        <img src="/images/parners/glassco.png" alt="">
    </div>
    <div class="c4 p2">
        <img src="/images/parners/kentamed.png" alt="">
    </div>

    <div class="c3 p2">
        <img src="/images/parners/kontrax.png" alt="">
    </div>
    <div class="c3 p2">
        <img src="/images/parners/ochna_optika.png" alt="">
    </div>
    <div class="c3 p2">
        <img src="/images/parners/persi.png" alt="">
    </div>
</div>
<!-- PARTNERS-END -->

@endsection