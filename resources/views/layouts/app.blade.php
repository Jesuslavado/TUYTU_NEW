<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'TU&TU')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container header-container">
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo">
                <span>TU&TU</span>
            </a>
            
            <nav class="nav">
                <a href="{{ url('/') }}" class="nav-link">Inicio</a>
                <a href="{{ url('/#caracteristicas') }}" class="nav-link">Características</a>
                <a href="{{ url('/contacto') }}" class="nav-link">Contacto</a>
            </nav>
        </div>
    </header>

    <!-- Contenido principal -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div>
                    <a href="{{ url('/') }}" class="footer-logo">
                        <img src="{{ asset('images/logo-white.png') }}" alt="Logo">
                        <span>TU&TU</span>
                    </a>
                    <p class="footer-description">
                        La mejor plataforma educativa para el aprendizaje de tus hijos.
                    </p>
                </div>
                <div>
                    <h3 class="footer-title">Enlaces</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('/') }}">Inicio</a></li>
                        <li><a href="{{ url('/#caracteristicas') }}">Características</a></li>
                        <li><a href="{{ url('/contacto') }}">Contacto</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="footer-title">Legal</h3>
                    <ul class="footer-links">
                        <li><a href="{{ url('/politica-de-privacidad') }}">Política de privacidad</a></li>
                        <li><a href="{{ url('/terminos-de-uso') }}">Términos de uso</a></li>
                        <li><a href="{{ url('/politica-de-cookies') }}">Política de cookies</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; {{ date('Y') }} TU&TU. Todos los derechos reservados.
            </div>
        </div>
    </footer>

    @stack('scripts')
</body>
</html>
