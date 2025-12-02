@extends('layouts.app')

@section('title', 'Manifiesto - TU&TU')

@section('meta_description', 'Manifiesto completo de TU&TU: nuestra visión, valores y compromiso con la protección de imágenes mediante IA.')

@section('content')

<link rel="stylesheet" href="/css/manifiesto.css">

<div class="page-container theme">

    <header class="header">
        <h1>Manifiesto TU&TU</h1>
        <p class="date">Última actualización: 25 de noviembre de 2025</p>
    </header>

    <main class="content">

        @php
            $paragraphs = [
                "Un día cualquiera, tu móvil vibra. Un grupo del instituto, del trabajo, de amigos. Un enlace. Un “mira esto”. Abres. Y ahí estás. Tu cara, pegada a un cuerpo que no reconoces. Un cuerpo que es y no es el tuyo. Una escena que nunca viviste. Un desnudo que nunca consentiste. El corazón se te cae al suelo. No sabes si tiras el móvil, si lo rompes, si miras más. Sientes algo que no debería sentir nadie: que tu cuerpo ya no te pertenece.",
                "Piensas en tu madre. En tu padre. En tu pareja. En tu clase. En tu jefe. En la palabra “reenviado”. El miedo se te mete en la garganta. La vergüenza te sube como si te desnudaran en mitad de una plaza. La rabia te estalla dentro, pero ni siquiera sabes contra quién gritar. Porque tú no hiciste esa foto. Tú no grabaste ese vídeo. Tú no diste tu consentimiento. Y aun así, tu imagen está ahí. Circulando, compartida, guardada en carpetas que no ves, descargada en discos duros que no conoces. Repetida por máquinas que no entienden de dignidad, solo de datos.",
                "Durante años nos dijeron que el problema eran “unos pocos gilipollas”. Gente mala, sin empatía, que disfruta humillando. Y sí, existen. Pero ahora no son solo ellos. Ahora hay sistemas que aprenden tu cara, tu cuerpo, tus gestos. IA que ve tu imagen una vez y la convierte en materia prima para fabricar mentiras. Máquinas que pueden usar tu cuerpo en tu contra sin conocerte, sin preguntarte, sin mirarte a los ojos.",
                "El sistema está roto cuando tu dignidad cabe en un archivo comprimido. Cuando tu cuerpo se convierte en un dato que se copia, se pega, se reenvía. Cuando la culpa se te pega a la piel a ti, mientras los verdaderos responsables desaparecen detrás de pantallas y algoritmos.",
                "No es tu culpa. Nunca lo fue. Ni cuando subiste una foto confiando. Ni cuando enviaste algo a alguien que creías seguro. Ni cuando simplemente existes en internet y tu cara está en una foto de clase, de verano, de una fiesta.",
                "La culpa es de un mundo que ha normalizado que tu cuerpo sea un recurso. Que tu imagen sea un material de entrenamiento. Que tu intimidad sea un experimento. Por eso existimos. TU&TU nace de esa herida. De la vergüenza que no te mereces, del miedo que no tendrías que conocer, de la rabia de ver a miles de personas convertidas en “contenido” sin haber hecho nada.",
                "Nacimos en un hackathon de ciberseguridad en 2024, sí. Pero en realidad nacimos mucho antes: nacimos la primera vez que alguien recibió un montaje suyo y dejó de dormir. La primera vez que una chica decidió no volver al instituto. La primera vez que alguien pensó en borrarse de todas partes, incluso del mundo.",
                "Decidimos que no nos bastaba con detectar el daño cuando ya está hecho. No queríamos solo señalar el incendio. Queríamos apagarlo antes de que empezara. TU&TU es nuestra forma de decirle a las máquinas: con este cuerpo, no. Protegemos tus imágenes para que la IA no pueda leerlas como siempre. Les quitamos poder a los modelos que aprenden de tu cara sin preguntarte. Les obligamos a desaprenderte, a olvidarte. Convertimos tu “dato” en algo indigerible para ellos, pero intacto para ti.",
                "Tecnología, sí. Pero, sobre todo, una postura. Una posición clara: estamos de tu lado, no del lado del algoritmo. Lo llamamos TU&TU porque este pacto empieza entre tú y tú. Entre la persona que eres hoy y la que serás mañana. Entre tu yo que tiene miedo y tu yo que decide protegerse. Entre tu cuerpo y tu futuro, unidos por una misma promesa: nunca más sin tu consentimiento.",
                "No hablamos solo contigo si ya has sufrido esto. Hablamos también con tu padre, que quizá no entiende de deepfakes pero entiende de miedo. Con tu madre, que no soportaría ver tu imagen usada así. Con tu mejor amigo, que no sabría cómo mirarte a los ojos si te pasara. Con tu profe, que ve a su alumnado y sabe que cualquiera puede ser la próxima víctima. Con la pareja que te quiere y que jamás usaría tu intimidad como arma. Hablamos contigo aunque “aún no te haya pasado”. Porque sabes, muy dentro, que podría pasarte. O podría pasarle a alguien a quien quieres.",
                "TU&TU es ese “nosotros” que se planta. Que dice: ni una sola persona más sintiendo que su cuerpo es un archivo descargable. Que dice: tú no estás exagerando, tú no eres culpable, tú no estás sola. Somos una respuesta de amor, rabia y cuidado. Amor por quienes ya han sido heridas. Rabia contra un sistema que convierte la violencia en entretenimiento. Cuidado para construir un futuro donde tu imagen no pueda ser secuestrada por una máquina.",
            ];
        @endphp

        @foreach ($paragraphs as $paragraph)
            <section class="box floating-box">
                <p>{{ $paragraph }}</p>
            </section>
        @endforeach

        <section class="box manifesto-final floating-box">
            <p><strong>Tu cuerpo no es un dato</strong></p>
            <p><strong>Ninguna máquina decide quién eres</strong></p>
            <p><strong>Nunca más sin tu consentimiento</strong></p>
        </section>

    </main>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    const boxes = document.querySelectorAll(".floating-box");

    const observer = new IntersectionObserver(
        entries => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Si el elemento entra en la vista, lo mostramos
                    entry.target.classList.add("show");
                } else {
                    // Si el elemento sale de la vista (subes o bajas), lo ocultamos/reseteamos
                    entry.target.classList.remove("show"); 
                }
            });
        },
        // Threshold: 0.1 significa que se activa cuando el 10% del elemento es visible.
        // rootMargin: '0px 0px -10% 0px' da un margen para que desaparezca un poco antes
        { threshold: 0.1, rootMargin: '0px 0px -10% 0px' } 
    );

    boxes.forEach(box => observer.observe(box));
});
</script>

@endsection