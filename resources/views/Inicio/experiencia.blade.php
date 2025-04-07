<style>
  .carousel-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    max-width: 1200px;
    margin: auto;
  }

  .carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }

  .experience-card {
    min-width: 100%;
    box-sizing: border-box;
    padding: 2rem;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: row;
    gap: 1.5rem;
    align-items: center;
    justify-content: space-between;
  }

  .experience-image img {
    max-width: 300px;
    border-radius: 15px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  .carousel-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    font-size: 2rem;
    background-color: rgba(0,0,0,0.3);
    color: white;
    border: none;
    padding: 0.5rem 1rem;
    cursor: pointer;
    z-index: 10;
    border-radius: 50%;
    transition: background-color 0.3s;
  }

  .carousel-button.left {
    left: -10px; /* fuera del contenido */
  }

  .carousel-button.right {
    right: -10px;
  }

  .carousel-button:hover {
    background-color: rgba(0,0,0,0.5);
  }

  @media (max-width: 768px) {
    .experience-card {
      flex-direction: column;
      text-align: center;
    }

    .experience-image img {
      max-width: 100%;
    }

    /* Asegura visibilidad de botones en móviles */
    .carousel-button.left {
      left: 10px;
    }

    .carousel-button.right {
      right: 10px;
    }
  }
</style>

<section id="experiencia" class="container pt-5 mt-5 text-center">
  <h2 class="mb-5" style="color: #ffc107;">Mi Experiencia</h2>

  <div class="carousel-container">
    <!-- Botones fuera de la tarjeta -->
    <button class="carousel-button left" aria-label="Slide anterior" onclick="moveSlide(-1)">&#8249;</button>
    <button class="carousel-button right" aria-label="Slide siguiente" onclick="moveSlide(1)">&#8250;</button>

    <div class="carousel-track" id="carousel-track">
      <!-- Slide 1 -->
      <div class="experience-card">
        <div>
          <h4>Desarrollador Web - Empresa Grupo Wesc</h4>
          <p><small>2024 - Terminado</small></p>
          <p>Desarrollo de un sistema web de contabilidad utilizando HTML, CSS, JavaScript y MySQL. Gestión de ingresos, egresos, reportes financieros y cuentas.</p>
        </div>
        <div class="experience-image">
          <img src="{{ asset('img/grupowesc.jpeg') }}" alt="Grupo Wesc">
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="experience-card">
        <div>
          <h4>Proyecto - Risai</h4>
          <p><small>2024 - Terminado</small></p>
          <p>Sistema de seguridad inteligente con reconocimiento facial y objetos, usando gráficos de clasificación y análisis avanzados.</p>
        </div>
        <div class="experience-image">
          <img src="{{ asset('img/risai.png') }}" alt="Risai">
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="experience-card">
        <div>
          <h4>Proyecto - Joyería</h4>
          <p><small>2024 - Terminado</small></p>
          <p>Tienda virtual tipo catálogo para venta de joyas, con navegación visual clara y atractiva.</p>
        </div>
        <div class="experience-image">
          <img src="{{ asset('img/vk.jpeg') }}" alt="Joyería">
        </div>
      </div>
      <!-- Slide 4 -->
      <div class="experience-card">
        <div>
          <h4>Proyecto - Ferretería</h4>
          <p><small>2023 - Terminado</small></p>
          <p>Sitio informativo para ferretería, con productos y servicios organizados de forma clara.</p>
        </div>
        <div class="experience-image">
          <img src="{{ asset('img/dino2.jpg') }}" alt="Ferretería">
        </div>
      </div>
      <!-- Slide 5 -->
      <div class="experience-card">
        <div>
          <h4>Proyecto - Gestión de Contraseñas</h4>
          <p><small>2025 - Terminado</small></p>
          <p>Aplicación móvil para administrar contraseñas con seguridad y eficiencia.</p>
        </div>
        <div class="experience-image">
          <img src="{{ asset('img/gestion.png') }}" alt="Contraseñas">
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  let currentSlide = 0;
  const track = document.getElementById("carousel-track");
  const totalSlides = track.children.length;

  function moveSlide(direction) {
    currentSlide += direction;
    if (currentSlide < 0) currentSlide = totalSlides - 1;
    if (currentSlide >= totalSlides) currentSlide = 0;
    const slideWidth = track.children[0].offsetWidth;
    track.style.transform = `translateX(-${slideWidth * currentSlide}px)`;
  }

  // Desplazamiento suave al hacer clic en enlaces
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
