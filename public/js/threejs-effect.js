document.addEventListener('DOMContentLoaded', () => {

    // --- CONFIGURACIÓN DE TEMA ---
    const pageContainer = document.querySelector('.page-container');
    // Inicializa el tema leyendo el valor guardado por el botón externo de la cabecera.
    // Si no hay nada guardado, usa 'dark' por defecto.
    let currentTheme = localStorage.getItem('theme') || 'dark'; 
    
    // Define los colores de partículas para ambos temas
    const themeColors = {
        dark: 0x47a4ff, // Azul primario para modo oscuro
        light: 0x0077ff // Azul fuerte para modo claro
    };

    let particles;
    let particleCount = 500;


    /**
     * Aplica el tema (colores CSS y partículas 3D) basado en el tema proporcionado.
     * @param {string} theme - 'dark' or 'light'
     */
    function applyTheme(theme) {
        currentTheme = theme;
        // 1. Aplica el atributo data-theme para que el CSS cambie
        pageContainer.setAttribute('data-theme', currentTheme);
        
        // 2. Actualiza el color de las partículas 3D si están inicializadas
        if (particles && particles.material) {
            particles.material.color.setHex(themeColors[currentTheme]);
        }
    }

    // Escuchar el evento 'storage' para sincronizar con el botón de la cabecera.
    // Esto se activa cuando el botón externo cambia localStorage.theme.
    window.addEventListener('storage', (event) => {
        // Solo actualiza si la clave 'theme' cambió
        if (event.key === 'theme' && (event.newValue === 'light' || event.newValue === 'dark')) {
            applyTheme(event.newValue);
        }
    });
    
    // --- PARTE 1: CONFIGURACIÓN Y EFECTO THREE.JS (Partículas de Aura Flotante) ---

    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(60, window.innerWidth / window.innerHeight, 0.1, 1000);
    const renderer = new THREE.WebGLRenderer({
        canvas: document.getElementById('threejs-background'),
        alpha: true // Permite un fondo transparente para que el color del body se vea
    });

    // Se establece el tamaño completo de la ventana
    renderer.setSize(window.innerWidth, window.innerHeight);
    camera.position.z = 10;
    
    // Función para inicializar las partículas
    function initParticles() {
        const geometry = new THREE.BufferGeometry();
        const vertices = [];
        
        for (let i = 0; i < particleCount; i++) {
            // Posición aleatoria en un espacio 3D (para un efecto de niebla cósmica)
            const x = THREE.MathUtils.randFloatSpread(50); 
            const y = THREE.MathUtils.randFloatSpread(50);
            const z = THREE.MathUtils.randFloatSpread(50);
            vertices.push(x, y, z);
        }

        geometry.setAttribute('position', new THREE.Float32BufferAttribute(vertices, 3));

        // Obtiene el color inicial del tema (dark por defecto o el guardado)
        const color = themeColors[currentTheme];

        const material = new THREE.PointsMaterial({
            color: color,
            size: 0.1, // Partículas pequeñas
            sizeAttenuation: true, // Se hacen más pequeñas al alejarse
            transparent: true,
            opacity: 0.6
        });

        particles = new THREE.Points(geometry, material);
        scene.add(particles);
        
        // Aplica el tema guardado inmediatamente después de la inicialización 3D
        applyTheme(currentTheme); 
    }
    
    initParticles();


    // --- PARTE 2: EFECTO PARALLAX HTML Y CONTROL DE MOUSE ---

    const mouse = new THREE.Vector2();
    let targetX = 0;
    let targetY = 0;
    const windowHalfX = window.innerWidth / 2;
    const windowHalfY = window.innerHeight / 2;
    const parallaxItems = document.querySelectorAll('.parallax-item');
    const parallaxStrength = 15; // Fuerza de movimiento Parallax

    document.addEventListener('mousemove', onMouseMove);

    function onMouseMove(event) {
        // Para la rotación de la cámara 3D (Fondo 3D)
        targetX = (event.clientX - windowHalfX) * 0.0003; 
        targetY = (event.clientY - windowHalfY) * 0.0003;

        // Para el Parallax de los elementos HTML
        mouse.x = (event.clientX / window.innerWidth) - 0.5;
        mouse.y = (event.clientY / window.innerHeight) - 0.5;
        
        updateParallax();
    }
    
    function updateParallax() {
        // Evitar el Parallax basado en mouse si es un dispositivo táctil (para evitar bugs)
        if ('ontouchstart' in window || navigator.maxTouchPoints) {
            return; 
        }

        parallaxItems.forEach(item => {
            const speed = parseFloat(item.getAttribute('data-speed')) || 1.0; 
            
            // Calculamos el desplazamiento
            const xOffset = -mouse.x * parallaxStrength * speed;
            const yOffset = -mouse.y * parallaxStrength * speed;

            // Usamos translate3d para un mejor rendimiento de la GPU
            item.style.transform = `translate3d(${xOffset}px, ${yOffset}px, 0)`;
        });
    }

    // --- PARTE 3: BUCLE DE ANIMACIÓN ---

    function animate() {
        requestAnimationFrame(animate);

        // Movimiento de la cámara (Parallax del Fondo)
        camera.position.x += (targetX - camera.position.x) * 0.05;
        camera.position.y += (targetY - camera.position.y) * 0.05;
        camera.lookAt(scene.position);
        
        // Rotación general sutil de las partículas
        particles.rotation.x += 0.00005; 
        particles.rotation.y += 0.0001; 

        renderer.render(scene, camera);
    }

    animate();

    // 4. Manejo de Redimensionamiento de Ventana (Crucial para Mobile)
    window.addEventListener('resize', onWindowResize, false);

    function onWindowResize() {
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);
    }
});