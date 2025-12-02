@extends('layouts.app')

@section('title', 'Política de Privacidad - Tu&Tu')

@section('meta_description', 'Política de privacidad de Tu&Tu: Cómo protegemos tus datos y garantizamos tu seguridad digital.')

@section('content')

<link rel="stylesheet" href="/css/privacidad.css">

<div class="page-container theme">

    <header class="header">
        <h1>Política de Privacidad</h1>
        <p class="date">Fecha de entrada en vigor: 14 de julio de 2025</p>
    </header>

    <main class="content">

        {{-- 1. Responsable del tratamiento --}}
        <section>
            <h2>1. Responsable del tratamiento</h2>
            <div class="box">
                <p><strong>Identidad:</strong> TU&TU – Protección Digital S.L.</p>
                <p><strong>Correo electrónico de contacto:</strong> privacidad@tuytu.tech</p>
                <p><strong>Finalidad del tratamiento:</strong> Proteger la privacidad digital de menores y colectivos vulnerables mediante tecnología de protección avanzada de imágenes.</p>
            </div>
        </section>

        {{-- 2. Datos que recopilamos --}}
        <section>
            <h2>2. Datos que recopilamos</h2>
            <div class="box">
                <p>Recopilamos únicamente los datos necesarios para el correcto funcionamiento del servicio:</p>
                <ul>
                    <li>Correo electrónico (para contacto o suscripción opcional).</li>
                    <li>Dirección IP, navegador y preferencias de idioma (cookies técnicas y analíticas).</li>
                    <li>Imágenes enviadas por el usuario para su protección (procesadas y no almacenadas salvo consentimiento expreso).</li>
                </ul>
            </div>
        </section>

        {{-- 3. Finalidades del tratamiento --}}
        <section>
            <h2>3. Finalidades del tratamiento</h2>
            <div class="box">
                <ul>
                    <li>Permitir el acceso y funcionamiento del servicio.</li>
                    <li>Enviar información relacionada con la plataforma (si el usuario lo autoriza).</li>
                    <li>Mejorar seguridad, rendimiento y usabilidad.</li>
                    <li>Cumplir obligaciones legales aplicables.</li>
                </ul>
            </div>
        </section>

        {{-- 4. Base legal --}}
        <section>
            <h2>4. Base legal del tratamiento</h2>
            <div class="box">
                <p>El tratamiento se fundamenta en:</p>
                <ul>
                    <li>El consentimiento del usuario.</li>
                    <li>El interés legítimo en mantener un entorno seguro.</li>
                    <li>Obligaciones legales vigentes.</li>
                </ul>
            </div>
        </section>

        {{-- 5. Conservación de datos --}}
        <section>
            <h2>5. Conservación de datos</h2>
            <div class="box">
                <p>Los datos personales se conservan mientras exista relación con el usuario o hasta que este solicite su eliminación.</p>
                <p>Las imágenes subidas para protección se eliminan tras el procesamiento, salvo consentimiento explícito para conservarlas temporalmente con fines técnicos.</p>
            </div>
        </section>

        {{-- 6. Cesión de datos --}}
        <section>
            <h2>6. Cesión de datos a terceros</h2>
            <div class="box">
                <p>
                    TU&TU no vende ni cede datos personales a terceros.  
                    En caso de futuras integraciones (plataformas educativas, redes sociales, etc.) se garantizarán acuerdos con cláusulas de protección de datos.
                </p>
            </div>
        </section>

        {{-- 7. Derechos del usuario --}}
        <section>
            <h2>7. Derechos del usuario</h2>
            <div class="box">
                <p>Puedes ejercer los siguientes derechos:</p>
                <ul>
                    <li><strong>Acceso:</strong> Conocer qué datos personales tratamos.</li>
                    <li><strong>Rectificación:</strong> Corregir datos inexactos.</li>
                    <li><strong>Supresión:</strong> Solicitar la eliminación de tus datos.</li>
                    <li><strong>Oposición:</strong> Rechazar ciertos tratamientos.</li>
                    <li><strong>Limitación y portabilidad:</strong> En los casos previstos por la ley.</li>
                </ul>
                <p>
                    Para ejercer estos derechos escribe a  
                    <a href="mailto:protegeme@tuytu.tech">protegeme@tuytu.tech</a>  
                    adjuntando una copia de tu documento identificativo.
                </p>
            </div>
        </section>

        {{-- 8. Medidas de seguridad --}}
        <section>
            <h2>8. Medidas de seguridad</h2>
            <div class="box">
                <p>
                    Aplicamos medidas técnicas y organizativas avanzadas: cifrado, servidores seguros y procesamiento de imágenes sin almacenamiento permanente por defecto.
                </p>
            </div>
        </section>

        {{-- 9. Cambios en la política --}}
        <section>
            <h2>9. Cambios en la política de privacidad</h2>
            <div class="box">
                <p>
                    Nos reservamos el derecho a actualizar esta política para adaptarla a cambios legislativos o mejoras del servicio.
                    Notificaremos cualquier modificación relevante en nuestro sitio web.
                </p>
            </div>
        </section>

        {{-- 10. Autoridad de control --}}
        <section>
            <h2>10. Autoridad de control</h2>
            <div class="box">
                <p>
                    Si consideras que tus derechos no han sido atendidos correctamente, puedes presentar una reclamación ante la  
                    Agencia Española de Protección de Datos: <a href="https://www.aepd.es" target="_blank">www.aepd.es</a>.
                </p>
            </div>
        </section>

    </main>
</div>

@endsection
