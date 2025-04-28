<!DOCTYPE html>
<html lang="es">
<head>
    @include('partes.head')
</head>
<body>

    @include('partes.navbar')

    <div id="particles-js"></div>

    <main class="position-relative z-1">
        @yield('contenido')
    </main>

    @include('partes.footer')

    {{-- JS de partículas --}}
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Inicializar AOS
        AOS.init({
            duration: 1000,
            once: false,
            mirror: true,
            offset: 100
        });

        // Configuración de partículas
        particlesJS("particles-js", {
            particles: {
                number: { value: 60 },
                color: { value: "#03045E" },
                shape: { type: "circle" },
                opacity: { value: 0.4 },
                size: { value: 3 },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#03045E",
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2
                }
            },
            interactivity: {
                events: {
                    onhover: { enable: true, mode: "repulse" },
                    onclick: { enable: true, mode: "push" }
                },
                modes: {
                    repulse: { distance: 100 },
                    push: { particles_nb: 4 }
                }
            }
        });

        // Smooth scroll para todos los enlaces internos
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    const offset = 80;
                    const targetPosition = target.getBoundingClientRect().top + window.pageYOffset;
                    const startPosition = window.pageYOffset;
                    const distance = targetPosition - startPosition - offset;
                    const duration = 1000;
                    let start = null;

                    function animation(currentTime) {
                        if (start === null) start = currentTime;
                        const timeElapsed = currentTime - start;
                        const run = ease(timeElapsed, startPosition, distance, duration);
                        window.scrollTo(0, run);
                        if (timeElapsed < duration) requestAnimationFrame(animation);
                    }

                    function ease(t, b, c, d) {
                        t /= d / 2;
                        if (t < 1) return c / 2 * t * t + b;
                        t--;
                        return -c / 2 * (t * (t - 2) - 1) + b;
                    }

                    requestAnimationFrame(animation);
                }
            });
        });

        // Efecto de parallax suave
        window.addEventListener('scroll', function() {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax');
            
            parallaxElements.forEach(element => {
                const speed = element.dataset.speed || 0.5;
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Efecto de aparición al hacer scroll
        const observerOptions = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };

        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(element => {
            observer.observe(element);
        });
    </script>

    <style>
        .animate-on-scroll {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.6s ease-out;
        }

        .animate-on-scroll.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .parallax {
            transition: transform 0.1s ease-out;
        }

        section {
            position: relative;
            overflow: hidden;
        }

        .section-content {
            position: relative;
            z-index: 1;
        }

        .section-background {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            opacity: 0.1;
        }
    </style>
</body>
</html>