<!DOCTYPE html> 
<html lang="es">
<head>
    @include('partes.head')
    <title data-i18n="title">Home - Web Developer</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <style>
        body.light-mode {
            background-color: #fff;
            color: #000;
        }
        body.dark-mode {
            background-color: #121212;
            color: #fff;
        }
        .profile-img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
        }
        section {
            padding: 60px 0;
            min-height: 100vh;
        }
        .social-icons a {
            color: inherit;
            margin: 0 10px;
            font-size: 2rem;
        }
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 30vh; /* Reducido para menos espacio */
            margin-bottom: -30px; /* Acerca la imagen al texto */
        }

        .profile-img {
            width: 200px; /* Aumenta el tamaño de la imagen */
            height: auto;
            border-radius: 50%;
        }

        section {
            padding: 10px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 40vh; /* Reducido para menos espacio */
        }
    </style>
</head>

<body class="light-mode">
    @include('partes.navbar')
    
    <div id="inicio" class="container mt-5">
        <!-- Botones de Modo Oscuro/Claro e Idioma -->
        <div  class="d-flex justify-content-end mb-3">
            <button class="btn btn-outline-dark me-2" id="toggle-dark-mode">🌞/🌜</button>
            <div class="dropdown">
                <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    🌐 Idioma
                </button>
                <ul class="dropdown-menu" aria-labelledby="languageDropdown">
                    <li><a class="dropdown-item" href="#" onclick="setLanguage('es')">Español</a></li>
                    <li><a class="dropdown-item" href="#" onclick="setLanguage('en')">English</a></li>
                </ul>
            </div>
        </div>

        <!-- Imagen centrada -->
        <div class="image-container">
            <img src="{{ asset('img/ifoto-Photoroom.png') }}" alt="Imagen de Valeria Quezada" class="img-fluid profile-img">
        </div>

        <!-- Sección de Bienvenida centrada -->
        <section class="text-center">
            <h1 data-i18n="greeting">Hola! Soy Valeria Quezada,<br>Web Developer</h1>
            <p data-i18n="subtitle">Frontend</p>
            <a href="{{ asset('CV Naghely Valeria Quezada Barriga (1).pdf') }}" 
                class="btn btn-outline-dark" 
                download 
                data-i18n="contact-btn">
                📄 Descargar CV
            </a>

            <!-- Iconos de Redes Sociales -->
            <div class="social-icons mt-4">
                <a href="https://github.com/valeriaidk" target="_blank"><i class="bi bi-github"></i></a>
                <a href="https://www.linkedin.com/in/valeria-quezada-7a5552252/" target="_blank"><i class="bi bi-linkedin"></i></a>
            </div>
        </section>


        <!-- Secciones del Portafolio -->
        @include('Inicio.habilidades')
        @include('Inicio.experiencia')
        @include('Inicio.proyectos')
        @include('Inicio.educacion')
        @include('Inicio.contacto')
    </div>
    
    @include('partes.footer')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('a[href^="#"]').on('click', function(event) {
                var target = $(this.getAttribute('href'));
                if(target.length) {
                    event.preventDefault();
                    $('html, body').animate({
                        scrollTop: target.offset().top - 50
                    }, 500);
                }
            });
        });

        // Modo oscuro/claro
        document.getElementById('toggle-dark-mode').addEventListener('click', () => {
            document.body.classList.toggle('dark-mode');
        });

        // Cambio de idioma
        function setLanguage(lang) {
            const elements = document.querySelectorAll('[data-i18n]');
            elements.forEach(el => {
                const key = el.getAttribute('data-i18n');
                el.textContent = translations[lang][key] || key;
            });
        }

        const translations = {
            'es': {
                'title': 'Inicio - Desarrollador Web',
                'greeting': '¡Hola! Soy Valeria Quezada, Desarrolladora Web',
                'subtitle': 'Frontend',
                'contact-btn': '¡Contáctame!'
            },
            'en': {
                'title': 'Home - Web Developer',
                'greeting': 'Hi! I\'m Valeria Quezada, Web Developer',
                'subtitle': 'Frontend',
                'contact-btn': 'Contact me!'
            }
        };
    </script>
</body>
</html>
