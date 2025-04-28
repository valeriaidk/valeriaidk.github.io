<style>
  .carousel-container {
    position: relative;
    overflow: hidden;
    width: 100%;
    max-width: 1200px;
    margin: auto;
    padding: 0 60px; /* Espacio para los botones */
  }

  .carousel-track {
    display: flex;
    transition: transform 0.5s ease-in-out;
  }

  .experience-card {
    min-width: 100%;
    box-sizing: border-box;
    padding: 2rem;
    background: linear-gradient(145deg, var(--color-lighter), #ffffff);
    border-radius: 15px;
    box-shadow: 0 3px 15px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: row;
    gap: 1.5rem;
    align-items: center;
    justify-content: space-between;
    border: none;
  }

  .experience-image img {
    max-width: 300px;
    border-radius: 15px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s ease;
  }

  .experience-image img:hover {
    transform: scale(1.05);
  }

  .carousel-button {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 50px;
    height: 50px;
    background-color: var(--color-primary);
    color: white;
    border: none;
    border-radius: 50%;
    cursor: pointer;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 24px;
    transition: all 0.3s ease;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  .carousel-button:hover {
    background-color: var(--color-secondary);
    transform: translateY(-50%) scale(1.1);
  }

  .carousel-button.left {
    left: 0;
  }

  .carousel-button.right {
    right: 0;
  }

  .experience-content {
    flex: 1;
  }

  .experience-content h4 {
    color: var(--color-primary);
    margin-bottom: 1rem;
  }

  .experience-content p {
    color: var(--color-secondary);
  }

  .experience-content small {
    color: var(--color-accent);
  }

  @media (max-width: 768px) {
    .carousel-container {
      padding: 0 40px;
    }

    .experience-card {
      flex-direction: column;
      text-align: center;
      padding: 1.5rem;
    }

    .experience-image img {
      max-width: 100%;
      margin-top: 1rem;
    }

    .carousel-button {
      width: 40px;
      height: 40px;
      font-size: 20px;
    }

    .experience-content h4 {
      font-size: 1.2rem;
    }

    .experience-content p {
      font-size: 0.9rem;
    }
  }

  @media (max-width: 576px) {
    .carousel-container {
      padding: 0 30px;
    }

    .experience-card {
      padding: 1rem;
    }

    .experience-image img {
      max-width: 90%;
    }

    .carousel-button {
      width: 35px;
      height: 35px;
      font-size: 18px;
    }

    .experience-content h4 {
      font-size: 1.1rem;
    }

    .experience-content p {
      font-size: 0.85rem;
    }

    .section-title {
      font-size: 1.75rem;
    }
  }

  @media (min-width: 992px) {
    .experience-card {
      padding: 2.5rem;
    }

    .experience-image img {
      max-width: 350px;
    }
  }
</style>

<section id="experiencia" class="container pt-5 mt-5">
  <h2 class="section-title text-center" data-aos="fade-down">Mi Experiencia</h2>

  <div class="carousel-container">
    <button class="carousel-button left" aria-label="Slide anterior" onclick="moveSlide(-1)">
      <i class="bi bi-chevron-left"></i>
    </button>
    <button class="carousel-button right" aria-label="Slide siguiente" onclick="moveSlide(1)">
      <i class="bi bi-chevron-right"></i>
    </button>

    <div class="carousel-track" id="carousel-track">
      <!-- Slide 1 -->
      <div class="experience-card">
        <div class="experience-content">
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
        <div class="experience-content">
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
        <div class="experience-content">
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
        <div class="experience-content">
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
        <div class="experience-content">
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
