<style>
    /* Estilos personalizados para las tarjetas de habilidades */
    .skill-card {
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 20px;
        background: linear-gradient(145deg, #ffffff, #f9f9f9);
    }

    .skill-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
    }

    .skill-card i {
        font-size: 3.5rem;
    }
</style>

<section id="habilidades" class="container pt-5 mt-5 text-center">
<h2 class="mb-5 display-5 fw-bold" style="color: #ffc107;" data-aos="fade-down">Mis Habilidades</h2>
    <div class="row justify-content-center">
        <!-- HTML & CSS -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-code-slash text-primary mb-3"></i>
                    <h5 class="fw-bold">HTML & CSS</h5>
                    <p class="text-muted">Interfaces web modernas y responsivas.</p>
                </div>
            </div>
        </div>

        <!-- JavaScript -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-code text-warning mb-3"></i>
                    <h5 class="fw-bold">JavaScript</h5>
                    <p class="text-muted">Funcionalidades interactivas y dinámicas.</p>
                </div>
            </div>
        </div>

        <!-- Laravel -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-layers text-success mb-3"></i>
                    <h5 class="fw-bold">Laravel</h5>
                    <p class="text-muted">Desarrollo backend profesional.</p>
                </div>
            </div>
        </div>

        <!-- Python -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="400">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-file-earmark-code text-secondary mb-3"></i>
                    <h5 class="fw-bold">Python</h5>
                    <p class="text-muted">Automatización, scripts y machine learning.</p>
                </div>
            </div>
        </div>

        <!-- SQL -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="500">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-database text-danger mb-3"></i>
                    <h5 class="fw-bold">SQL / MySQL</h5>
                    <p class="text-muted">Gestión y consultas de bases de datos.</p>
                </div>
            </div>
        </div>

        <!-- Git -->
        <div class="col-md-4 mb-4" data-aos="zoom-in" data-aos-delay="600">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body py-5">
                    <i class="bi bi-git text-dark mb-3"></i>
                    <h5 class="fw-bold">Git</h5>
                    <p class="text-muted">Control de versiones y trabajo colaborativo.</p>
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

