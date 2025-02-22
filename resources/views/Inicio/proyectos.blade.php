<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
    <title>Mis Proyectos</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS CSS para animaciones -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        .project-card {
            margin-bottom: 2rem;
        }
        .project-image {
            max-height: 200px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    @include('partes.navbar')

    <section id="proyectos"class="container my-5">
        <h2 class="text-center mb-5" data-aos="fade-down">Mis Proyectos</h2>
        <div class="row">
            <!-- Proyecto 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card project-card shadow-sm">
                    <img src="{{ asset('img/proyecto1.jpg') }}" class="card-img-top project-image" alt="Proyecto 1">
                    <div class="card-body">
                        <h5 class="card-title">Proyecto 1</h5>
                        <p class="card-text">Descripción breve del proyecto 1. Una aplicación web que resuelve problemas específicos.</p>
                        <p>
                            <span class="badge bg-primary">Laravel</span>
                            <span class="badge bg-secondary">Vue.js</span>
                        </p>
                        <a href="https://github.com/tuusuario/proyecto1" target="_blank" class="btn btn-outline-primary">
                            <i class="bi bi-github"></i> Ver en GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card project-card shadow-sm">
                    <img src="{{ asset('img/proyecto2.jpg') }}" class="card-img-top project-image" alt="Proyecto 2">
                    <div class="card-body">
                        <h5 class="card-title">Proyecto 2</h5>
                        <p class="card-text">Descripción breve del proyecto 2. Un sistema de gestión y control.</p>
                        <p>
                            <span class="badge bg-success">React</span>
                            <span class="badge bg-info">Node.js</span>
                        </p>
                        <a href="https://github.com/tuusuario/proyecto2" target="_blank" class="btn btn-outline-primary">
                            <i class="bi bi-github"></i> Ver en GitHub
                        </a>
                    </div>
                </div>
            </div>

            <!-- Proyecto 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card project-card shadow-sm">
                    <img src="{{ asset('img/proyecto3.jpg') }}" class="card-img-top project-image" alt="Proyecto 3">
                    <div class="card-body">
                        <h5 class="card-title">Proyecto 3</h5>
                        <p class="card-text">Descripción breve del proyecto 3. Una aplicación móvil para gestionar tareas.</p>
                        <p>
                            <span class="badge bg-warning">Flutter</span>
                            <span class="badge bg-danger">Firebase</span>
                        </p>
                        <a href="https://github.com/tuusuario/proyecto3" target="_blank" class="btn btn-outline-primary">
                            <i class="bi bi-github"></i> Ver en GitHub
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true
        });
    </script>
</body>
</html>
