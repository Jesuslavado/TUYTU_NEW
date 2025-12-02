@extends('layouts.app')

@section('title', 'Política de Cookies - Tu&Tu')

@section('meta_description', 'Política de cookies de Tu&Tu - Información sobre el uso de cookies en nuestro sitio web de protección de imágenes contra deepfakes.')

@section('content')

<!-- Canvas 3D para el fondo, con efecto Partículas de Aura Flotante --><canvas id="threejs-background"></canvas>

<link rel="stylesheet" href="/css/cookies.css">

<!-- Contenedor principal para el contenido, encima del 3D --><!-- El atributo data-theme será establecido por JavaScript al leer localStorage --><div class="page-container theme">

    <header class="header parallax-item" data-speed="0.8">
        <h1>Política de Cookies</h1>
        <p class="date">Fecha de entrada en vigor: 14 de julio de 2025</p>
    </header>

    <main class="content">

        <!-- Envolvemos cada sección en la clase parallax-item --><section class="parallax-item" data-speed="1.2">
            <h2>1. ¿Qué son las cookies?</h2>
            <div class="box">
                <p>
                    Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas un sitio web. 
                    Permiten al sitio recordar tus preferencias, mejorar la experiencia de usuario y ofrecer contenido personalizado.
                </p>
            </div>
        </section>

        <section class="parallax-item" data-speed="0.9">
            <h2>2. ¿Qué tipos de cookies utilizamos?</h2>
            <!-- Agregamos la clase .box-group para mejor diseño en el CSS --><div class="box-group">
                <div class="box">
                    <h3>Cookies técnicas:</h3>
                    <p>Esenciales para el funcionamiento básico del sitio web. Permiten la navegación, el uso de formularios y funcionalidades básicas.</p>
                </div>

                <div class="box">
                    <h3>Cookies de personalización:</h3>
                    <p>Permiten recordar información como el idioma, el tipo de navegador o la configuración regional del usuario.</p>
                </div>

                <div class="box">
                    <h3>Cookies analíticas:</h3>
                    <p>Recogen información sobre cómo los usuarios interactúan con la web, como páginas visitadas, tiempo de permanencia o errores detectados. Esta información es anónima y nos ayuda a mejorar la usabilidad.</p>
                </div>
            </div>
        </section>

        <section class="parallax-item" data-speed="1.1">
            <h2>3. ¿Cómo puedes gestionar tus cookies?</h2>
            <div class="box">
                <p>Al ingresar por primera vez a nuestro sitio, se mostrará un banner de consentimiento para que puedas:</p>
                <ul>
                    <li>Aceptar todas las cookies.</li>
                    <li>Rechazar todas las cookies no esenciales.</li>
                    <li>Configurar tus preferencias de forma personalizada.</li>
                </ul>

                <p>Puedes modificar tu configuración de cookies en cualquier momento desde la sección de ajustes de tu navegador. También puedes eliminar las cookies almacenadas previamente.</p>

                <p>Ten en cuenta que desactivar algunas cookies puede afectar negativamente el funcionamiento de determinadas funcionalidades del sitio web.</p>
            </div>
        </section>

        <section class="parallax-item" data-speed="0.7">
            <h2>4. ¿Durante cuánto tiempo conservamos las cookies?</h2>
            <div class="box">
                <p>
                    El tiempo de conservación varía según el tipo de cookie, pero nunca se mantendrán más allá de lo estrictamente necesario para los fines descritos. 
                    Las cookies persistentes pueden permanecer en tu dispositivo hasta 24 meses, salvo que las elimines antes.
                </p>
            </div>
        </section>

        <section class="parallax-item" data-speed="1.3">
            <h2>5. Cumplimiento normativo</h2>
            <div class="box">
                <ul>
                    <li>Reglamento General de Protección de Datos (RGPD).</li>
                    <li>Ley de Servicios de la Sociedad de la Información y Comercio Electrónico (LSSI-CE).</li>
                </ul>
            </div>
        </section>

        <section class="parallax-item" data-speed="0.95">
            <h2>6. Contacto</h2>
            <div class="box">
                <p>
                    Si tienes dudas sobre el uso de cookies en nuestro sitio web o deseas ejercer tus derechos en materia de protección de datos, puedes escribirnos a:
                    <a>privacidad@tuytu.tech</a>
                </p>
            </div>
        </section>

    </main>
</div>

<!-- Scripts: Three.js y tu efecto mejorado --><script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
<script src="/js/threejs-effect.js"></script>

@endsection