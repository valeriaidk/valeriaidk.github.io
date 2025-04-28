<!-- Google Font (Poppins) -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top w-100 z-2 custom-font">
    <div class="container">
    <a class="navbar-brand fw-bold" href="#" style="color: var(--color-primary);">
        <img src="{{ asset('logi.jpeg') }}" alt="Logo" style="height: 30px; width: auto; margin-right: 10px;">
    </a>

        <button class="navbar-toggler navbar-toggler-custom" type="button" data-bs-toggle="collapse" data-bs-target="#navContent" aria-controls="navContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#inicio" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#habilidades" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Habilidades</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#experiencia" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Experiencia</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#proyectos" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto" data-bs-toggle="collapse" data-bs-target=".navbar-collapse.show">Contacto</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
    .custom-font {
        font-family: 'Poppins', sans-serif;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    
    .navbar-brand {
        font-size: 1.5rem;
        padding: 0.5rem 0;
    }

    .brand-text {
        position: relative;
        padding: 0.5rem 0;
    }

    .brand-text::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background: linear-gradient(to right, var(--color-primary), var(--color-secondary));
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .brand-text:hover::after {
        transform: scaleX(1);
    }
    
    .navbar-toggler-custom {
        border: 2px solid var(--color-primary);
        border-radius: 8px;
        padding: 0.5rem;
        transition: all 0.3s ease;
    }

    .navbar-toggler-custom:hover {
        background-color: var(--color-primary);
    }

    .navbar-toggler-custom:hover .navbar-toggler-icon::before,
    .navbar-toggler-custom:hover .navbar-toggler-icon::after,
    .navbar-toggler-custom:hover .navbar-toggler-icon div {
        background-color: white;
    }

    .navbar-toggler-icon {
        background-image: none;
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
        height: 2px;
        background-color: var(--color-primary);
        border-radius: 2px;
        transition: all 0.3s ease;
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

    .nav-link {
        position: relative;
        color: var(--color-primary) !important;
        font-weight: 500;
        padding: 0.5rem 1rem;
        margin: 0 0.2rem;
        transition: all 0.3s ease;
    }

    .nav-link::after {
        content: '';
        position: absolute;
        width: 0;
        height: 2px;
        bottom: 0;
        left: 50%;
        background: linear-gradient(to right, var(--color-primary), var(--color-secondary));
        transition: all 0.3s ease;
        transform: translateX(-50%);
    }

    .nav-link:hover {
        color: var(--color-secondary) !important;
    }

    .nav-link:hover::after {
        width: 100%;
    }

    @media (max-width: 991px) {
        .navbar-collapse {
            background: rgba(255, 255, 255, 0.98);
            padding: 1rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-top: 1rem;
        }

        .nav-link {
            padding: 0.8rem 1rem;
            margin: 0.2rem 0;
            text-align: center;
        }

        .navbar-toggler-custom {
            margin-right: 1rem;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Cerrar el menú al hacer clic en un enlace
    const navLinks = document.querySelectorAll('.nav-link');
    const navbarCollapse = document.querySelector('.navbar-collapse');
    const navbarToggler = document.querySelector('.navbar-toggler');

    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        });
    });

    // Cerrar el menú al hacer clic fuera
    document.addEventListener('click', (e) => {
        if (!navbarCollapse.contains(e.target) && !navbarToggler.contains(e.target)) {
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
                navbarToggler.setAttribute('aria-expanded', 'false');
            }
        }
    });
});
</script>
