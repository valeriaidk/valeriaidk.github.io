<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
    <title data-i18n="title">Habilidades</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body>
    @include('partes.navbar')

    <section id="habilidades" class="container my-5">
        <h2 class="text-center mb-4" data-i18n="skills-title">Mis Habilidades</h2>
        
        <div class="row">
            <!-- Habilidad 1 -->
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-code-slash display-4 text-primary"></i>
                        <h5 class="card-title mt-3">HTML & CSS</h5>
                        <p class="card-text">Desarrollo de interfaces web modernas y responsivas.</p>
                        
                        <!-- Barra de progreso -->
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Habilidad 2 -->
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-code display-4 text-warning"></i>
                        <h5 class="card-title mt-3">JavaScript</h5>
                        <p class="card-text">Desarrollo de funcionalidades interactivas y dinámicas.</p>
                        
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Habilidad 3 -->
            <div class="col-md-4 mb-3">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <i class="bi bi-layers display-4 text-info"></i>
                        <h5 class="card-title mt-3">Laravel</h5>
                        <p class="card-text">Desarrollo backend con PHP y Laravel.</p>
                        
                        <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 70%;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
