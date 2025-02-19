<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head') <!-- Importa Bootstrap y otras configuraciones -->
</head>
<body>

    @include('partes.navbar') <!-- Barra de navegación (abajo, tipo macOS) -->

    <div class="container mt-5">
        <h1>Bienvenido a mi Portafolio</h1>
        <p>Aquí podrás ver mis proyectos, experiencia, educación y más.</p>
    </div>

    @include('partes.footer') <!-- Pie de página -->

    <!-- Bootstrap JS (Siempre antes de cerrar body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
