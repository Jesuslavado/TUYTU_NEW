<!-- resources/views/layouts/footer.blade.php -->
<link rel="stylesheet" href="{{ asset('css/footer.css') }}">
<footer class="footer">
    <div class="footer-container">

        <!-- Main Footer Content -->
        <div class="footer-main">

            <!-- Brand Section -->
            <div class="footer-brand">
                <div class="brand-header">
                    <img src="{{ asset('images/logo.png') }}" alt="Tu&Tu Logo" class="brand-logo">
                    <span class="brand-name">tu&tu</span>
                </div>
                <p class="brand-description">
                    Protegemos la imagen digital de menores y colectivos vulnerables con tecnología cuántica ética.
                </p>
                <div class="brand-tags">
                    <span class="tag">🏆 INCIBE Validated</span>
                    <span class="tag">🔒 Child Protection</span>
                </div>
            </div>

            <!-- Resources -->
            <div class="footer-section">
                <h3 class="footer-title">Recursos</h3>
                <nav class="footer-links">
                    <a href="{{ url('/privacidad') }}">Política de privacidad</a>
                    <a href="{{ url('/terminos') }}">Términos de uso</a>
                </nav>
            </div>

            <!-- Community -->
            <div class="footer-section">
                <h3 class="footer-title">Comunidad</h3>
                <nav class="footer-links">
                    <a href="#">Discord</a>
                    <a href="#">X (Twitter)</a>
                    <a href="https://www.linkedin.com/in/tuytu-tech-04a075378/">LinkedIn</a>
                    <a href="#">GitHub</a>
                </nav>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom">
            <div class="footer-bottom-left">
                <p class="footer-subcopy">Creado con pasión y responsabilidad para un internet más seguro.</p>
            </div>

            <div class="footer-status">
                <div class="status-indicator">
                    <div class=""></div>
                    <p class="footer-copy">© 2025 Tu&Tu. Protegiendo la infancia digital.</p>
                </div>
            </div>
        </div>

        <!-- Legal Disclaimer -->
        <div class="footer-legal">
            <p>
                Tu&Tu es una tecnología de protección digital que modifica imperceptiblemente las imágenes para protegerlas del uso no autorizado por parte de sistemas de inteligencia artificial.
                Esta tecnología está diseñada específicamente para proteger la privacidad y seguridad de menores y colectivos vulnerables.
            </p>
        </div>
    </div>
</footer>
