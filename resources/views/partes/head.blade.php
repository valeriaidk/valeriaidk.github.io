<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Valeria Quezada | Portafolio</title>

<!-- Favicon -->
<link rel="icon" type="image/png" href="{{ asset('vq.png') }}">
<link rel="apple-touch-icon" href="{{ asset('vq.png') }}">
<meta name="theme-color" content="#03045E">

<!-- Meta tags para SEO -->
<meta name="description" content="Portafolio de Valeria Quezada - Desarrolladora Web">
<meta name="keywords" content="desarrollo web, portafolio, Valeria Quezada, programación">
<meta name="author" content="Valeria Quezada">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Valeria Quezada | Portafolio">
<meta property="og:description" content="Portafolio de Valeria Quezada - Desarrolladora Web">
<meta property="og:image" content="{{ asset('vq.png') }}">

<!-- Twitter -->
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="{{ url()->current() }}">
<meta property="twitter:title" content="Valeria Quezada | Portafolio">
<meta property="twitter:description" content="Portafolio de Valeria Quezada - Desarrolladora Web">
<meta property="twitter:image" content="{{ asset('vq.png') }}">

<!-- Estilos -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    :root {
        --color-primary: #03045E;
        --color-secondary: #0077B6;
        --color-accent: #00B4D8;
        --color-light: #90E0EF;
        --color-lighter: #CAF0F8;
    }

    html {
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
        padding: 0;
        background: var(--color-lighter);
        color: var(--color-primary);
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
    }

    #particles-js {
        position: fixed;
        width: 100%;
        height: 100%;
        background-color: var(--color-lighter);
        z-index: 0;
    }

    .section-title {
        color: var(--color-primary);
        font-weight: 700;
        margin-bottom: 2rem;
        position: relative;
    }

    .section-title::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 50%;
        transform: translateX(-50%);
        width: 50px;
        height: 3px;
        background: var(--color-accent);
    }

    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border: none;
        border-radius: 15px;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: var(--color-primary);
        border-color: var(--color-primary);
    }

    .btn-primary:hover {
        background-color: var(--color-secondary);
        border-color: var(--color-secondary);
    }

    .btn-outline-primary {
        color: var(--color-primary);
        border-color: var(--color-primary);
    }

    .btn-outline-primary:hover {
        background-color: var(--color-primary);
        color: white;
    }

    /* Efectos de scroll */
    .fade-in {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .fade-in.visible {
        opacity: 1;
        transform: translateY(0);
    }

    .slide-in-left {
        opacity: 0;
        transform: translateX(-50px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .slide-in-left.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .slide-in-right {
        opacity: 0;
        transform: translateX(50px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .slide-in-right.visible {
        opacity: 1;
        transform: translateX(0);
    }

    .scale-in {
        opacity: 0;
        transform: scale(0.9);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .scale-in.visible {
        opacity: 1;
        transform: scale(1);
    }

    /* Efectos de hover */
    .hover-lift {
        transition: transform 0.3s ease;
    }

    .hover-lift:hover {
        transform: translateY(-5px);
    }

    .hover-glow {
        transition: box-shadow 0.3s ease;
    }

    .hover-glow:hover {
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }

    /* Efectos de fondo */
    .gradient-bg {
        background: linear-gradient(45deg, var(--color-primary), var(--color-secondary));
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }

    .typing::after {
        content: '|';
        animation: blink 1s infinite;
    }
    @keyframes blink {
        0%, 100% { opacity: 1; }
        50% { opacity: 0; }
    }
</style>