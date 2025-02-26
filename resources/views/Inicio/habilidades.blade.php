<style>
    /* Efecto de movimiento y escala en las tarjetas */
    .skill-card {
        transition: transform 0.3s, box-shadow 0.3s;
        border-radius: 10px;
    }

    .skill-card:hover {
        transform: translateY(-10px) scale(1.05);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.1);
    }
</style>
<section id="habilidades" class="container my-5 text-center">
    <h2 class="mb-4" data-aos="fade-down">Mis Habilidades</h2>
    <div class="row justify-content-center">
        <!-- Habilidad 1: HTML & CSS -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-code-slash display-1 text-primary mb-3"></i>
                    <h5 class="card-title">HTML & CSS</h5>
                    <p class="card-text text-muted">Desarrollo de interfaces web modernas y responsivas.</p>
                </div>
            </div>
        </div>

        <!-- Habilidad 2: JavaScript -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-code display-1 text-warning mb-3"></i>
                    <h5 class="card-title">JavaScript</h5>
                    <p class="card-text text-muted">Funcionalidades interactivas y dinámicas.</p>
                </div>
            </div>
        </div>

        <!-- Habilidad 3: Laravel -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-layers display-1 text-info mb-3"></i>
                    <h5 class="card-title">Laravel</h5>
                    <p class="card-text text-muted">Desarrollo backend con PHP y Laravel.</p>
                </div>
            </div>
        </div>

        <!-- Habilidad 4: Python -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-file-earmark-code display-1 text-secondary mb-3"></i>
                    <h5 class="card-title">Python</h5>
                    <p class="card-text text-muted">Automatización y desarrollo de IA.</p>
                </div>
            </div>
        </div>

        <!-- Habilidad 5: SQL -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-database display-1 text-danger mb-3"></i>
                    <h5 class="card-title">SQL y MYSQL</h5>
                    <p class="card-text text-muted">Gestión de bases de datos relacionales.</p>
                </div>
            </div>
        </div>

        <!-- Habilidad 6: Git -->
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow-sm border-0 skill-card">
                <div class="card-body text-center py-5">
                    <i class="bi bi-git display-1 text-dark mb-3"></i>
                    <h5 class="card-title">Git</h5>
                    <p class="card-text text-muted">Control de versiones y colaboración.</p>
                </div>
            </div>
        </div>
    </div>
</section>


