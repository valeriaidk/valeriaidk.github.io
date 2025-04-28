@extends('partes.wrapper')

@section('contenido')
{{-- NAVBAR --}}
@include('partes.navbar')

{{-- INICIO --}}
<div class="container-fluid" id="inicio">
    <div class="container">
        <div class="row min-vh-100 align-items-center justify-content-center">
            <div class="col-md-6 text-center text-md-start">
                <div class="hero-content" data-aos="fade-right">
                    <div class="greeting-text mb-2">¡Hola! 👋</div>
                    <h1 class="display-4 fw-bold mb-4">
                        Soy <span class="text-gradient">Valeria</span>
                    </h1>
                    <h4 class="mb-4">
                        Apasionada por el <span class="text-gradient-secondary">Desarrollo Web</span>
                    </h4>
                    <p class="lead mb-4">
                        Desarrolladora web entusiasta en crear experiencias digitales únicas y funcionales.
                    </p>
                    <div class="d-flex gap-3 justify-content-center justify-content-md-start">
                        <a href="{{ asset('cv - Naghely valeria.pdf') }}" class="btn btn-primary btn-lg" download>
                            <i class="bi bi-file-earmark-arrow-down me-2"></i>Descargar CV
                        </a>
                        <a href="#contacto" class="btn btn-outline-primary btn-lg">
                            <i class="bi bi-envelope me-2"></i>Contactar
                        </a>
                    </div>
                    <div class="social-links mt-4">
                        <a href="https://github.com/valeriaquezada" class="social-link" target="_blank">
                            <i class="bi bi-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/valeriaquezada" class="social-link" target="_blank">
                            <i class="bi bi-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center" data-aos="fade-left">
                <div class="profile-image-container">
                    <img src="{{ asset('img/nv.jpeg') }}" class="profile-image" alt="Valeria Quezada">
                    <div class="profile-image-border"></div>
                    <div class="profile-image-glow"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .text-gradient {
        background: linear-gradient(45deg, var(--color-primary), var(--color-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .text-gradient-secondary {
        background: linear-gradient(45deg, var(--color-secondary), var(--color-accent));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .hero-content {
        padding: 2rem;
        position: relative;
    }

    .greeting-text {
        font-size: 1.2rem;
        color: var(--color-secondary);
        font-weight: 500;
        animation: wave 2s infinite;
    }

    .profile-image-container {
        position: relative;
        display: inline-block;
        padding: 1rem;
    }

    .profile-image {
        width: 300px;
        height: 300px;
        object-fit: cover;
        border-radius: 50%;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
        position: relative;
        z-index: 2;
    }

    .profile-image:hover {
        transform: scale(1.05);
    }

    .profile-image-border {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        border: 3px solid transparent;
        border-radius: 50%;
        background: linear-gradient(45deg, var(--color-primary), var(--color-secondary)) border-box;
        -webkit-mask: linear-gradient(#fff 0 0) padding-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: destination-out;
        mask-composite: exclude;
        animation: rotate 10s linear infinite;
        z-index: 1;
    }

    .profile-image-glow {
        position: absolute;
        top: -10px;
        left: -10px;
        right: -10px;
        bottom: -10px;
        background: radial-gradient(circle, var(--color-accent) 0%, transparent 70%);
        border-radius: 50%;
        opacity: 0.3;
        filter: blur(20px);
        animation: pulse 2s infinite;
        z-index: 0;
    }

    .social-links {
        display: flex;
        gap: 1.5rem;
        justify-content: center;
    }

    .social-link {
        color: var(--color-primary);
        font-size: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .social-link:hover {
        color: var(--color-secondary);
        transform: translateY(-3px);
    }

    .social-link::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 100%;
        background: radial-gradient(circle, var(--color-accent) 0%, transparent 70%);
        border-radius: 50%;
        opacity: 0;
        transition: opacity 0.3s ease;
        z-index: -1;
    }

    .social-link:hover::after {
        opacity: 0.2;
    }

    @keyframes rotate {
        from {
            transform: rotate(0deg);
        }
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes pulse {
        0% {
            transform: scale(1);
            opacity: 0.3;
        }
        50% {
            transform: scale(1.1);
            opacity: 0.5;
        }
        100% {
            transform: scale(1);
            opacity: 0.3;
        }
    }

    @keyframes wave {
        0% {
            transform: rotate(0deg);
        }
        10% {
            transform: rotate(14deg);
        }
        20% {
            transform: rotate(-8deg);
        }
        30% {
            transform: rotate(14deg);
        }
        40% {
            transform: rotate(-4deg);
        }
        50% {
            transform: rotate(10deg);
        }
        60% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(0deg);
        }
    }

    @media (max-width: 768px) {
        .hero-content {
            text-align: center;
            padding: 1rem;
        }

        .profile-image {
            width: 250px;
            height: 250px;
            margin-top: 2rem;
        }

        .social-links {
            justify-content: center;
            margin-top: 1.5rem;
        }

        .btn-lg {
            padding: 0.5rem 1rem;
            font-size: 1rem;
        }
    }

    @media (max-width: 576px) {
        .hero-content {
            padding: 0.5rem;
        }

        .profile-image {
            width: 200px;
            height: 200px;
        }

        .display-4 {
            font-size: 2.5rem;
        }

        .lead {
            font-size: 1rem;
        }

        .greeting-text {
            font-size: 1rem;
        }

        .d-flex {
            flex-direction: column;
            gap: 1rem !important;
        }

        .btn {
            width: 100%;
        }
    }

    @media (min-width: 992px) {
        .hero-content {
            padding: 3rem;
        }

        .profile-image {
            width: 350px;
            height: 350px;
        }
    }
</style>

{{-- INCLUIMOS LAS SECCIONES DESDE SUS ARCHIVOS --}}
@include('Inicio.habilidades')
@include('Inicio.experiencia')
@include('Inicio.proyectos')
@include('Inicio.contacto')

{{-- FOOTER --}}
<!-- @include('partes.footer') -->
@endsection
