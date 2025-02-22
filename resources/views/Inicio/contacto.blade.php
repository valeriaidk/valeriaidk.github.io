<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
    <title>Contáctame</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS CSS (Animaciones) -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        .contact-button {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.2rem;
            padding: 10px 20px;
            border-radius: 8px;
            transition: transform 0.2s;
        }

        .contact-button:hover {
            transform: translateY(-5px);
        }

        .contact-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }
    </style>
</head>
<body>
    @include('partes.navbar')

    <section id="contacto"class="container my-5">
        <h2 class="text-center mb-4" data-aos="fade-down">Contáctame</h2>

        <div class="contact-container" data-aos="fade-up" data-aos-delay="100">
            <!-- Botón de Correo -->
            <a href="valeriaquezada6@hotmaill.com" class="btn btn-outline-primary contact-button">
                <i class="bi bi-envelope-fill"></i>
                valeriaquezada6@hotmaill.com
            </a>

            <!-- Botón de WhatsApp -->
            <a href="https://wa.me/51989166594" target="_blank" class="btn btn-outline-success contact-button">
                <i class="bi bi-whatsapp"></i>
                +51 989 166 594
            </a>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS (Animaciones) -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
</body>
</html>
