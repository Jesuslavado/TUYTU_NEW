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
                <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="#EA4335" d="M24 5.457v13.909c0 .904-.732 1.636-1.636 1.636h-3.819V11.73L12 16.64l-6.545-4.91v9.273H1.636A1.636 1.636 0 0 1 0 19.366V5.457c0-2.023 2.309-3.178 3.927-1.964L5.455 4.64 12 9.548l6.545-4.91 1.528-1.145C21.69 2.28 24 3.434 24 5.457z"/>
                </svg>
                <span>protegeme@tuytu.com</span>
            </div>

            {{-- Redes Sociales --}}
            <div class="contact-socials">
                {{-- Instagram --}}
                <a href="https://www.instagram.com/tuytu.tech/" target="_blank" class="social-link">
                    <svg class="icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                        <path fill="#E1306C" d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/>
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