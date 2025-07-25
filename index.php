<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>MAGBA</title>
</head>

<body>
    <header>
        <nav>
            <img src="images/logo.png" alt="">
            <ul>
                <li>Inicio</li>
                <li>Quiénes Somos</li>
                <li>Especialistas</li>
                <li>Servicios</li>
                <li>Equipos Especializados</li>
                <li>Investigaciones</li>
                <li>Contáctenos</li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="slider">
            <div class="slide1">
                <div class="slide1__img2">
                    <img src="images/lab.jpg" alt="">
                </div>
                <div class="slide1__text">
                    <h1>NEURODIGITAL</h1>
                    <p>Tecnología y atención, al servicio de tu salud neurológica.</p>
                    <div class="text__a"><a href="#" class="btn-primary">Leer más</a></div>
                </div>
                <img src="images/cerebro2000.png" class="slide1__img1" alt="">
            </div>
        </div>
        <div>
            <!-- <section class="servicios">
                <figure>
                    <img src="images/doc3.jpg" alt="" width="200px">
                </figure>
                <div class="servicios__items">
                    <article>
                        <div class="servicios__text">
                            <h2>Electroencefalograma (EEG)</h2>
                            <p>Es una prueba que se usa para estudiar el funcionamiento del sistema nervioso central.</p>
                        </div>
                        <div class="servicios__filter"></div>
                    </article>
                    <article>
                        <div class="servicios__text">
                            <h2>Electromiografía (EMG)</h2>
                            <p>Es un estudio que permite el diagnostico de patologías relacionadas con el sistema nervioso periférico.</p>
                        </div>
                        <div class="servicios__filter"></div>
                    </article>
                    <article>
                        <div class="servicios__text">
                            <h2>Polisomnografía</h2>
                            <p>Es una prueba no invasiva e indolora que permite el estudio del sueño, sus fases (REM y no REM)</p>
                        </div>
                        <div class="servicios__filter"></div>
                    </article>
                    <article>
                        <div class="servicios__text">
                            <h2>Videotelemetría</h2>
                            <p>Valora simultáneamente el comportamiento clínico del paciente mediante el registro de vídeo.</p>
                        </div>
                        <div class="servicios__filter"></div>
                    </article>
                    <article>
                        <div class="servicios__text">
                            <h2>Neuroconducción (NCD)</h2>
                            <p>Permite el diagnostico de las enfermedades del sistema nervioso periférico.</p>
                        </div>
                        <div class="servicios__filter"></div>
                    </article>
                    <article>
                        <div class="servicios__text">
                            <h2>Potenciales Evocados Visuales (PEV)​</h2>
                            <p>Es un estudio diagnóstico que permite evaluación fisiológica no invasiva del Nervio Óptico.​</p>
                        </div>
                        <div class="servicios__filter"></div>
                    </article>
                    <article>
                        <div class="servicios__text">
                            <h2>Potenciales Evocados Auditivos (PEA)</h2>
                            <p>Es un examen que mide el funcionamiento del nervio auditivo y las vías auditivas en el tallo cerebral.</p>
                        </div>
                        <div class="servicios__filter"></div>
                    </article>
                    <article>
                        <div class="servicios__text">
                            <h2>Potenciales Evocados Somatosensoriales (PESS)</h2>
                            <p>Son la manifestación eléctrica de las respuesta cerebral, en el área somatosensorial posterior a la aplicación de estímulos eléctricos.</p>
                        </div>
                        <div class="servicios__filter"></div>
                    </article>
                </div>
            </section> -->
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
            <section class="container-equipos">
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
                                        <a href="#" class="btn-secundary">Detalles</a>
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
                                        <a href="#" class="btn-secundary">Detalles</a>
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
            <section class="section-drs">
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
            <footer>
                <div class="footer__container">
                    <figure>
                        <img src="images/logo.png" alt="">
                    </figure>
                    <div class="footer__social">
                        <span class="footer--span">Síguenos</span>
                        <div class="social--links">
                            <a href="#"><img src="images/facebook.svg" alt=""> <span>facebook/magba</span></a>
                            <a href="#"><img src="images/instagram.svg" alt=""><span>instagram/magba</span></a>
                            <a href="#"><img src="images/x.svg" alt=""><span>x/magba</span></a>
                            <a href="#"><img src="images/youtubeBlack.svg" alt=""><span>youtube/magba</span></a>
                        </div>
                    </div>
                    <div class="footer__contacto">
                        <span class="footer--span">Contáctanos</span>
                        <div class="contacto--links">
                            <span>Dirección: Carrera 16 A # 82-46 Cons. 711</span>
                            <span>Teléfono: +(601) 308-7869</span>
                            <span>Celular: + 317 285 9236</span>
                            <span>Email: magbaneurodigital@gmail.com</span>
                        </div>
                    </div>
                </div>
                <div class="derechos">Todos los derechos reservados</div>
            </footer>
    </main>
</body>

</html>