<style>
    .timeline {
        position: relative;
        max-width: 800px;
        margin: 0 auto;
    }

    .timeline::after {
        content: '';
        position: absolute;
        width: 4px;
        background: linear-gradient(to bottom, var(--color-primary), var(--color-secondary));
        top: 0;
        bottom: 0;
        left: 50%;
        margin-left: -2px;
        border-radius: 2px;
    }

    .timeline-item {
        padding: 10px 40px;
        position: relative;
        width: 50%;
        box-sizing: border-box;
    }

    .timeline-item:nth-child(odd) {
        left: 0;
    }

    .timeline-item:nth-child(even) {
        left: 50%;
    }

    .timeline-item::after {
        content: '';
        position: absolute;
        width: 20px;
        height: 20px;
        background: var(--color-primary);
        border: 4px solid var(--color-lighter);
        border-radius: 50%;
        top: 15px;
        z-index: 1;
    }

    .timeline-item:nth-child(odd)::after {
        right: -10px;
    }

    .timeline-item:nth-child(even)::after {
        left: -10px;
    }

    .timeline-content {
        padding: 20px;
        background: linear-gradient(145deg, var(--color-lighter), #ffffff);
        border-radius: 15px;
        box-shadow: 0 3px 15px rgba(0,0,0,0.1);
        position: relative;
        transition: transform 0.3s ease;
    }

    .timeline-content:hover {
        transform: translateY(-5px);
    }

    .timeline-content h4 {
        color: var(--color-primary);
        margin-bottom: 10px;
    }

    .timeline-content p {
        color: var(--color-secondary);
        margin-bottom: 5px;
    }

    .timeline-content small {
        color: var(--color-accent);
    }

    @media screen and (max-width: 600px) {
        .timeline::after {
            left: 31px;
        }

        .timeline-item {
            width: 100%;
            padding-left: 70px;
            padding-right: 25px;
        }

        .timeline-item:nth-child(even) {
            left: 0;
        }

        .timeline-item::after {
            left: 21px;
        }
    }
</style>

<section id="educacion" class="container pt-5 mt-5">
    <h2 class="section-title text-center" data-aos="fade-down">Mi Educación</h2>
    
    <div class="timeline">
        <div class="timeline-item" data-aos="fade-up" data-aos-delay="100">
            <div class="timeline-content">
                <h4>2009 - 2011: Jardín</h4>
                <p><strong>Jardín Alfredo Pinillos Goicochea</strong></p>
                <small>José Sabogal 367, Trujillo 13006</small>
            </div>
        </div>
        
        <div class="timeline-item" data-aos="fade-up" data-aos-delay="200">
            <div class="timeline-content">
                <h4>2012 - 2022: Colegio</h4>
                <p><strong>Institución Educativa Modelo</strong></p>
                <small>Av Ejercito 157, Trujillo 13001</small>
            </div>
        </div>
      
        <div class="timeline-item" data-aos="fade-up" data-aos-delay="300">
            <div class="timeline-content">
                <h4>2023 - 2025: Instituto</h4>
                <p><strong>Senati</strong></p>
                <small>Parque Industrial Lt. 28A, La Esperanza</small>
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
