@extends('layouts.app')

@section('title', 'Főoldal')

@section('content')
    <!-- Hero szekció -->
    <section id="home" class="hero-section-wrapper-2">
        <div class="hero-section hero-style-2">
            <div class="container">
                <div class="row align-items-end">
                    <div class="col-lg-6">
                        <div class="hero-content-wrapper">
                            <h4 class="wow fadeInUp" data-wow-delay=".2s">Tanösvény nyilvántartó</h4>
                            <h2 class="mb-30 wow fadeInUp" data-wow-delay=".4s">
                                Nemzeti parkok és tanösvények egy helyen
                            </h2>
                            <p class="mb-50 wow fadeInUp" data-wow-delay=".6s">
                                Az alkalmazásban a magyarországi tanösvények, települések és
                                nemzeti park igazgatóságok adatait tudod kezelni, megtekinteni,
                                diagramon elemezni, és admin felületen módosítani.
                            </p>
                            <div class="buttons">
                                <a href="{{ route('database.index') }}"
                                   class="button button-lg radius-10 wow fadeInUp"
                                   data-wow-delay=".7s">
                                    Tanösvények megtekintése
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image">
                            <img src="{{ asset('assets/img/hero/hero-2/hero-img.svg') }}"
                                 alt="Tanösvény"
                                 class="wow fadeInRight" data-wow-delay=".2s">
                            <img src="{{ asset('assets/img/hero/hero-2/paattern.svg') }}"
                                 alt="" class="shape shape-1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Rövid bemutató 3 oszlopban -->
    <section id="services" class="feature-section feature-style-2 pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-xl-7 col-lg-10 col-md-9">
                    <div class="section-title mb-60">
                        <h3 class="mb-15 wow fadeInUp" data-wow-delay=".2s">
                            Mit tud a rendszer?
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                            Az adatbázis három fő táblára épül: nemzeti park (np),
                            települések (telepules) és tanösvények (ut).
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".2s">
                        <div class="icon">
                            <i class="lni lni-map-marker"></i>
                        </div>
                        <div class="content">
                            <h5 class="mb-25">Nemzeti parkok</h5>
                            <p>Nyilvántartja, melyik tanösvény melyik nemzeti park igazgatósághoz tartozik.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-feature wow fadeInUp" data-wow-delay=".4s">
                        <div class="icon">
                            <i class="lni lni-home"></i>
                        </div>
                        <div class="content">
                            <h5 class="mb-25">Települések</h5>
                            <p>Településenként csoportosítja a tanösvényeket, könnyű kereshetőséggel.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-feature wow FadeInUp" data-wow-delay=".6s">
                        <div class="icon">
                            <i class="lni lni-graph"></i>
                        </div>
                        <div class="content">
                            <h5 class="mb-25">Statisztikák</h5>
                            <p>Diagram menüben látható lesz pl. összhossz, állomásszám, vezetett túrák aránya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
