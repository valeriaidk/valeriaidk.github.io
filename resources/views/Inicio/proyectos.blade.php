<section id="proyectos" class="container pt-5 mt-5 text-center">
<h2 class="mb-5 display-5 fw-bold" style="color: #ffc107;" data-aos="fade-down">Mis Proyectos</h2>
    <div class="row justify-content-center">
        <!-- Proyecto 1 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card shadow-lg border-0 h-100">
                <img src="{{ asset('img/grupowesc.jpeg') }}" class="card-img-top rounded-top" alt="Proyecto 1">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Sistema de contabilidad</h5>
                    <p class="card-text">Sistema de gestión empresarial con Laravel </p>
                    <p>
                        <span class="badge bg-primary">Laravel</span>
                        <!-- <span class="badge bg-secondary">Vue.js</span> -->
                    </p>
                    <a href="https://github.com/Alvarado321/GRUPOWESC-SAC.git" target="_blank" class="btn btn-outline-dark mt-2">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- Proyecto 2 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card shadow-lg border-0 h-100">
                <img src="{{ asset('img/detec.jpg') }}" class="card-img-top rounded-top" alt="Proyecto 2">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Detector de Rostro, Objetos y Graficos</h5>
                    <p class="card-text">Aplicación web moderna usando Python </p>
                    <p>
                        <span class="badge bg-success">Python</span>
                        <!-- <span class="badge bg-info text-dark">Node.js</span> -->
                    </p>
                    <a href="https://github.com/Alvarado321/RISAI.git" target="_blank" class="btn btn-outline-dark mt-2">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>

        <!-- Proyecto 3 -->
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card shadow-lg border-0 h-100">
                <img src="{{ asset('img/jo.jpg') }}" class="card-img-top rounded-top" alt="Proyecto 3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Sistema de Joyeria</h5>
                    <p class="card-text">Aplicación web desarrollada con Html</p>
                    <p>
                        <span class="badge bg-warning text-dark">Html</span>
                        <!-- <span class="badge bg-danger">Firebase</span> -->
                    </p>
                    <a href="https://github.com/valeriaidk/Joyeria.git" target="_blank" class="btn btn-outline-dark mt-2">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card shadow-lg border-0 h-100">
                <img src="{{ asset('img/dino2.jpg') }}" class="card-img-top rounded-top" alt="Proyecto 3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Sistema de Ferreteía</h5>
                    <p class="card-text">Aplicación web desarrollada con Html</p>
                    <p>
                        <span class="badge bg-warning text-dark">Html</span>
                        <!-- <span class="badge bg-danger">Firebase</span> -->
                    </p>
                    <a href="https://github.com/valeriaidk/Ferreteria.git" target="_blank" class="btn btn-outline-dark mt-2">
                        <i class="bi bi-github"></i> Ver en GitHub
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card shadow-lg border-0 h-100">
                <img src="{{ asset('img/gestor-de-contrasenas.png') }}" class="card-img-top rounded-top" alt="Proyecto 3">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Sistem dee Contraseña</h5>
                    <p class="card-text">App moovil desarrollada con FireBase</p>
                    <p>
                        <span class="badge bg-warning text-dark">FireBase</span>
                        <!-- <span class="badge bg-danger">Firebase</span> -->
                    </p>
                    <a href="https://github.com/valeriaidk/GestionContrasena.git" target="_blank" class="btn btn-outline-dark mt-2">
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
