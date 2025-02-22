<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
    <title>Mi Experiencia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        .experience-container {
            display: flex;
            align-items: center;
            margin-bottom: 2rem;
        }
        .experience-container:nth-child(even) {
            flex-direction: row-reverse;
        }
        .experience-card {
            flex: 1;
            padding: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: white;
            margin: 1rem;
        }
        .experience-image {
            flex: 1;
            max-width: 300px;
            margin: 1rem;
        }
        .experience-image img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    @include('partes.navbar')

    <div id="experiencia" class="container my-5">
        <h1 class="text-center mb-5">Mi Experiencia</h1>
        <div class="experience-container">
            <div class="experience-card">
                <h4>Desarrollador Web - Empressa Grupo Wesc</h4>
                <p><small>Ene 2024 - Actualidad</small></p>
                <p>Desarrollo de un sistema web de contabilidad desde cero utilizando tecnologías
                    como HTML, CSS, JavaScript y bases de datos MySQL. Implementé
                    funcionalidades para la gestión de ingresos, egresos, reportes financieros, y
                    control de cuentas. Además, me encargué de asegurar que la plataforma fuera
                    intuitiva y segura para los usuarios
                </p>
            </div>
            <div class="experience-image">
            <img src="{{ asset('img/grupowesc.jpeg') }}"alt="Imagen Empresa X">
            </div>
        </div>

        <!-- <div class="experience-container">
            <div class="experience-image">
                <img src="/images/empresa2.png" alt="Imagen Empresa Y">
            </div>
            <div class="experience-card">
                <h4>Practicante - Empresa Y</h4>
                <p><small>Jun 2021 - Dic 2021</small></p>
                <p>Apoyo en la automatización de procesos internos mediante scripts en Python, logrando reducir el tiempo de tareas repetitivas en un 50%.</p>
            </div>
        </div>

        <div class="experience-container">
            <div class="experience-card">
                <h4>Estudiante - Universidad Z</h4>
                <p><small>Mar 2018 - Dic 2022</small></p>
                <p>Licenciatura en Ingeniería de Software con un enfoque en desarrollo web y sistemas de inteligencia artificial.</p>
            </div>
            <div class="experience-image">
                <img src="/images/universidad.png" alt="Imagen Universidad Z">
            </div>
        </div> -->
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
