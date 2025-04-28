<style>
    /* Estilos personalizados para las tarjetas de habilidades */
    .skill-card {
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 20px;
        background: linear-gradient(145deg, var(--color-lighter), #ffffff);
        border: none;
    }

    .skill-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .skill-card i {
        font-size: 3.5rem;
        background: linear-gradient(45deg, var(--color-primary), var(--color-secondary));
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    @media (max-width: 768px) {
        .skill-card i {
            font-size: 2.5rem;
        }

        .card-body {
            padding: 1.5rem !important;
        }

        .section-title {
            font-size: 2rem;
        }
    }

    @media (max-width: 576px) {
        .skill-card i {
            font-size: 2rem;
        }

        .card-body {
            padding: 1rem !important;
        }

        .section-title {
            font-size: 1.75rem;
        }

        .col-md-4 {
            padding: 0 0.5rem;
        }
    }

    .skill-progress {
        height: 8px;
        border-radius: 4px;
        background-color: var(--color-light);
        margin-top: 1rem;
    }

    .skill-progress-bar {
        background: linear-gradient(45deg, var(--color-primary), var(--color-secondary));
        border-radius: 4px;
    }
</style>

<section id="habilidades" class="container pt-5 mt-5">
    <h2 class="section-title text-center" data-aos="fade-down">Mis Habilidades</h2>
    
    <div class="row justify-content-center">
        <!-- HTML & CSS -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card h-100 shadow-sm skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-code-slash mb-3"></i>
                    <h5 class="fw-bold">HTML & CSS</h5>
                    <p class="text-muted">Interfaces web modernas y responsivas.</p>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" style="width: 90%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card h-100 shadow-sm skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-code mb-3"></i>
                    <h5 class="fw-bold">JavaScript</h5>
                    <p class="text-muted">Funcionalidades interactivas y dinámicas.</p>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Laravel -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="card h-100 shadow-sm skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-layers mb-3"></i>
                    <h5 class="fw-bold">Laravel</h5>
                    <p class="text-muted">Desarrollo backend profesional.</p>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Python -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="card h-100 shadow-sm skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-file-earmark-code mb-3"></i>
                    <h5 class="fw-bold">Python</h5>
                    <p class="text-muted">Automatización, scripts y machine learning.</p>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- SQL -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="500">
            <div class="card h-100 shadow-sm skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-database mb-3"></i>
                    <h5 class="fw-bold">SQL / MySQL</h5>
                    <p class="text-muted">Gestión y consultas de bases de datos.</p>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" style="width: 85%"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Git -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="600">
            <div class="card h-100 shadow-sm skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-git mb-3"></i>
                    <h5 class="fw-bold">Git</h5>
                    <p class="text-muted">Control de versiones y trabajo colaborativo.</p>
                    <div class="skill-progress">
                        <div class="skill-progress-bar" style="width: 80%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

