@extends('layouts.app')

@section('title', 'Blog')

@section('content')

<section class="hero">
    <h1>Hero</h1>
</section>

<div class="container">

    <section class="interested">
        <h2>Interested</h2>
    </section>

    <section class="ce-mark">
        <h2>CE mark</h2>
    </section>

    <section class="services">
        <h2>Services</h2>
    </section>
</div>

<section class="clients">
    <div class="container">
        <h2>Clients</h2>
        <div class="split">
            <div class="c1">
                <img src="/images/actavis.png" alt="Actavis">
            </div>
            <div class="c1">
                <img src="/images/actavis.png" alt="Actavis">
            </div>
            <div class="c1">
                <img src="/images/actavis.png" alt="Actavis">
            </div>
            <div class="c1">
                <img src="/images/actavis.png" alt="Actavis">
            </div>
            <div class="c1">
                <img src="/images/actavis.png" alt="Actavis">
            </div>
        </div>
    </div>
</section>

<div class="container">
    <section class="contact">
        <h2>Contact</h2>
    </section>
</div>


@endsection