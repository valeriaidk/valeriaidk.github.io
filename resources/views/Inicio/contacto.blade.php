<section id="contacto" class="container pt-5 mt-5 text-center">
  <h2 class="mb-4 display-5 fw-bold" style="color: #ffc107;" data-aos="fade-down">Contáctame</h2>

  <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="100">
    <div class="col-md-6">
      <div class="card shadow-lg border-0 p-4">
        <div class="d-grid gap-3">

          <!-- Correo -->
          <a href="mailto:valeriaquezada6@hotmail.com" class="btn btn-outline-primary d-flex align-items-center justify-content-center gap-2 fs-5">
            <i class="bi bi-envelope-fill fs-4"></i>
            valeriaquezada6@hotmail.com
          </a>

          <!-- WhatsApp -->
          <a href="https://wa.me/51989166594" target="_blank" class="btn btn-outline-success d-flex align-items-center justify-content-center gap-2 fs-5">
            <i class="bi bi-whatsapp fs-4"></i>
            +51 989 166 594
          </a>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Script para scroll suave al hacer clic en enlaces ancla -->
<script>
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const offset = 80; // altura de la navbar si es fija
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
