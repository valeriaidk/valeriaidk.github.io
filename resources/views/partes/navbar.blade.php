<!-- Google Font (Poppins) -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-transparent fixed-top w-100 z-2 custom-font">
    <div class="container">
        <a class="navbar-brand fw-bold text-warning" href="#">Valeria</a>
        <button class="navbar-toggler navbar-toggler-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffc107;" href="#inicio">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffc107;" href="#habilidades">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffc107;" href="#experiencia">Experiencia</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" style="color: #ffc107;" href="#educacion">Educación</a>
                </li> -->
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffc107;" href="#proyectos">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #ffc107;" href="#contacto">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>



<style>
    .custom-font {
    font-family: 'Poppins', sans-serif;
}
.navbar-toggler-custom {
    border: 2px solid #ffc107; /* Color del borde */
    border-radius: 8px;        /* Opcional: bordes redondeados */
}

.navbar-toggler-icon {
    background-image: none; /* Elimina el ícono por defecto */
    width: 24px;
    height: 18px;
    position: relative;
}

.navbar-toggler-icon::before,
.navbar-toggler-icon::after,
.navbar-toggler-icon div {
    content: '';
    position: absolute;
    left: 0;
    width: 100%;
    height: 3px;
    background-color: #ffc107;
    border-radius: 2px;
}

.navbar-toggler-icon::before {
    top: 0;
}

.navbar-toggler-icon::after {
    bottom: 0;
}

.navbar-toggler-icon div {
    top: 50%;
    transform: translateY(-50%);
}
</style>
