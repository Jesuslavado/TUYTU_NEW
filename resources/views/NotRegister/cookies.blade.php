@extends('layouts.app')

@section('title', 'Política de Cookies - Tu&Tu')

@section('meta_description', 'Política de cookies de Tu&Tu - Información sobre el uso de cookies en nuestro sitio web de protección de imágenes contra deepfakes.')

@section('content')

<link rel="stylesheet" href="/css/cookies.css">

<div class="page-container theme">

    <header class="header">
        <h1>Política de Cookies</h1>
        <p class="date">Fecha de entrada en vigor: 14 de julio de 2025</p>
    </header>

    <main class="content">

        <section>
            <h2>1. ¿Qué son las cookies?</h2>
            <div class="box">
                <p>
                    Las cookies son pequeños archivos de texto que se almacenan en tu dispositivo cuando visitas un sitio web. 
                    Permiten al sitio recordar tus preferencias, mejorar la experiencia de usuario y ofrecer contenido personalizado.
                </p>
            </div>
        </section>

        <section>
            <h2>2. ¿Qué tipos de cookies utilizamos?</h2>

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
        </section>

        <section>
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

        <section>
            <h2>4. ¿Durante cuánto tiempo conservamos las cookies?</h2>
            <div class="box">
                <p>
                    El tiempo de conservación varía según el tipo de cookie, pero nunca se mantendrán más allá de lo estrictamente necesario para los fines descritos. 
                    Las cookies persistentes pueden permanecer en tu dispositivo hasta 24 meses, salvo que las elimines antes.
                </p>
            </div>
        </section>

        <section>
            <h2>5. Cumplimiento normativo</h2>
            <div class="box">
                <ul>
                    <li>Reglamento General de Protección de Datos (RGPD).</li>
                    <li>Ley de Servicios de la Sociedad de la Información y Comercio Electrónico (LSSI-CE).</li>
                </ul>
            </div>
        </section>

        <section>
            <h2>6. Contacto</h2>
            <div class="box">
                <p>
                    Si tienes dudas sobre el uso de cookies en nuestro sitio web o deseas ejercer tus derechos en materia de protección de datos, puedes escribirnos a:
                    <a href="mailto:privacidad@tuytu.tech">privacidad@tuytu.tech</a>
                </p>
                <p class="update">Última actualización: 14 de julio de 2025</p>
            </div>
        </section>

    </main>
</div>

@endsection
