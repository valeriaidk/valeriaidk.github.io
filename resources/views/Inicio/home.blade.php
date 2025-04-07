@extends('partes.wrapper')

@section('contenido')
{{-- NAVBAR --}}
@include('partes.navbar')

{{-- INICIO --}}
<div class="container-fluid text-dark" id="inicio">
    <div class="row vh-100 align-items-center justify-content-center text-center">
        <div class="col-md-6">
            <h1 class="display-4 fw-bold">Hola, soy <span class="text-warning">Valeria</span></h1>
            <h4>Apasionada por el <span class="text-danger">Desarrollo Web</span></h4>
            <<a href="{{ asset('CV Naghely Valeria Quezada Barriga.pdf') }}" class="btn btn-outline-dark mt-3" download>
                <i class="bi bi-file-earmark-arrow-down"></i> Descargar CV
            </a>
            <div class="mt-3">
                <a href="https://github.com/valeriaquezada" class="text-dark fs-3 me-3"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/valeriaquezada" class="text-dark fs-3"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
        <div class="col-md-6">
            <img src="{{ asset('img/nv.jpeg') }}" class="img-fluid rounded-circle border border-warning" style="max-width: 300px;" alt="Avatar">
        </div>
    </div>
</div>

{{-- INCLUIMOS LAS SECCIONES DESDE SUS ARCHIVOS --}}
@include('Inicio.habilidades')
@include('Inicio.experiencia')
<!-- @include('Inicio.educacion') -->
@include('Inicio.proyectos')
@include('Inicio.contacto')

{{-- FOOTER --}}
@include('partes.footer')
@endsection
