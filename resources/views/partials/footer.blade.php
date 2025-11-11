<!-- resources/views/layouts/footer.blade.php -->
<footer class="section-padding bg-background-tertiary border-t border-border/20">
    <div class="container-grid">

        <!-- Main Footer Content -->
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-12 mb-12">
            
            <!-- Brand Section -->
            <div class="lg:col-span-2">
                <div class="flex items-center mb-6">
                    <img src="{{ asset('images/logo.png') }}" alt="Tu&Tu Logo" class="w-8 h-8 mr-3">
                    <span class="font-display text-2xl gradient-text">tu&tu</span>
                </div>
                <p class="text-foreground/70 mb-6 max-w-md leading-relaxed">
                    Protegemos la imagen digital de menores y colectivos vulnerables con tecnología cuántica ética.
                </p>
                <div class="flex items-center gap-4">
                    <span class="text-xs bg-background px-3 py-1 rounded-full text-foreground/60 border border-border">
                        🏆 INCIBE Validated
                    </span>
                    <span class="text-xs bg-background px-3 py-1 rounded-full text-foreground/60 border border-border">
                        🔒 Child Protection
                    </span>
                </div>
            </div>

            <!-- Resources -->
            <div>
                <h3 class="font-display text-lg gradient-text mb-4">Recursos</h3>
                <nav class="space-y-3">
                    <a href="#" class="block text-foreground/60 hover:text-foreground transition-colors text-sm">
                        Guía para familias
                    </a>
                    <a href="/politica-de-privacidad" class="block text-foreground/60 hover:text-foreground transition-colors text-sm">
                        Política de privacidad
                    </a>
                    <a href="/terminos-de-uso" class="block text-foreground/60 hover:text-foreground transition-colors text-sm">
                        Términos de uso
                    </a>
                    <a href="#" class="block text-foreground/60 hover:text-foreground transition-colors text-sm">
                        Cookies
                    </a>
                </nav>
            </div>

            <!-- Community -->
            <div>
                <h3 class="font-display text-lg gradient-text mb-4">Comunidad</h3>
                <nav class="space-y-3">
                    <a href="#" class="block text-foreground/60 hover:text-foreground transition-colors text-sm">Discord</a>
                    <a href="#" class="block text-foreground/60 hover:text-foreground transition-colors text-sm">X (Twitter)</a>
                    <a href="#" class="block text-foreground/60 hover:text-foreground transition-colors text-sm">LinkedIn</a>
                    <a href="#" class="block text-foreground/60 hover:text-foreground transition-colors text-sm">GitHub</a>
                </nav>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row justify-between items-center gap-6 pt-8 border-t border-border/20">
            <div class="text-center md:text-left">
                <p class="text-sm text-foreground/50 mb-1">© 2025 Tu&Tu. Protegiendo la infancia digital.</p>
                <p class="text-xs text-foreground/40">Hecho con ❤️ para un internet más seguro</p>
            </div>

            <div class="flex items-center gap-4">
                <div class="flex items-center gap-2">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-xs text-foreground/50">Sistema activo</span>
                </div>
            </div>
        </div>

        <!-- Legal Disclaimer -->
        <div class="mt-8 pt-6 border-t border-border/10">
            <p class="text-xs text-foreground/40 text-center leading-relaxed max-w-4xl mx-auto">
                Tu&Tu es una tecnología de protección digital que modifica imperceptiblemente las imágenes para protegerlas del uso no autorizado por parte de sistemas de inteligencia artificial.
                Esta tecnología está diseñada específicamente para proteger la privacidad y seguridad de menores y colectivos vulnerables.
            </p>
        </div>
    </div>
</footer>
