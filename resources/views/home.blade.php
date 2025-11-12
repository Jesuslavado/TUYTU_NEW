@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title">La mejor plataforma educativa para tus hijos</h1>
                <p class="hero-subtitle">Accede a contenido educativo de calidad, diseñado por expertos para el aprendizaje efectivo de los más pequeños.</p>
                
                <div class="hero-buttons">
                    <a href="{{ route('register') }}" class="btn btn-primary">Comenzar ahora</a>
                    <a href="#caracteristicas" class="btn btn-outline">Ver características</a>
                </div>

                <!-- Imagen de ejemplo -->
                <div style="margin-top: 4rem;">
                    <div style="border-radius: 0.5rem; overflow: hidden; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);">
                        <img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" 
                             alt="Plataforma educativa" 
                             style="width: 100%; height: auto; display: block;">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Características -->
    <section id="caracteristicas" class="features">
        <div class="container">
            <h2 class="section-title">Características principales</h2>
            <p class="section-subtitle">Descubre todo lo que nuestra plataforma puede ofrecerte</p>
            
            <div class="features-grid">
                <!-- Característica 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Aprendizaje personalizado</h3>
                    <p class="feature-description">Contenido adaptado al ritmo de aprendizaje de cada niño, con seguimiento de progreso en tiempo real.</p>
                </div>

                <!-- Característica 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <circle cx="12" cy="12" r="10"></circle>
                            <line x1="2" y1="12" x2="22" y2="12"></line>
                            <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Contenido interactivo</h3>
                    <p class="feature-description">Actividades y juegos educativos que hacen del aprendizaje una experiencia divertida y efectiva.</p>
                </div>

                <!-- Característica 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                    </div>
                    <h3 class="feature-title">Soporte de expertos</h3>
                    <p class="feature-description">Acceso a tutores y educadores especializados para resolver dudas y guiar el aprendizaje.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-16 bg-gray-50">
        <div class="container text-center">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">¿Listo para comenzar?</h2>
            <p class="text-lg text-gray-600 mb-8 max-w-2xl mx-auto">Únete a miles de familias que ya están transformando la educación de sus hijos.</p>
            <a href="{{ route('register') }}" class="btn btn-primary">Regístrate gratis</a>
        </div>
    </section>
@endsection
