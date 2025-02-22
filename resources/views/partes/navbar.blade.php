<!-- Barra de navegación tipo MacOS Dock -->
<nav class="navbar fixed-bottom navbar-dock">
  <div class="container-fluid d-flex justify-content-center">
      <ul class="navbar-nav d-flex flex-row gap-4">
          <li class="nav-item">
              <a class="nav-link dock-icon" href="#inicio">
                  <i class="bi bi-tools"></i><br>Inicio
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link dock-icon" href="#habilidades">
                  <i class="bi bi-tools"></i><br>Habilidades
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link dock-icon" href="#experiencia">
                  <i class="bi bi-briefcase"></i><br>Experiencia
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link dock-icon" href="#educacion">
                  <i class="bi bi-mortarboard"></i><br>Educación
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link dock-icon" href="#proyectos">
                  <i class="bi bi-folder"></i><br>Proyectos
              </a>
          </li>
          <li class="nav-item">
              <a class="nav-link dock-icon" href="#contacto">
                  <i class="bi bi-envelope"></i><br>Contacto
              </a>
          </li>
      </ul>
  </div>
</nav>

<!-- Agrega el script de scroll suave justo antes de cerrar el body -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function(){
      $('a[href^="#"]').on('click', function(event) {
          var target = $(this.getAttribute('href'));
          if(target.length) {
              event.preventDefault();
              $('html, body').animate({
                  scrollTop: target.offset().top - 50
              }, 500);
          }
      });
  });
</script>
