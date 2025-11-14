@extends('layouts.app')

@section('title', 'Contáctanos - TU&TU')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<section class="contact-section">
    <div class="contact-container">

        {{-- Columna Izquierda --}}
        <div class="contact-info">
            <h1 class="contact-title">Contáctanos</h1>

            <p class="contact-description">
                Este proyecto es un gran emprendimiento y esperamos que se convierta en una verdadera revolución. 
                Nuestro objetivo es acabar con el abuso mediante inteligencia artificial y proteger nuestras fotos más queridas, 
                manteniéndolas siempre seguras y bajo control.
                <br><br>
                Si tienes cualquier duda, aquí tienes toda nuestra información de contacto.
            </p>

            {{-- Email --}}
            <div class="contact-email">
                {{-- Gmail SVG --}}
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="#EA4335" d="M502.3 190.8L327.2 336.4l175.1 145.6c11.7-23.5 18.5-50 18.5-77.8 0-27.8-6.8-54.3-18.5-77.8z"/>
                    <path fill="#34A853" d="M0 190.8c0 27.8 6.8 54.3 18.5 77.8l175.1-145.6L18.5 190.8z"/>
                    <path fill="#FBBC05" d="M512 190.8v130.4c0 38.3-15.3 73.1-40 98.3L296 336.4 512 190.8z"/>
                    <path fill="#4285F4" d="M18.5 268.6c-11.7 23.5-18.5 49.5-18.5 77.8s6.8 54.3 18.5 77.8l175.1-145.6-175.1-110z"/>
                </svg>
                <span>protegeme@tuytu.com</span>
            </div>

            {{-- Redes Sociales --}}
            <div class="contact-socials">
                {{-- Instagram --}}
                <a href="https://www.instagram.com/tuytu.tech/" target="_blank" class="social-link">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="#E1306C" d="M224,202.66A53.34,53.34,0,1,0,277.34,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.56-30.56c-21.19-8.2-71.44-6.3-95.15-6.3s-74-.14-95.15,6.3a54,54,0,0,0-30.56,30.56c-8.2,21.19-6.3,71.44-6.3,95.15s-.14,74,6.3,95.15a54,54,0,0,0,30.56,30.56c21.19,8.2,71.44,6.3,95.15,6.3s74,.14,95.15-6.3a54,54,0,0,0,30.56-30.56c8.2-21.19,6.3-71.44,6.3-95.15S357.91,182.85,348.71,161.66Z"/>
                    </svg>
                </a>

                {{-- LinkedIn SVG --}}
                <a href="https://www.linkedin.com/in/tuytu-tech-04a075378/" target="_blank" class="social-link">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path fill="#0077B5" d="M100.28 448H7.4V148.9h92.88zm-46.44-340.1C24.3 107.9 0 83.7 0 54.7 0 25.3 24.3 0 53.84 0c29.5 0 53.7 25.3 53.7 54.7 0 29-24.2 53.2-54.7 53.2zM447.9 448h-92.7V302.4c0-34.7-12.4-58.4-43.4-58.4-23.7 0-37.7 15.9-43.9 31.3-2.3 5.5-2.8 13.1-2.8 20.7V448h-92.7s1.2-238.6 0-263.1h92.7v37.3c12.3-19 34.3-46 83.4-46 60.9 0 106.6 39.8 106.6 125.4V448z"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Columna Derecha --}}
        <div class="contact-logo">
            <img src="{{ asset('images/logo.png') }}" alt="Tu&Tu Logo">
        </div>
    </div>
</section>
@endsection
