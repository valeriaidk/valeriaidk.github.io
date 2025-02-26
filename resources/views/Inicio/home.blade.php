<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
    <title>Home - Web Developer</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        /* Modos claro y oscuro */
        body.light-mode {
            background-color: #fff;
            color: #000;
        }
        body.dark-mode {
            background-color: #121212;
            color: #fff;
        }
        
        /* Contenedor de imagen de perfil */
        .image-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 30vh;
            margin-bottom: -30px;
        }
        .profile-img {
            width: 200px;
            height: auto;
            border-radius: 50%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .profile-img:hover {
            transform: scale(1.05);
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
        }

        /* Estilo general para las secciones */
        section {
            padding: 20px 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 40vh;
        }

        /* Botón de Descargar CV */
        .btn-cv {
            background-color: #ff6b6b;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 50px;
            font-weight: bold;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: transform 0.3s, box-shadow 0.3s, background-color 0.3s;
        }
        .btn-cv:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            background-color: #e63946;
        }
        /* Iconos de Redes Sociales sin cambios de color */
        .social-icons a {
            display: inline-flex;
            justify-content: center;
            align-items: center;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin: 0 10px;
            font-size: 2rem;
            color: inherit; /* Mantiene el color original del ícono */
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .social-icons a:hover {
            transform: scale(1.2);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        /* Navbar tipo Mac Dock */
        .navbar-dock {
            background: rgba(52, 58, 64, 0.9);
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
            display: flex;
            justify-content: center;
            backdrop-filter: blur(10px);
            border-top: 1px solid rgba(255,255,255,0.2);
        }
        .navbar-dock .nav-link {
            color: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            margin: 0 15px;
            padding: 10px;
        }
        .navbar-dock .nav-link:hover {
            transform: scale(1.6);
            box-shadow: 0 8px 16px rgba(0,0,0,0.3);
        }
    </style>
</head>

<body class="light-mode">
    @include('partes.navbar')
    
    <div id="inicio" class="container mt-5">
        <!-- Botones de Modo Oscuro/Claro e Idioma -->
        <div class="d-flex justify-content-end mb-3">
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
            <img src="{{ asset('img/nv.jpeg') }}" alt="Imagen de Valeria Quezada" class="img-fluid profile-img">
        </div>

        <!-- Sección de Bienvenida -->
        <section class="text-center">
            <h1>Hola! Soy Valeria Quezada,<br>Web Developer</h1>
            <p>Frontend</p>
            
            <!-- Botón de Descargar CV -->
            <a href="{{ asset('CV_Naghely_Valeria_Quezada_Barriga.pdf') }}" 
               class="btn-cv" download>
                <i class="bi bi-file-earmark-arrow-down"></i> Descargar CV
            </a>
            
            <!-- Iconos de Redes Sociales (Solo Íconos sin cambio de color) -->
            <div class="social-icons mt-4">
                <a href="https://github.com/valeriaidk" target="_blank" aria-label="GitHub">
                    <img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" 
                        alt="GitHub" width="50" height="50">
                </a>
                <a href="https://www.linkedin.com/in/valeria-quezada-7a5552252/" target="_blank" aria-label="LinkedIn">
                    <img src="https://cdn-icons-png.flaticon.com/512/174/174857.png" 
                        alt="LinkedIn" width="50" height="50">
                </a>
            </div>

        </section>
    </div>
    
    <!-- Incluye las demás secciones -->
    @include('Inicio.habilidades')
    @include('Inicio.experiencia')
    @include('Inicio.proyectos')
    @include('Inicio.educacion')
    @include('Inicio.contacto')
    
    @include('partes.footer')
    
    <!-- Scripts: Bootstrap y jQuery para scroll suave -->
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
