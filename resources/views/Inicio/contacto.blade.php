<section id="contacto" class="container pt-5 mt-5">
    <h2 class="section-title text-center" data-aos="fade-down">Contáctame</h2>
    
    <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
        <div class="col-md-8">
            <div class="card shadow-lg border-0 p-4">
                <div class="row g-4">
                    <!-- Correo -->
                    <div class="col-md-6">
                        <a href="mailto:valeriaquezada6@hotmail.com" class="text-decoration-none">
                            <div class="card h-100 border-0 bg-light">
                                <div class="card-body text-center p-4">
                                    <i class="bi bi-envelope-fill fs-1 mb-3" style="color: var(--color-primary);"></i>
                                    <h5 class="card-title">Correo Electrónico</h5>
                                    <p class="card-text">valeriaquezada6@hotmail.com</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- WhatsApp -->
                    <div class="col-md-6">
                        <a href="https://wa.me/51989166594" target="_blank" class="text-decoration-none">
                            <div class="card h-100 border-0 bg-light">
                                <div class="card-body text-center p-4">
                                    <i class="bi bi-whatsapp fs-1 mb-3" style="color: var(--color-primary);"></i>
                                    <h5 class="card-title">WhatsApp</h5>
                                    <p class="card-text">+51 989 166 594</p>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- Redes Sociales -->
                    <!-- <div class="col-12">
                        <div class="card border-0 bg-light">
                            <div class="card-body text-center p-4">
                                <h5 class="card-title mb-4">Sígueme en Redes Sociales</h5>
                                <div class="d-flex justify-content-center gap-4">
                                    <a href="https://github.com/valeriaquezada" class="text-decoration-none" target="_blank">
                                        <i class="bi bi-github fs-2" style="color: var(--color-primary);"></i>
                                    </a>
                                    <a href="https://www.linkedin.com/in/valeriaquezada" class="text-decoration-none" target="_blank">
                                        <i class="bi bi-linkedin fs-2" style="color: var(--color-primary);"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .card-body i {
        transition: transform 0.3s ease;
    }

    .card:hover .card-body i {
        transform: scale(1.1);
    }

    .card-title {
        color: var(--color-primary);
        font-weight: 600;
    }

    .card-text {
        color: var(--color-secondary);
    }

    @media (max-width: 768px) {
        .col-md-8 {
            padding: 0 1rem;
        }

        .card {
            margin-bottom: 1rem;
        }

        .card-body {
            padding: 1.5rem !important;
        }

        .fs-1 {
            font-size: 2.5rem !important;
        }

        .fs-2 {
            font-size: 2rem !important;
        }
    }

    @media (max-width: 576px) {
        .col-md-8 {
            padding: 0 0.5rem;
        }

        .card-body {
            padding: 1rem !important;
        }

        .fs-1 {
            font-size: 2rem !important;
        }

        .fs-2 {
            font-size: 1.75rem !important;
        }

        .card-title {
            font-size: 1.1rem;
        }

        .card-text {
            font-size: 0.9rem;
        }

        .gap-4 {
            gap: 1.5rem !important;
        }
    }
</style>

<script>
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const offset = 80;
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                window.scrollTo({
                    top: target.offsetTop - offset,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>
