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
    <script>
        particlesJS("particles-js", {
            particles: {
                number: { value: 60 },
                color: { value: "#808080" },  <!-- Color plomo -->
                shape: { type: "circle" },
                opacity: { value: 0.4 },
                size: { value: 3 },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: "#808080",  <!-- Color plomo para las líneas -->
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
    </script>
</body>
</html>