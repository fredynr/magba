<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
    <title>MAGBA</title>
</head>

<body>
    <?php
    include_once('partials/header.php');
    ?>
    <div id="modal-sierra" class="hidde-modal">
        <div class="bg-modal">
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
            <button id="btn-close-sierra" class="btn-close">Cerrar <img src="images/close.svg" alt=""> </button>
        </div>
    </div>

    <div id="modal-easy" class="hidde-modal">
        <div class="bg-modal">
            <section class="modal-sierra">
                <div class="container-sierra">
                    <div class="sierra-description">
                        <article>
                            <h2>CADWEL EASY III</h2>
                            <p>
                                Equipo para Polisomnografía y Latencias Múltiples de Sueño
                            </p>
                            <p>
                                Contamos con un equipo CADWEL EASY
                                III de 42 canales, digital y aplicación
                                de 22 electrodos con montaje bipolar y
                                referencial A1 y A2.
                            </p>
                        </article>
                        <article class="cadwell">
                            <h3>Poseemos un equipo para Polisomnografía marca CADWELL Digital; Paperless, de 42 canales, con:</h3>
                            <ol class="ordered-list">
                                <li>Registro simultaneo de la actividad electroencefalográfica.</li>
                                <li>Electro-oculograma.</li>
                                <li>Electromiograf ía del mentón y ambos músculos tíbiales anteriores.</li>
                                <li>EKG en DI.</li>
                                <li>Flujo nasal aéreo.</li>
                                <li>Movimientos respiratorios abdominales, torácicos y pulsoximetria.</li>
                            </ol>
                        </article>
                    </div>
                    <div class="right-modal">
                        <div>
                            <img src="images/eASY3.jpg" alt="" height="330">
                        </div>
                    </div>
                </div>
            </section>
            <button class="btn-close" id="btn-close-easy">Cerrar <img src="images/close.svg" alt=""> </button>
        </div>
    </div>


    <main>
        <div class="slider">
            <div class="slide1">
                <div class="slide1__img2">
                    <img src="images/lab3.jpg" alt="">
                    <div class="layer-hidden">
                        <p>Solicita tu cita como paciente particular por alguno de nuestros canales de atención:</p>
                        <a href="#" class="btn-primary g-btn-cita">Solicitar cita</a>
                        <a href="#" class="layer-hidden--whatsapp"><img src="images/whatsapp.svg" alt="whatsapp"> whatsapp</a>
                    </div>
                </div>
                <div class="slide1__text g-h1-header">
                    <h1 class="title1">NEURODIGITAL</h1>
                    <p>Tecnología y atención, al servicio de tu salud neurológica.</p>
                </div>
                <img src="images/cerebro2000.png" class="slide1__img1" alt="">
            </div>
        </div>
        <div>
            <section class="container-servicios">
                <div class="servicios-header">
                    <h2><span>Nuestros</span> Servicios</h2>
                    <p>Especialistas en <b>salud neurológica:</b> diagnóstico preciso, estudios clínicos avanzados y acompañamiento integral para el bienestar mental.</p>
                </div>
                <div class="servicios">
                    <figure class="servicios__figure">
                        <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At libero reiciendis perferendis quasi ipsam perspiciatis amet quos sed labore accusamus!</p> -->
                        <img src="images/doc3.jpg" alt="" width="200px">
                    </figure>
                    <article class="servicios__article1">
                        <div class="servicios__btn">
                            <span>(EEG)</span>
                            <a href="#" class="btn-secundary">Detalles</a>
                        </div>
                        <div class="servicios--bg">
                            <div class="servicios__text">
                                <img src="images/serviceIcon.svg" alt="">
                                <div>
                                    <h3> Electroencefalograma (EEG)</h3>
                                    <p>
                                        Es una prueba que se usa para estudiar el funcionamiento del sistema nervioso central.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="servicios__article2">
                        <div class="servicios__btn">
                            <span>(EMG)</span>
                            <a href="#" class="btn-secundary">Detalles</a>
                        </div>
                        <div class="servicios--bg">
                            <div class="servicios__text">
                                <img src="images/serviceIcon.svg" alt="">
                                <div>
                                    <h3>Electromiografía (EMG)</h3>
                                    <p>
                                        Es un estudio que permite el diagnostico de patologías relacionadas con el sistema nervioso periférico.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="servicios__article3">
                        <div class="servicios__btn">
                            <span></span>
                            <a href="#" class="btn-secundary">Detalles</a>
                        </div>
                        <div class="servicios--bg">
                            <div class="servicios__text">
                                <img src="images/serviceIcon.svg" alt="">
                                <div>
                                    <h3>Polisomnografía</h3>
                                    <p>
                                        Es una prueba no invasiva e indolora que permite el estudio del sueño, sus fases (REM y no REM)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="servicios__article4">
                        <div class="servicios__btn">
                            <span></span>
                            <a href="#" class="btn-secundary">Detalles</a>
                        </div>
                        <div class="servicios--bg">
                            <div class="servicios__text">
                                <img src="images/serviceIcon.svg" alt="">
                                <div>
                                    <h3>Videotelemetría</h3>
                                    <p>
                                        Valora simultáneamente el comportamiento clínico del paciente mediante el registro de vídeo.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="servicios__article5">
                        <div class="servicios__btn">
                            <span>(NCD)</span>
                            <a href="#" class="btn-secundary">Detalles</a>
                        </div>
                        <div class="servicios--bg">
                            <div class="servicios__text">
                                <img src="images/serviceIcon.svg" alt="">
                                <div>
                                    <h3>Neuroconducción (NCD)</h3>
                                    <p>
                                        Permite el diagnostico de las enfermedades del sistema nervioso periférico.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="servicios__article6">
                        <div class="servicios__btn">
                            <span>(PEV)</span>
                            <a href="#" class="btn-secundary">Detalles</a>
                        </div>
                        <div class="servicios--bg">
                            <div class="servicios__text">
                                <img src="images/serviceIcon.svg" alt="">
                                <div>
                                    <h3>Potenciales Evocados Visuales (PEV)</h3>
                                    <p>
                                        Es un estudio diagnóstico que permite evaluación fisiológica no invasiva del Nervio Óptico.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="servicios__article7">
                        <div class="servicios__btn">
                            <span>(PEA)</span>
                            <a href="#" class="btn-secundary">Detalles</a>
                        </div>
                        <div class="servicios--bg">
                            <div class="servicios__text">
                                <img src="images/serviceIcon.svg" alt="">
                                <div>
                                    <h3>Potenciales Evocados Auditivos (PEA)</h3>
                                    <p>
                                        Es un examen que mide el funcionamiento del nervio auditivo y las vías auditivas en el tallo cerebral.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="servicios__article8">
                        <div class="servicios__btn">
                            <span>(PESS)</span>
                            <a href="#" class="btn-secundary">Detalles</a>
                        </div>
                        <div class="servicios--bg">
                            <div class="servicios__text">
                                <img src="images/serviceIcon.svg" alt="">
                                <div>
                                    <h3>Potenciales Evocados Somatosensoriales (PESS)</h3>
                                    <p>
                                        Son la manifestación eléctrica de las respuesta cerebral, en el área somatosensorial posterior a la aplicación de estímulos eléctricos.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </article>
                </div>
            </section>
            <section id="equipos" class="container-equipos">
                <div>
                    <article>
                        <div class="equipos__header">
                            <h2>Equipos Especializados</h2>
                            <p>Tecnología al servicio de la salud</p>
                        </div>
                        <div class="equipos">
                            <div class="equipo">
                                <div class="equipo__text">
                                    <h2>Sierra Summit</h2>
                                    <p>
                                        Está diseñado para el electromiógrafo que prioriza la confiabilidad y la eficiencia. Cadwell nos brinda neurodiagnósticos de vanguardia con hardware innovador y software innovador.
                                        <button id="btn-sierra" class="btn-secundary">Detalles</button>
                                    </p>
                                </div>
                                <figure class="equipo__figure">
                                    <img src="images/sierra.jpg" alt="">
                                </figure>
                            </div>
                            <div class="equipo">
                                <div class="equipo__text">
                                    <h2>CADWEL EASY III</h2>
                                    <p>
                                        Contamos con un equipo CADWEL EASY
                                        III de 42 canales, digital y aplicación
                                        de 22 electrodos con montaje bipolar y
                                        referencial A1 y A2.
                                        <button id="btn-easy" class="btn-secundary">Detalles</button>
                                    </p>
                                </div>
                                <figure class="equipo__figure">
                                    <img src="images/eASY3.jpg" alt="">
                                </figure>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="mask"></div>
            </section>
            <div>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3976.5800342919256!2d-74.05937912552717!3d4.6687122419350935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9af4f8a0c50b%3A0xce3793421720d5fb!2sCl%C3%ADnica%20del%20Country!5e0!3m2!1ses-419!2sco!4v1753317542075!5m2!1ses-419!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <section id="especialistas" class="section-drs">
                <div>
                    <div class="drs-header">
                        <span>Equipo de profesionales</span>
                        <h2>Nuestro Especialistas</h2>
                        <p>
                            Profesionales altamente capacitados en neurología, comprometidos con brindar atención humana, diagnósticos precisos y soluciones integrales para tu salud mental.
                        </p>
                    </div>
                </div>
                <div class="container-drs">
                    <div class="dr">
                        <figure>
                            <img src="images/dr-barco-con-logo.jpg" alt="">
                            <figcaption>Dr. Manuel Guillermo Barco Ordúz</figcaption>
                            <p>Neurólogo Clínico Pontificia Universidad Javeriana</p>
                            <a href="#" class="btn-primary-green">Leer más...</a>
                        </figure>
                    </div>
                    <div class="dr">
                        <figure>
                            <img src="images/dra-paula-con-logo.jpg" alt="">
                            <figcaption>Dra. Paula Andrea Arenas Manrique</figcaption>
                            <p>Médico Cirujano de la Universidad El Bosque</p>
                            <a href="#" class="btn-primary-green">Leer más...</a>
                        </figure>
                    </div>
                    <div class="dr">
                        <figure>
                            <img src="images/dra-consuelo-web-con-logo.jpg" alt="">
                            <figcaption>Dra. Consuelo Patricia Díaz Valencia</figcaption>
                            <p>Especialista en Medicina física y rehabilitación Universidad Nacional de Colombia</p>
                            <a href="#" class="btn-primary-green">Leer más...</a>
                        </figure>
                    </div>
                    <div class="dr">
                        <figure>
                            <img src="images/dr-fabio-web.jpg" alt="">
                            <figcaption>Dr. Fabio Enrique Suárez Burgos</figcaption>
                            <p>Especialistas en Neurología clínica Universidad del Rosario</p>
                            <a href="#" class="btn-primary-green">Leer más...</a>
                        </figure>
                    </div>
                </div>
            </section>
            <?php include_once('partials/footer.php'); ?>
    </main>
    <script src="js/app.js"></script>
    <script src="js/modalMachines.js"></script>
</body>

</html>