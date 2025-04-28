<style>
    .project-card {
        position: relative;
        overflow: hidden;
        border-radius: 15px;
        background: linear-gradient(145deg, var(--color-lighter), #ffffff);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .project-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
    }

    .project-image {
        position: relative;
        overflow: hidden;
        border-radius: 15px 15px 0 0;
    }

    .project-image img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        transition: transform 0.5s ease;
    }

    .project-card:hover .project-image img {
        transform: scale(1.1);
    }

    .project-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(to bottom, transparent, rgba(0, 0, 0, 0.7));
        opacity: 0;
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .project-card:hover .project-overlay {
        opacity: 1;
    }

    .project-content {
        padding: 1.5rem;
    }

    .project-title {
        color: var(--color-primary);
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .project-description {
        color: var(--color-secondary);
        font-size: 0.9rem;
        margin-bottom: 1rem;
    }

    .project-tags {
        display: flex;
        gap: 0.5rem;
        flex-wrap: wrap;
        margin-bottom: 1rem;
    }

    .project-tag {
        background: linear-gradient(45deg, var(--color-primary), var(--color-secondary));
        color: white;
        padding: 0.3rem 0.8rem;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 500;
    }

    .project-link {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        color: var(--color-primary);
        text-decoration: none;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .project-link:hover {
        color: var(--color-secondary);
        transform: translateX(5px);
    }

    .project-link i {
        transition: transform 0.3s ease;
    }

    .project-link:hover i {
        transform: translateX(5px);
    }

    @media (max-width: 768px) {
        .project-image img {
            height: 180px;
        }

        .project-content {
            padding: 1rem;
        }

        .project-title {
            font-size: 1.1rem;
        }

        .project-description {
            font-size: 0.85rem;
        }

        .project-tag {
            font-size: 0.75rem;
            padding: 0.2rem 0.6rem;
        }
    }

    @media (max-width: 576px) {
        .project-image img {
            height: 160px;
        }

        .project-content {
            padding: 0.8rem;
        }

        .project-title {
            font-size: 1rem;
        }

        .project-description {
            font-size: 0.8rem;
        }

        .project-tag {
            font-size: 0.7rem;
            padding: 0.15rem 0.5rem;
        }

        .col-md-4 {
            padding: 0 0.5rem;
        }
    }
</style>

<section id="proyectos" class="container pt-5 mt-5">
    <h2 class="section-title text-center" data-aos="fade-down">Mis Proyectos</h2>
    
    <div class="row justify-content-center">
        <!-- Proyecto 1 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('img/grupowesc.jpeg') }}" alt="Sistema de contabilidad">
                    <div class="project-overlay">
                        <a href="https://github.com/Alvarado321/GRUPOWESC-SAC.git" target="_blank" class="btn btn-light">
                            Ver Proyecto
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <h5 class="project-title">Sistema de contabilidad</h5>
                    <p class="project-description">Sistema de gestión empresarial con Laravel</p>
                    <div class="project-tags">
                        <span class="project-tag">Laravel</span>
                        <span class="project-tag">MySQL</span>
                        <span class="project-tag">Bootstrap</span>
                    </div>
                    <a href="https://github.com/Alvarado321/GRUPOWESC-SAC.git" target="_blank" class="project-link">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- Proyecto 2 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('img/detec.jpg') }}" alt="Detector de Rostro">
                    <div class="project-overlay">
                        <a href="https://github.com/Alvarado321/RISAI.git" target="_blank" class="btn btn-light">
                            Ver Proyecto
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <h5 class="project-title">Detector de Rostro y Objetos</h5>
                    <p class="project-description">Aplicación web moderna usando Python</p>
                    <div class="project-tags">
                        <span class="project-tag">Python</span>
                        <span class="project-tag">OpenCV</span>
                        <span class="project-tag">Machine Learning</span>
                    </div>
                    <a href="https://github.com/Alvarado321/RISAI.git" target="_blank" class="project-link">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- Proyecto 3 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('img/jo.jpg') }}" alt="Sistema de Joyería">
                    <div class="project-overlay">
                        <a href="https://github.com/valeriaidk/Joyeria.git" target="_blank" class="btn btn-light">
                            Ver Proyecto
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <h5 class="project-title">Sistema de Joyería</h5>
                    <p class="project-description">Aplicación web desarrollada con HTML</p>
                    <div class="project-tags">
                        <span class="project-tag">HTML</span>
                        <span class="project-tag">CSS</span>
                        <span class="project-tag">JavaScript</span>
                    </div>
                    <a href="https://github.com/valeriaidk/Joyeria.git" target="_blank" class="project-link">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- Proyecto 4 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('img/dino2.jpg') }}" alt="Sistema de Ferretería">
                    <div class="project-overlay">
                        <a href="https://github.com/valeriaidk/Ferreteria.git" target="_blank" class="btn btn-light">
                            Ver Proyecto
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <h5 class="project-title">Sistema de Ferretería</h5>
                    <p class="project-description">Aplicación web desarrollada con HTML</p>
                    <div class="project-tags">
                        <span class="project-tag">HTML</span>
                        <span class="project-tag">CSS</span>
                        <span class="project-tag">JavaScript</span>
                    </div>
                    <a href="https://github.com/valeriaidk/Ferreteria.git" target="_blank" class="project-link">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- Proyecto 5 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
            <div class="project-card">
                <div class="project-image">
                    <img src="{{ asset('img/gestor-de-contrasenas.png') }}" alt="Gestor de Contraseñas">
                    <div class="project-overlay">
                        <a href="https://github.com/valeriaidk/GestionContrasena.git" target="_blank" class="btn btn-light">
                            Ver Proyecto
                        </a>
                    </div>
                </div>
                <div class="project-content">
                    <h5 class="project-title">Gestor de Contraseñas</h5>
                    <p class="project-description">App móvil desarrollada con Firebase</p>
                    <div class="project-tags">
                        <span class="project-tag">Firebase</span>
                        <span class="project-tag">React Native</span>
                        <span class="project-tag">JavaScript</span>
                    </div>
                    <a href="https://github.com/valeriaidk/GestionContrasena.git" target="_blank" class="project-link">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const offset = 80; // altura del navbar
      const target = document.querySelector(this.getAttribute('href'));
      if (target) {
        window.scrollTo({
          top: target.offsetTop - offset,
          behavior: 'smooth'
        });
      }
    });
</script>
