@extends('layouts.app')

@section('content')
    <style>
        .emh-bleed {
            position: relative;
            left: 50%;
            right: 50%;
            width: 100vw;
            margin-left: -50vw;
            margin-right: -50vw
        }

        .emh-hero .carousel-item {
            height: calc(100vh - 80px);
            min-height: 420px;
            background: #12162B
        }

        .emh-hero img {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transform: scale(1.12);
            transition: transform 8s ease-out
        }

        .emh-hero .carousel-item.active img {
            transform: scale(1)
        }

        .emh-hero .emh-shade {
            position: absolute;
            inset: 0;
            background: linear-gradient(90deg, rgba(18, 22, 43, .9) 0%, rgba(18, 22, 43, .45) 55%, rgba(18, 22, 43, .1) 100%)
        }

        .emh-hero .emh-text {
            position: absolute;
            inset: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 8%;
            color: #fff;
            max-width: 760px
        }

        .emh-hero h1 {
            font-weight: 800;
            letter-spacing: -.03em;
            font-size: clamp(2.2rem, 5vw, 4rem);
            line-height: 1.05;
            margin: 0 0 12px
        }

        .emh-hero h1 em {
            font-style: normal;
            color: #38BDF8
        }

        .emh-hero p {
            font-size: 1.15rem;
            color: rgba(255, 255, 255, .8);
            margin: 0
        }

        .emh-hero .emh-text>* {
            opacity: 0;
            transform: translateY(24px)
        }

        .emh-hero .carousel-item.active .emh-text>* {
            animation: emhRise .9s cubic-bezier(.2, .8, .2, 1) forwards
        }

        .emh-hero .carousel-item.active .emh-text>*:nth-child(2) {
            animation-delay: .15s
        }

        @keyframes emhRise {
            to {
                opacity: 1;
                transform: none
            }
        }

        .emh-hero .carousel-indicators [data-bs-target] {
            width: 34px;
            height: 5px;
            border: 0;
            border-radius: 99px;
            opacity: 1;
            background: rgba(255, 255, 255, .5);
            transition: all .4s
        }

        .emh-hero .carousel-indicators .active {
            width: 64px;
            background: #38BDF8
        }
    </style>

    <div class="emh-bleed">
        <div id="emhHero" class="emh-hero carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-indicators">
                <button type="button" data-bs-target="#emhHero" data-bs-slide-to="0" class="active"
                    aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#emhHero" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#emhHero" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active" data-bs-interval="5000">
                    <img alt="" src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=1800">
                    <div class="emh-shade"></div>
                    <div class="emh-text">
                        <h1>Bienvenido a <em>el sistema de gestión</em></h1>
                        <p>Gestiona tus matrículas de forma fácil y rápida.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="5000">
                    <img alt="" src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?q=80&w=1800">
                    <div class="emh-shade"></div>
                    <div class="emh-text">
                        <h1>Profesores y <em>módulos</em></h1>
                        <p>Organiza tu equipo docente y su oferta académica.</p>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="5000">
                    <img alt="" src="https://images.unsplash.com/photo-1427504494785-3a9ca7044f45?q=80&w=1800">
                    <div class="emh-shade"></div>
                    <div class="emh-text">
                        <h1>Alumnos siempre <em>al día</em></h1>
                        <p>Matricula y consulta todo en un solo lugar.</p>
                    </div>
                </div>

            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#emhHero" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span><span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#emhHero" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span><span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
@endsection
