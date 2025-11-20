<link rel="stylesheet" href="{{ asset('css/header.css') }}">

<header class="site-header">
    <div class="container">
        <a href="{{ url('/') }}" class="logo">
            <img src="{{ asset('images/logo.png') }}" alt="Logo Tu&Tu">
        </a>

        <nav class="nav" id="desktop-nav">
            <a href="{{ url('/') }}">Inicio</a>
            <a href="{{ url('/cookies') }}">Cookies</a>
            <a href="{{ url('/terminos') }}">Términos</a>
            <a href="{{ url('/contact') }}">Contacto</a>
            <a href="https://drive.google.com/file/d/1tBf98K3ByT80OqORRWKhyLw91uqaJhgu/view?usp=sharing" target="_blank" class="btn">Guía Familias</a>
            <a href="https://drive.google.com/file/d/1ffCtl9ggzllQAJgyE1uXM78YeGhl9jlg/view?usp=sharing" target="_blank" class="btn">PDF Inversores</a>
            <button id="theme-toggle" class="theme-toggle" type="button">🌙</button>
        </nav>

        <button id="menu-btn" class="menu-btn">☰</button>
    </div>

    <nav class="mobile-nav" id="mobile-nav">
        <a href="{{ url('/') }}">Inicio</a>
        <a href="{{ url('/politica-de-privacidad') }}">Privacidad</a>
        <a href="{{ url('/cookies') }}">Cookies</a>
        <a href="{{ url('/terminos-de-uso') }}">Términos</a>
        <a href="{{ url('/contacto') }}">Contacto</a>
    </nav>
</header>

<script>
document.addEventListener("DOMContentLoaded", () => {
  const menuBtn = document.getElementById("menu-btn");
  const mobileNav = document.getElementById("mobile-nav");
  const themeBtn = document.getElementById("theme-toggle");

  menuBtn.addEventListener("click", () => {
    mobileNav.classList.toggle("show");
  });

  themeBtn.addEventListener("click", () => {
    document.body.classList.toggle("light");
    themeBtn.textContent = document.body.classList.contains("light") ? "☀️" : "🌙";
  });
});
</script>
