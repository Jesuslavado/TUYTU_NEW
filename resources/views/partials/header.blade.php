<header class="fixed top-0 left-0 right-0 z-50 bg-background/80 backdrop-blur-md border-b border-border">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16">
            {{-- LOGO --}}
            <a href="{{ url('/') }}" class="flex items-center space-x-2">
                <img src="{{ asset('images/logo.png') }}" alt="Tu&Tu Logo" class="w-8 h-8">
                <span class="font-display text-xl font-bold text-foreground">Tu&Tu</span>
            </a>

            {{-- NAV DESKTOP --}}
            <nav class="hidden md:flex items-center space-x-6">
                <a href="{{ url('/') }}" class="text-foreground/70 hover:text-foreground transition-colors duration-200">
                    Inicio
                </a>
                <a href="{{ url('/politica-de-privacidad') }}" class="text-foreground/70 hover:text-foreground transition-colors duration-200">
                    Privacidad
                </a>
                <a href="{{ url('/politica-de-cookies') }}" class="text-foreground/70 hover:text-foreground transition-colors duration-200">
                    Cookies
                </a>
                <a href="{{ url('/terminos-de-uso') }}" class="text-foreground/70 hover:text-foreground transition-colors duration-200">
                    Términos
                </a>
                <a href="{{ url('/contacto') }}" class="text-foreground/70 hover:text-foreground transition-colors duration-200">
                    Contacto
                </a>

                {{-- BOTONES DE DESCARGA --}}
                <a href="https://drive.google.com/file/d/1tBf98K3ByT80OqORRWKhyLw91uqaJhgu/view?usp=sharing" target="_blank"
                   class="border border-primary/30 text-primary hover:bg-primary/10 px-3 py-1.5 rounded-md text-sm flex items-center transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                    </svg>
                    Guía Familias
                </a>

                <a href="https://drive.google.com/file/d/1ffCtl9ggzllQAJgyE1uXM78YeGhl9jlg/view?usp=sharing" target="_blank"
                   class="border border-primary/30 text-primary hover:bg-primary/10 px-3 py-1.5 rounded-md text-sm flex items-center transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                    </svg>
                    PDF Inversores
                </a>

                {{-- BOTÓN MODO OSCURO --}}
                <button id="theme-toggle" class="ml-2 p-2 rounded-lg text-foreground/60 hover:text-foreground hover:bg-background-secondary transition">
                    <svg id="theme-icon" xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path id="moon-icon" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.79A9 9 0 1111.21 3a7 7 0 109.79 9.79z" />
                    </svg>
                </button>
            </nav>

            {{-- BOTÓN MENÚ MÓVIL --}}
            <button id="menu-toggle" class="md:hidden p-2 rounded-lg hover:bg-muted transition-colors duration-200">
                <svg xmlns="http://www.w3.org/2000/svg" id="menu-icon" class="w-5 h-5 text-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        {{-- NAV MÓVIL --}}
        <div id="mobile-menu" class="hidden md:hidden border-t border-border bg-background/95 backdrop-blur-md">
            <nav class="py-4 space-y-3">
                <a href="{{ url('/') }}" class="block px-4 py-2 text-foreground/70 hover:text-foreground hover:bg-muted rounded-lg transition">
                    Inicio
                </a>
                <a href="{{ url('/politica-de-privacidad') }}" class="block px-4 py-2 text-foreground/70 hover:text-foreground hover:bg-muted rounded-lg transition">
                    Privacidad
                </a>
                <a href="{{ url('/politica-de-cookies') }}" class="block px-4 py-2 text-foreground/70 hover:text-foreground hover:bg-muted rounded-lg transition">
                    Cookies
                </a>
                <a href="{{ url('/terminos-de-uso') }}" class="block px-4 py-2 text-foreground/70 hover:text-foreground hover:bg-muted rounded-lg transition">
                    Términos
                </a>
                <a href="{{ url('/contacto') }}" class="block px-4 py-2 text-foreground/70 hover:text-foreground hover:bg-muted rounded-lg transition">
                    Contacto
                </a>

                <a href="https://drive.google.com/file/d/1tBf98K3ByT80OqORRWKhyLw91uqaJhgu/view?usp=sharing" target="_blank"
                   class="block px-4 py-2 text-primary hover:bg-primary/10 rounded-lg transition flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                    </svg>
                    Guía Familias
                </a>

                <a href="https://drive.google.com/file/d/1ffCtl9ggzllQAJgyE1uXM78YeGhl9jlg/view?usp=sharing" target="_blank"
                   class="block px-4 py-2 text-primary hover:bg-primary/10 rounded-lg transition flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v2a2 2 0 002 2h12a2 2 0 002-2v-2M7 10l5 5m0 0l5-5m-5 5V4" />
                    </svg>
                    PDF Inversores
                </a>
            </nav>
        </div>
    </div>
</header>
