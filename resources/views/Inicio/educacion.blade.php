<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
    <title>Mi Educación</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    
    <!-- AOS CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
</head>

<body>
    @include('partes.navbar')

    <section id="educacion" class="container my-5">
        <h2 class="text-center mb-5" data-aos="fade-down">Mi Educación</h2>
        <div class="timeline">

            <!-- Jardín -->
            <div class="timeline-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="timeline-icon bg-primary text-white rounded-circle me-4">
                    <i class="bi bi-flower2 fs-4"></i>
                </div>
                <div>
                    <h4 class="mb-1">2009 - 2011: Jardín</h4>
                    <p class="mb-0"><strong>Jardín Alfredo Pinillos Goicochea</strong></p>
                    <small>José Sabogal 367, Trujillo 13006</small>
                </div>
            </div>

            <!-- Colegio -->
            <div class="timeline-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="timeline-icon bg-success text-white rounded-circle me-4">
                    <i class="bi bi-mortarboard fs-4"></i>
                </div>
                <div>
                    <h4 class="mb-1">2012 - 2022: Colegio</h4>
                    <p class="mb-0"><strong>Institución Educativa Modelo</strong></p>
                    <small>Av Ejercito 157, Trujillo 13001</small>
                </div>
            </div>

            <!-- Instituto -->
            <div class="timeline-item d-flex align-items-start mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="timeline-icon bg-danger text-white rounded-circle me-4">
                    <i class="bi bi-building fs-4"></i>
                </div>
                <div>
                    <h4 class="mb-1">2023 - 2025: Instituto</h4>
                    <p class="mb-0"><strong>Senati</strong></p>
                    <small>Parque Industrial Lt. 28A, La Esperanza</small>
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
            duration: 1000,  // Duración de la animación (ms)
            easing: 'ease-in-out',  // Efecto de la animación
            once: true,  // Animar solo una vez al hacer scroll
        });
    </script>
</body>
</html>
