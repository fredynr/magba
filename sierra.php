<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>

    <title>Sierra Summit</title>
</head>

<body>
    <?php
    include_once('partials/header.php');
    ?>
    <main>
        <section class="modal-sierra">
            <div class="container-sierra">
                <div class="sierra-description">
                    <article>
                        <h2>Sierra Summit</h2>
                        <p>
                            Está diseñado para el electromiógrafo que prioriza la confiabilidad y la eficiencia.
                            Cadwell nos brinda neurodiagnósticos de vanguardia con hardware innovador y software innovador.
                        </p>
                        <p>
                            Equipo para electromiografía y velocidad de conducción
                        </p>
                    </article>
                    <article class="cadwell">
                        <h3>Poseemos un equipo marca CADWELL Sierra Summit, para:</h3>
                        <ol class="ordered-list">
                            <li>Estudios de electromiograf ía y velocidad de Conducción</li>
                            <li>Miembros superiores o inferiores</li>
                            <li>Realización de reflejo de parpadeo</li>
                            <li>Estimulo repetitivo ondas F y reflejos H</li>
                        </ol>
                    </article>
                </div>
                <div class="right-modal">
                    <figure>
                        <img src="images/sierra.jpg" alt="">
                    </figure>
                </div>
            </div>
        </section>
        <section class="modal-sierra-details">
            <article class="sierra-detail">
                <figure>
                    <img src="images/sierraepe.jpg" alt="">
                </figure>
                <div class="text-sierra-details">
                    <h3>Estudios de Potenciales Evocados Visuales con patrón reverso y flash.</h3>
                    <ul>
                        <li>Campos seleccionables, tamaños de verificación y objetivos​</li>
                    </ul>
                </div>
            </article>
            <article class="sierra-detail">
                <figure>
                    <img src="images/sierrabera.jpg" alt="">
                </figure>
                <div class="text-sierra-details">
                    <h3>Estudios de Potenciales Evocados Auditivos de tallo Cerebral (BERA)</h3>
                    <p>Con audífonos y estimulación auditiva de click, alterno, rarefacción o condensación de 10 a 110 dB.</p>
                    <ol class="ordered-list">
                        <li>CCondensación, rarefacción y alternancia​</li>
                        <li>Clic, tonos, PIP 202 y PIP 212</li>
                        <li>WAV, disparo de entrada y salida de disparo</li>
                    </ol>
                </div>
            </article>
            <article class="sierra-detail">
                <figure>
                    <img src="images/sierrasomato.jpg" alt="">
                </figure>
                <div class="text-sierra-details">
                    <h3>Estudios de Potenciales Evocados Somatosensoriales</h3>
                    <p>de miembros inferiores, superiores o pudendo.</p>
                    <ol class="ordered-list">
                        <li>Postprocesamiento avanzado: comparar, agregar, promediar, promedio general, suavizar e invertir pruebas</li>
                        <li>Modos avanzados de estimulación y adquisición</li>
                    </ol>
                </div>
            </article>
        </section>
    </main>

</body>

</html>