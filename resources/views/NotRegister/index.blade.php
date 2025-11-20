@extends('layouts.app')

@section('title', 'Tu&Tu – Protección de imágenes contra IA | Desentrenamiento')

<link rel="stylesheet" href="{{ asset('css/index.css') }}">


@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-bg">
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
            <div class="particle"></div>
        </div>
        <div class="logo-container">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Tu&Tu">
        </div>
        <div class="container-grid">
            <h1 class="font-display text-hero-responsive gradient-text mb-8 leading-[1.15] text-center">
                Protege su imagen.<br>Proteja su infancia.
            </h1>
            <div class="text-body-large mb-10 font-inter leading-relaxed max-w-2xl mx-auto text-center">
                <strong class="text-destructive font-semibold">
                    98% de los deepfakes son pornográficos.
                </strong>
                Menores, mujeres y colectivos vulnerables son la primera línea de fuego.
            </div>
            <div class="hero-form-container">
                <div class="glass-panel-strong p-6 max-w-lg mx-auto">
                    <form id="hero-form" class="hero-form">
                        <input type="email" id="hero-email" name="email" required placeholder="tu@email.com">
                        <button type="submit" class="btn btn-primary w-full">Únete a la Beta</button>
                        <label class="checkbox-container">
                            <input type="checkbox" id="gdpr-check" required> Acepto la política de protección de datos (GDPR)
                        </label>
                    </form>
                    <p id="hero-message" class="message"></p>
                    <p class="disclaimer">Sin spam · Cumplimos GDPR-K · Cupos limitados</p>
                </div>
            </div>
            <div class="text-body mb-10 font-inter leading-relaxed max-w-2xl mx-auto text-center">
                Tu&Tu envenena las IA para que tus fotos sean inservibles para el abuso.
            </div>
            <div>
                <button class="btn btn-outline" onclick="scrollToElement('investor-download-button')">
                    One-Pager inversores
                </button>
            </div>
            <p class="text-sm opacity-60 font-inter mt-6">
                Descubre cómo cuidamos a los más vulnerables.
            </p>
        </div>
        <div class="scroll-indicator">
            <div class="bar">
                <div class="scroller"></div>
            </div>
            <div class="chevron">▼</div>
        </div>
    </section>

    <!-- PainStats Section -->
    <section class="section-padding bg-background-secondary">
        <div class="container-grid">
            <div class="text-center mb-20">
                <h2 class="font-display text-display gradient-text mb-6">El dolor que duele</h2>
                <p class="text-body-large opacity-70 max-w-3xl mx-auto">
                    Las IAs generativas han convertido cada foto en materia prima para el abuso digital. En esa guerra silenciosa, <strong>menores, mujeres y colectivos vulnerables son la primera línea de fuego.</strong>
                </p>
            </div>
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-6 mb-20">
                <div class="glass-panel-strong p-8 text-center stat-card">
                    <div class="gradient-text text-3xl lg:text-4xl xl:text-5xl font-display mb-4">98%</div>
                    <p class="text-body opacity-80 leading-relaxed mb-4 font-inter">de todo el contenido deepfake es pornográfico</p>
                    <div class="text-small opacity-60 font-mono bg-background-tertiary px-3 py-1 rounded-full inline-block">europarl.europa.eu</div>
                </div>
                <div class="glass-panel-strong p-8 text-center stat-card">
                    <div class="gradient-text text-3xl lg:text-4xl xl:text-5xl font-display mb-4">20,000</div>
                    <p class="text-body opacity-80 leading-relaxed mb-4 font-inter">imágenes de abuso infantil generadas por IA en un solo mes</p>
                    <div class="text-small opacity-60 font-mono bg-background-tertiary px-3 py-1 rounded-full inline-block">iwf.org.uk</div>
                </div>
                <div class="glass-panel-strong p-8 text-center stat-card">
                    <div class="gradient-text text-3xl lg:text-4xl xl:text-5xl font-display mb-4">1 de cada 3</div>
                    <p class="text-body opacity-80 leading-relaxed mb-4 font-inter">adolescentes conoce a alguien víctima de deepfakes sexuales</p>
                    <div class="text-small opacity-60 font-mono bg-background-tertiary px-3 py-1 rounded-full inline-block">edweek.org</div>
                </div>
                <div class="glass-panel-strong p-8 text-center stat-card">
                    <div class="gradient-text text-3xl lg:text-4xl xl:text-5xl font-display mb-4">+6%</div>
                    <p class="text-body opacity-80 leading-relaxed mb-4 font-inter">de material infantil deepfake en solo seis meses</p>
                    <div class="text-small opacity-60 font-mono bg-background-tertiary px-3 py-1 rounded-full inline-block">iwf.org.uk</div>
                </div>
            </div>
            <div class="text-center">
                <div class="glass-panel p-10 max-w-4xl mx-auto">
                    <blockquote class="text-display font-display opacity-90 italic leading-tight">
                        "No es un simple filtro: es la primera línea de defensa antes de que la herida ocurra."
                    </blockquote>
                    <div class="w-24 h-1 bg-gradient-primary mx-auto mt-6 rounded-full"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="section-padding bg-background">
        <div class="container-grid">
            <div class="text-center mb-16">
                <div class="glass-panel p-8 max-w-4xl mx-auto mb-8">
                    <h2 class="font-display text-display text-foreground mb-6 gradient-text">
                        "No es un simple filtro: es la primera línea de defensa antes de que la herida ocurra."
                    </h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-6"></div>
                </div>
            </div>
            <div class="gallery-grid">
                <div class="gallery-item glass-panel">
                <img src="{{ asset('images/chica_1.png') }}" alt="Uso nocturno de dispositivos - Escenario 1">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-overlay-text">Ver imagen completa</div>
                </div>
                <div class="gallery-item glass-panel">
                <img src="{{ asset('images/chica_2.png') }}" alt="Uso nocturno de dispositivos - Escenario 2">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-overlay-text">Ver imagen completa</div>
                </div>
                <div class="gallery-item glass-panel">
                <img src="{{ asset('images/chica_3.png') }}" alt="Uso nocturno de dispositivos - Escenario 3">
                    <div class="gallery-overlay"></div>
                    <div class="gallery-overlay-text">Ver imagen completa</div>
                </div>
            </div>
            <!-- Modal -->
            <div id="gallery-modal" class="modal" style="display: none;">
                <div class="modal-content">
                    <button class="btn btn-outline modal-close-btn" onclick="closeModal()">×</button>
                    <img id="modal-image" src="" alt="">
                    <button class="modal-nav-btn prev" onclick="prevImage()">←</button>
                    <button class="modal-nav-btn next" onclick="nextImage()">→</button>
                    <div class="modal-counter"><span id="current-index">1</span> / <span id="total-images">3</span></div>
                </div>
            </div>
            <div class="text-center">
                <div class="glass-panel p-8 max-w-2xl mx-auto">
                    <p class="text-body opacity-80 mb-6">Cada imagen cuenta una historia. Cada historia merece protección.</p>
                    <p class="text-body-large font-medium">Tu&Tu: La primera línea de defensa digital</p>
                </div>
            </div>
        </div>
    </section>

    <!-- HowItWorks Section -->
    <section class="section-padding how-it-works">
        <div class="container-grid">
            <div class="text-center mb-20">
                <h2 class="font-display text-display gradient-text mb-6">3 segundos, 3 capas</h2>
                <p class="text-body-large text-white/80 max-w-3xl mx-auto">
                    Cómo actuamos para proteger cada imagen con precisión determinista
                </p>
            </div>
            <div class="steps-container">
                <div class="steps-grid">
                    <div class="step-card">
                        <div class="step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="17 8 12 3 7 8"></polyline><line x1="12" y1="3" x2="12" y2="15"></line></svg>
                        </div>
                        <div class="mb-4">
                            <div class="step-number">PASO 1</div>
                            <h3 class="font-display text-xl text-white mb-3">SUBE</h3>
                        </div>
                        <p class="text-white/70 leading-relaxed mb-3 text-sm">Arrastra tu foto o carpeta escolar.</p>
                        <p class="text-xs text-white/50 leading-relaxed">Interface intuitiva que acepta múltiples formatos y procesa por lotes.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><shield className="w-8 h-8 text-white" /></svg>
                        </div>
                        <div class="mb-4">
                            <div class="step-number">PASO 2</div>
                            <h3 class="font-display text-xl text-white mb-3">VENENO</h3>
                        </div>
                        <p class="text-white/70 leading-relaxed mb-3 text-sm">Algoritmo Tu&Tu aplica un patrón invisible único.</p>
                        <p class="text-xs text-white/50 leading-relaxed">Tecnología patentada que modifica píxeles de forma imperceptible pero letal para IA.</p>
                    </div>
                    <div class="step-card">
                        <div class="step-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><share className="w-8 h-8 text-white" /></svg>
                        </div>
                        <div class="mb-4">
                            <div class="step-number">PASO 3</div>
                            <h3 class="font-display text-xl text-white mb-3">COMPARTE</h3>
                        </div>
                        <p class="text-white/70 leading-relaxed mb-3 text-sm">Si una IA intenta copiarla, la imagen la corrompe y la obliga a olvidar.</p>
                        <p class="text-xs text-white/50 leading-relaxed">Protección activa que funciona incluso en modelos ya entrenados.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CompetitiveTable Section -->
    <section class="section-padding competitive-table">
        <div class="container-grid">
            <div class="text-center mb-16">
                <h2 class="font-display text-display text-center text-foreground mb-16">Diferencia competitiva</h2>
            </div>
            <div class="glass-panel overflow-hidden">
                <table>
                    <thead>
                        <tr>
                            <th>Característica</th>
                            <th class="text-center font-bold">Tu&Tu</th>
                            <th class="text-center text-foreground/70">Nightshade</th>
                            <th class="text-center text-foreground/70">PhotoGuard</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="feature-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-icon"><shield /></svg>
                                    <div>
                                        <div class="feature-name">Pensado para menores (GDPR-K, COPPA-ES)</div>
                                        <div class="feature-desc">Cumplimiento específico con regulaciones de protección infantil europeas y estadounidenses</div>
                                    </div>
                                </div>
                            </td>
                            <td class="value-cell">Sí</td>
                            <td class="value-cell">No</td>
                            <td class="value-cell">No</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="feature-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-icon"><brain /></svg>
                                    <div>
                                        <div class="feature-name">Desaprendizaje de modelos ya entrenados</div>
                                        <div class="feature-desc">Capacidad única de hacer que modelos existentes olviden datos específicos</div>
                                    </div>
                                </div>
                            </td>
                            <td class="value-cell">Sí</td>
                            <td class="value-cell">Sí</td>
                            <td class="value-cell">No</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="feature-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-icon"><lock /></svg>
                                    <div>
                                        <div class="feature-name">Protege píxel y metadatos</div>
                                        <div class="feature-desc">Protección completa tanto visual como de información técnica de la imagen</div>
                                    </div>
                                </div>
                            </td>
                            <td class="value-cell">Sí</td>
                            <td class="value-cell">Parcial</td>
                            <td class="value-cell">Parcial</td>
                        </tr>
                        <tr>
                            <td>
                                <div class="feature-header">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feature-icon"><code /></svg>
                                    <div>
                                        <div class="feature-name">SDK para plataformas educativas</div>
                                        <div class="feature-desc">Integración directa en sistemas escolares y redes sociales</div>
                                    </div>
                                </div>
                            </td>
                            <td class="value-cell">Q4-25</td>
                            <td class="value-cell">No</td>
                            <td class="value-cell">No</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- UseCases Section -->
    <section class="section-padding bg-background">
        <div class="container-grid">
            <div class="text-center mb-20">
                <h2 class="font-display text-display gradient-text mb-6">Casos de uso reales</h2>
                <p class="text-body-large opacity-70 max-w-3xl mx-auto">
                    Protegemos a quienes más lo necesitan: menores, artistas y activistas en situaciones vulnerables.
                </p>
            </div>
            <div class="use-cases-grid">
                <div class="use-case-card glass-panel">
                    <div class="use-case-context">Educación</div>
                    <div class="use-case-icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="use-case-icon"><graduation-cap /></svg>
                    </div>
                    <h3 class="font-display text-xl gradient-text mb-4">Clase 2º ESO</h3>
                    <p class="opacity-70 leading-relaxed text-sm">Fotos de proyecto escolar que no acabarán en memes sexuales.</p>
                    <div class="mt-6 h-1 w-full bg-background-secondary rounded-full overflow-hidden">
                        <div class="use-case-progress-bar"></div>
                    </div>
                </div>
                <div class="use-case-card glass-panel">
                    <div class="use-case-context">Creadores</div>
                    <div class="use-case-icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="use-case-icon"><video /></svg>
                    </div>
                    <h3 class="font-display text-xl gradient-text mb-4">Streamer de 16 años</h3>
                    <p class="opacity-70 leading-relaxed text-sm">Selfies que rompen modelos NSFW.</p>
                    <div class="mt-6 h-1 w-full bg-background-secondary rounded-full overflow-hidden">
                        <div class="use-case-progress-bar"></div>
                    </div>
                </div>
                <div class="use-case-card glass-panel">
                    <div class="use-case-context">Arte</div>
                    <div class="use-case-icon-container">
                        <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="use-case-icon"><palette /></svg>
                    </div>
                    <h3 class="font-display text-xl gradient-text mb-4">Artista digital</h3>
                    <p class="opacity-70 leading-relaxed text-sm">Su estilo no será clonado por IA.</p>
                    <div class="mt-6 h-1 w-full bg-background-secondary rounded-full overflow-hidden">
                        <div class="use-case-progress-bar"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="section-padding bg-background-secondary">
        <div class="container-grid">
            <div class="text-center mb-16">
                <h2 class="font-display text-display text-foreground mb-6">Validación & Partners</h2>
                <p class="text-body-large opacity-70 max-w-3xl mx-auto">
                    Instituciones líderes en tecnología y ciberseguridad
                </p>
            </div>
            <div class="partners-grid">
                <a href="https://www.incibe.es/" target="_blank" rel="noopener noreferrer" class="partner-card glass-panel-strong p-8">
                    <div class="flex flex-col items-center text-center h-full">
                <img src="{{ asset('images/incibe.png') }}" alt="INCIBE Logo" class="partner-logo mb-6">
                        <div class="text-sm opacity-70 leading-tight font-medium">Instituto Nacional de Ciberseguridad</div>
                    </div>
                </a>
                <a href="https://nextai.pro/" target="_blank" rel="noopener noreferrer" class="partner-card glass-panel-strong p-8">
                    <div class="flex flex-col items-center text-center h-full">
                <img src="{{ asset('images/Empire_ia.png') }}" alt="NextAI Logo" class="partner-logo mb-6">
                        <div class="text-sm opacity-70 leading-tight font-medium">Consultora especializada en IA</div>
                    </div>
                </a>
                <a href="https://institutoidf.com/" target="_blank" rel="noopener noreferrer" class="partner-card glass-panel-strong p-8">
                    <div class="flex flex-col items-center text-center h-full">
                <img src="{{ asset('images/Instituto.png') }}" alt="INCIBE Logo" class="partner-logo mb-6">
                        <div class="text-sm opacity-70 leading-tight font-medium">Instituto de Investigación en Diseño</div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Roadmap Section -->
    <section class="section-padding roadmap">
        <div class="container-grid">
            <h2 class="font-display text-display text-center gradient-text mb-16">Roadmap</h2>
            <div class="roadmap-timeline">
                <div class="roadmap-item">
                    <div class="roadmap-card glass-panel">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="font-display text-accent text-lg">Q2-25</span>
                            <span class="roadmap-status">En progreso</span>
                        </div>
                        <h3 class="text-xl md:text-2xl font-semibold text-white mb-3">POC 99% bloqueo SD XL</h3>
                        <p class="text-body text-white/80 mb-4 leading-relaxed">Prototipo funcional que demuestra 99% de efectividad bloqueando Stable Diffusion XL. Incluye métricas de rendimiento y primeras pruebas con usuarios beta.</p>
                        <h4 class="text-sm font-semibold text-white/90 mb-3 uppercase tracking-wide">Objetivos clave:</h4>
                        <div class="roadmap-objectives">
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Algoritmo de envenenamiento optimizado</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Pruebas con 10,000 imágenes</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Documentación técnica completa</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-card glass-panel">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="font-display text-accent text-lg">Q3-25</span>
                        </div>
                        <h3 class="text-xl md:text-2xl font-semibold text-white mb-3">Beta con plugin Google Fotos</h3>
                        <p class="text-body text-white/80 mb-4 leading-relaxed">Lanzamiento de versión beta con integración directa en Google Fotos. Procesamiento automático de imágenes subidas y protección en tiempo real.</p>
                        <h4 class="text-sm font-semibold text-white/90 mb-3 uppercase tracking-wide">Objetivos clave:</h4>
                        <div class="roadmap-objectives">
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Plugin Google Fotos funcional</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">1,000 usuarios beta activos</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Feedback loop establecido</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-card glass-panel">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="font-display text-accent text-lg">Sep-25</span>
                        </div>
                        <h3 class="text-xl md:text-2xl font-semibold text-white mb-3">Seed €1.2 M</h3>
                        <p class="text-body text-white/80 mb-4 leading-relaxed">Ronda de financiación seed para acelerar desarrollo y expansión del equipo. Enfoque en inversores especializados en child safety y AI ethics.</p>
                        <h4 class="text-sm font-semibold text-white/90 mb-3 uppercase tracking-wide">Objetivos clave:</h4>
                        <div class="roadmap-objectives">
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Equipo de 8 personas</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Oficina en Madrid/Barcelona</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Partnerships estratégicos</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="roadmap-item">
                    <div class="roadmap-card glass-panel">
                        <div class="flex items-center gap-3 mb-2">
                            <span class="font-display text-accent text-lg">Q4-25</span>
                        </div>
                        <h3 class="text-xl md:text-2xl font-semibold text-white mb-3">SDK colegios & redes</h3>
                        <p class="text-body text-white/80 mb-4 leading-relaxed">Software Development Kit para integración en plataformas educativas y redes sociales. API robusta para protección masiva de contenido.</p>
                        <h4 class="text-sm font-semibold text-white/90 mb-3 uppercase tracking-wide">Objetivos clave:</h4>
                        <div class="roadmap-objectives">
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">SDK completo documentado</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">5 integraciones piloto</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-1.5 h-1.5 bg-accent rounded-full flex-shrink-0"></div>
                                <span class="text-small text-white/70">Compliance GDPR-K certificado</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FamilyGuide Section -->
    <section class="section-padding family-guide">
        <div class="max-w-6xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="font-display text-4xl md:text-5xl mb-6 gradient-text">Guía para Familias</h2>
                <p class="text-xl opacity-70 max-w-3xl mx-auto leading-relaxed">
                    Todo lo que necesitas saber para proteger a tus hijos en la era digital
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-8 guide-features">
                    <div class="feature-item">
                        <div class="feature-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><shield /></svg>
                        </div>
                        <div>
                            <h3 class="font-display text-xl text-foreground mb-2">Protección Digital</h3>
                            <p class="opacity-70 leading-relaxed">Aprende cómo proteger las imágenes de tus hijos contra el uso malicioso de IA y deepfakes.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><users /></svg>
                        </div>
                        <div>
                            <h3 class="font-display text-xl text-foreground mb-2">Educación Familiar</h3>
                            <p class="opacity-70 leading-relaxed">Herramientas y consejos prácticos para hablar con tus hijos sobre la seguridad digital.</p>
                        </div>
                    </div>
                    <div class="feature-item">
                        <div class="feature-icon-container">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><download /></svg>
                        </div>
                        <div>
                            <h3 class="font-display text-xl text-foreground mb-2">Guía Práctica</h3>
                            <p class="opacity-70 leading-relaxed">Pasos concretos que puedes seguir hoy mismo para aumentar la protección de tu familia.</p>
                        </div>
                    </div>
                </div>
                <div class="investor-cta-container text-center">
                    <div class="mb-6">
                        <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><users /></svg>
                        </div>
                        <h3 class="font-display text-2xl text-foreground mb-4">Descarga Gratuita</h3>
                        <p class="opacity-70 mb-6 leading-relaxed">Una guía completa y práctica para familias preocupadas por la seguridad digital de sus hijos.</p>
                    </div>
                    <button class="btn btn-primary w-full" onclick="window.open('https://drive.google.com/file/d/1tBf98K3ByT80OqORRWKhyLw91uqaJhgu/view?usp=sharing', '_blank');">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><download /></svg>
                        Descargar Guía para Familias
                    </button>
                    <p class="text-xs opacity-60 mt-4">PDF gratuito · Sin registro requerido · Actualizado 2025</p>
                </div>
            </div>
        </div>
    </section>

    <!-- BetaSignup Section -->
    <section class="section-padding beta-signup">
        <div class="max-w-4xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div class="investor-cta-container">
                    <h3 class="font-display text-2xl text-foreground mb-4">Para Inversores</h3>
                    <p class="opacity-70 mb-6 leading-relaxed">Descarga nuestro one-pager con métricas de mercado, tecnología y oportunidad de inversión.</p>
                    <button id="investor-download-button" class="btn btn-primary w-full" onclick="window.open('https://drive.google.com/file/d/1ffCtl9ggzllQAJgyE1uXM78YeGhl9jlg/view?usp=sharing', '_blank');">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><download /></svg>
                        Descargar PDF Inversores
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- CallToAction Section -->
    <section class="section-padding cta">
        <div class="cta-bg"></div>
        <div class="container-grid relative z-10">
            <div class="w-24 h-24 mx-auto mb-12">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Tu&Tu">
            </div>
            <h2 class="font-display text-hero text-white mb-8 text-balance max-w-4xl mx-auto">Únete a la defensa colectiva</h2>
            <p class="text-body-large mb-16 text-white text-balance max-w-3xl mx-auto">
                <strong class="text-brand-cyan">Cada 2 segundos se sube un deepfake sexual.</strong> Tu&Tu coloca un escudo donde las plataformas aún no llegan.
            </p>
            <div class="flex flex-col items-center gap-8">
                <div class="relative">
                    <div class="cta-shield">
                        <div class="cta-shield-inner"></div>
                        <div class="cta-pulse"></div>
                        <div class="cta-pulse"></div>
                    </div>
                    <div class="absolute -top-2 -left-2 w-4 h-4 bg-white/40 rounded-full animate-pulse-premium"></div>
                    <div class="absolute -bottom-2 -right-2 w-3 h-3 bg-white/30 rounded-full animate-pulse-premium" style="animation-delay: 1s;"></div>
                </div>
                <div class="text-center">
                    <p class="text-lg font-semibold mb-2 text-white">Únete a la revolución de la protección digital</p>
                    <p class="text-sm text-white/90 max-w-md mx-auto">Sé parte de la primera línea de defensa contra el abuso digital infantil</p>
                </div>
            </div>
        </div>
    </section>

    <script>
        // --- Hero Form ---
        document.getElementById('hero-form').addEventListener('submit', async (e) => {
            e.preventDefault();
            const email = document.getElementById('hero-email').value;
            const gdpr = document.getElementById('gdpr-check').checked;
            const messageEl = document.getElementById('hero-message');
            if (!email) {
                messageEl.textContent = 'Por favor, introduce un correo electrónico.';
                messageEl.className = 'message error';
                return;
            }
            if (!gdpr) {
                messageEl.textContent = 'Debes aceptar la política de protección de datos.';
                messageEl.className = 'message error';
                return;
            }

            // Aquí iría la lógica de Supabase para guardar el email
            // const { error } = await supabase.from("correos_Beta").insert([{ correo: email }]);
            // Por ahora, simulamos éxito
            messageEl.textContent = '¡Gracias! Te has unido a la Beta.';
            messageEl.className = 'message success';
            document.getElementById('hero-email').value = '';
            document.getElementById('gdpr-check').checked = false;
        });

        // --- Gallery Modal ---
        const galleryItems = document.querySelectorAll('.gallery-item');
        const modal = document.getElementById('gallery-modal');
        const modalImg = document.getElementById('modal-image');
        const currentIndexEl = document.getElementById('current-index');
        const totalImagesEl = document.getElementById('total-images');
        const images = [
            '/lovable-uploads/e7eb1160-3d58-42cc-b19f-b45d69988991.png',
            '/lovable-uploads/c53fdb40-3d1f-449e-a05d-722c5b9931e9.png',
            '/lovable-uploads/306807e7-1b99-4109-93b7-a2f84c44bfc7.png'
        ];
        let currentImageIndex = 0;

        galleryItems.forEach((item, index) => {
            item.addEventListener('click', () => {
                currentImageIndex = index;
                modalImg.src = images[index];
                currentIndexEl.textContent = index + 1;
                totalImagesEl.textContent = images.length;
                modal.style.display = 'flex';
                document.body.style.overflow = 'hidden';
            });
        });

        function closeModal() {
            modal.style.display = 'none';
            document.body.style.overflow = 'unset';
        }

        function nextImage() {
            currentImageIndex = (currentImageIndex + 1) % images.length;
            modalImg.src = images[currentImageIndex];
            currentIndexEl.textContent = currentImageIndex + 1;
        }

        function prevImage() {
            currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
            modalImg.src = images[currentImageIndex];
            currentIndexEl.textContent = currentImageIndex + 1;
        }

        modal.addEventListener('click', (e) => {
            if (e.target === modal) closeModal();
        });

        document.addEventListener('keydown', (e) => {
            if (modal.style.display === 'flex') {
                if (e.key === 'Escape') closeModal();
                if (e.key === 'ArrowRight') nextImage();
                if (e.key === 'ArrowLeft') prevImage();
            }
        });

        // --- Beta Form ---
        async function handleBetaSubmit() {
            const email = document.getElementById('beta-email').value;
            const gdpr = document.getElementById('beta-gdpr-check').checked;
            const messageEl = document.getElementById('beta-message');
            if (!email) {
                messageEl.textContent = 'Por favor ingresa un correo';
                messageEl.className = 'message error';
                return;
            }
            if (!gdpr) {
                messageEl.textContent = 'Debes aceptar la política de protección de datos.';
                messageEl.className = 'message error';
                return;
            }

            // Aquí iría la lógica de Supabase para guardar el email beta
            // const { error } = await supabase.from("correos_Beta").insert([{ correo: email }]);
            // Por ahora, simulamos éxito
            messageEl.textContent = '¡Gracias! Te has registrado en la beta.';
            messageEl.className = 'message success';
            document.getElementById('beta-email').value = '';
            document.getElementById('beta-gdpr-check').checked = false;
        }

        // --- Scroll To Element ---
        function scrollToElement(id) {
            const element = document.getElementById(id);
            if (element) {
                element.scrollIntoView({ behavior: 'smooth' });
            }
        }
    </script>
@endsection