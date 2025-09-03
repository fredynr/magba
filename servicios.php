<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>
    <title>Servicios</title>
</head>

<body>
    <?php
    include_once('partials/header.php');
    ?>
    <main class="main-servicios">
        <aside>
            <h2>Servicios</h2>
            <ul id="menu-left">
                <li data-page="eeg" class="li-btn">Electroencefalograma (EEG)</li>
                <li data-page="pyv" class="li-btn">Polisomnografía y Videotelemetría</li>
                <li data-page="emg" class="li-btn">Electromiografía (EMG)</li>
                <li data-page="ncd" class="li-btn">Neuroconducción (NCD)</li>
                <li data-page="pev" class="li-btn">Potenciales Evocados Visuales (PEV)</li>
                <li data-page="pea" class="li-btn">Potenciales Evocados Auditivos (PEA)</li>
                <li data-page="pess" class="li-btn">Potenciales Evocados Somatosensoriales (PESS)</li>
            </ul>
        </aside>
        <div id="render-template"></div>
        <template id="eeg">
            <section>
                <div class="box-one">
                    <div class="content-text">
                        <h1>Electroencefalograma (EEG)</h1>
                        <p>
                            Es una prueba que se usa para estudiar el funcionamiento del sistema nervioso central,
                            concretamente de la actividad eléctrica de la corteza cerebral.
                            Consiste esencialmente en registrar mediante electrodos especiales,
                            las corrientes eléctricas que se forman en las neuronas y que son la base del correcto funcionamiento cerebral.
                        </p>
                        <p>
                            Con esta prueba se puede identificar los ritmos normales y patológicos de la actividad cerebral. Las ondas eléctricas
                            normales dependen del estado de vigilia o de sueño. Las ondas que se encuentran habitualmente son:
                        </p>
                        <div class="servicios-brain">
                            <span>
                                <img src="images/brain.svg">
                                <h3>Vigilia</h3>
                            </span>
                            <p>
                                Ritmos alfa, delta, beta y thetha.
                            </p>
                        </div>
                        <div class="servicios-brain">
                            <span>
                                <img src="images/brain.svg">
                                <h3>Sueño</h3>
                            </span>
                            <p>
                                Actividad REM y no REM.
                            </p>
                        </div>
                        <div class="servicios-brain">
                            <span>
                                <img src="images/brain.svg">
                                <h3>Estímulos</h3>
                            </span>
                            <p>
                                Alteraciones de los ritmos anteriores cuando parecen estímulos visuales, sonoros, dolorosos o sensitivos.
                            </p>
                        </div>
                    </div>
                    <img src="images/eeg.png" alt="electroencefalograma">
                </div>
                <article class="box-two">
                    <h3>
                        El electroencefalograma (EEG) es una prueba a la que se recurre cuando se sospechan las siguientes enfermedades:
                    </h3>
                    <ul>
                        <li>
                            <h4>Epilepsia</h4>
                            <p>
                                Esta enfermedad aparece cuando un grupo de neuronas comienzan a generar impulsos nerviosos
                                de forma descontrolada que se propagan por todo el cerebro. Eso da lugar a una crisis epiléptica.
                            </p>
                        </li>
                        <li>
                            <h4>Daño cerebral</h4>
                            <p>
                                El cerebro puede dañarse por muchos motivos. Entre los más recuentes están los ictus (o infartos cerebrales)
                                y los traumatismos craneoencefálicos. En esos casos habría una parte de cerebro sin actividad eléctrica.
                            </p>
                        </li>
                        <li>
                            <h4>Encefalopatías</h4>
                            <p>
                                Las encefalopatías se diferencian de otras enfermedades cerebrales en que en este caso el
                                cerebro es sano, pero hay agentes externos que modifican su actividad.
                                Podemos encontrarnos encefalopatías metabólicas, tóxicas, inflamatorias, etcétera.
                            </p>
                        </li>
                        <li>
                            <h4>Trastornos psiquiátricos</h4>
                            <p>
                                Se utiliza como una prueba complementaria para poder clasificar mejor las alteraciones psiquiátricas de cada paciente.
                                El EEG también se utiliza en investigación para encontrar relación entre la base biológica de cada enfermedad y el cuadro psicológico.
                            </p>
                        </li>
                    </ul>
                </article>
            </section>
        </template>

        <template id="pyv">
            <div>
                <section>
                    <div class="box-one">
                        <div class="content-text">
                            <h1>Polisomnografía</h1>
                            <p>
                                Esta prueba está indicada para diagnosticar posibles trastornos del sueño, como:
                            </p>
                            <ul class="goals">
                                <li>
                                    Apnea obstructiva del sueño
                                </li>
                                <li>
                                    Síndrome de piernas inquietas
                                </li>
                                <li>
                                    Somnolencia excesiva
                                </li>
                                <li>
                                    Narcolepsia
                                </li>
                            </ul>
                            <p>
                                El sistema registra diferentes variables:
                            </p>
                            <ul class="goals">
                                <li>
                                    Presión arterial
                                </li>
                                <li>
                                    Actividad electroencefalográfica
                                </li>
                                <li>
                                    Ocular
                                </li>
                                <li>
                                    Muscular
                                </li>
                                <li>
                                    Respiratoria
                                </li>
                            </ul>
                        </div>
                        <img src="images/polisomnografia.jpg" alt="polisomnografia">
                    </div>
                </section>
                <section>
                    <div class="box-one">
                        <img src="images/videotelemetria.jpg" alt="videotelemetria">
                        <div class="content-text">
                            <h1>Videotelemetría</h1>
                            <p>
                                Es una técnica que permite:
                            </p>
                            <ul class="goals">
                                <li>
                                    Valorar simultáneamente el comportamiento clínico del paciente mediante el registro de vídeo.
                                </li>
                                <li>
                                    Diagnosticar la actividad cerebral mediante la Electroencefalografía durante periodos de tiempo prolongados,
                                    desde horas hasta varios días.
                                </li>
                            </ul>
                            <div class="box-blue-eeg">
                                El registro de video-EEG es fundamental en el diagnóstico de episodios
                                paroxísticos sospechosos de crisis epilépticas.
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </template>

        <template id="emg">
            <section>
                <div class="box-one">
                    <div class="content-text">
                        <h1>Electromiografía (EMG)</h1>
                        <p>
                            Es un estudio que permite el diagnostico de patologías relacionadas con el sistema nervioso periférico,
                            unión neuromuscular y músculo esquelético.
                        </p>
                        <ul class="goals">
                            <li>
                                Su registro se realiza con una aguja que se introduce al músculo,
                                y es así como el equipo la transforma en ondas y sonido, los cuales son interpretados por el médico.
                            </li>
                            <li>
                                La Electromiografía, es un registro de la actividad eléctrica del músculo,
                                tanto en reposo como durante la actividad voluntaria.
                            </li>
                        </ul>
                        <p>
                            Se utiliza para diagnosticar enfermedades como:
                        </p>
                        <ul class="goals">
                            <li>
                                Esclerosis Lateral Amiotrófica
                            </li>
                            <li>
                                Atrofia Muscular Espinal
                            </li>
                            <li>
                                Síndrome post polio
                            </li>
                            <li>
                                Amiotrofia Monomiélica
                            </li>
                            <li>
                                Radiculopatías
                            </li>
                            <li>
                                Miopatías
                            </li>
                        </ul>
                    </div>
                    <img src="images/emg.jpg" alt="Electromiografía">
                </div>
            </section>
        </template>

        <template id="ncd">
            <div>
                <section>
                    <div class="box-one">
                        <div class="content-text">
                            <h1>Neuroconducción (NCD)</h1>
                            <p>
                                El estudio de Neuroconducción nerviosa, permite el diagnostico de las enfermedades del sistema nervioso periférico.
                                Mediante un estímulo eléctrico, se puede obtener información de las características de los nervios sensitivos, motores y mixtos.
                            </p>
                            <p>
                                Nos permite localizar el sitio de la lesión, define cual es la parte del nervio afectada (axonal, desmielinizante o mixta),
                                determina la intensidad de la lesión, identifica si la lesión es focal o generalizada,
                                puede dar información sobre el pronóstico y efectividad de un tratamiento.
                            </p>
                            <div class="pre-description">
                                Se utiliza para el diagnostico de enfermedades como:
                            </div>
                            <ul class="goals">
                                <li>
                                    Neuropatías por atrapamiento (Síndrome del Túnel del Carpo)
                                </li>
                                <li>
                                    Polineuropatías
                                </li>
                                <li>
                                    Síndrome de Guillain Barré
                                </li>
                                <li>
                                    Plexopatías
                                </li>
                                <li>
                                    Mononeuritis múltiple
                                </li>
                                <li>
                                    Lesiones traumáticas de los nervios
                                </li>
                            </ul>
                        </div>
                        <img src="images/ncd.jpg" alt="Neuroconducción">
                    </div>
                </section>
                <section>
                    <div class="box-one">
                        <img src="images/neurona.jpg" alt="videotelemetria">
                        <div class="content-text">
                            <p class="pre-description">
                                El estudio de Neuroconducción nerviosa incluye varias técnicas como son:
                            </p>
                            <ul class="goals ncd-res">
                                <li>
                                    <h4>Respuestas Tardías</h4>
                                    <p>
                                        Onda F y Reflejo H. Es un estudio que permite valorar la función del Sistema Nervioso Central (SNC)
                                        en unión con el Sistema Nervioso Periférico (SNP). La Onda F, es muy sensible en el diagnóstico de la
                                        Polineuropatía Diabética y Síndrome de Guillain Barré. Y el Reflejo H, sirve para el diagnostico de la
                                        radiculopatías lumbosacras.
                                    </p>
                                </li>
                                <li>
                                    <h4>Blink reflex o reflejo de parpadeo</h4>
                                    <p>
                                        Permite evaluar la integridad de la vía aferente (Nervio Trigemino o V par craneano) y la vía eferente
                                        (Nervio Facial o VII par craneano) del reflejo de parpadeo. Es útil en neuropatías trigeminales o faciales,
                                        lesiones del ángulo ponto-cerebeloso, lesiones del tronco cerebral, Síndrome de Guillan Barré, entre otros.
                                    </p>
                                </li>
                                <li>
                                    <h4>Test de estímulo Repetitivo o Lambert</h4>
                                    <p>
                                        Es una prueba que sirve para evaluar la placa Neuromuscular. Y es específica para el estudio de Miastenia Gravis.
                                        Es importante que el paciente suspenda la toma de anticolinesterásicos, 12 horas antes de la toma del estudio.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <article>
                        <div class="content-suggestions">
                            <div class="box-suggestions">
                                <h4>Recomendaciones</h4>
                                <ul>
                                    <li>Este estudio tiene contraindicación solo en pacientes con marcapasos cardiaco transcutáneo (Transitorio)</li>
                                    <li>No tiene contraindicaciones en marcapasos implantados o desfibriladores.</li>
                                    <li>Requiere que el paciente firme un Consentimiento Informado, ya que es indispensable la colaboración del paciente.</li>
                                </ul>
                            </div>
                            <div class="box-suggestions">
                                <h4>Preparación</h4>
                                <ul>
                                    <li>
                                        Es importante para la toma del estudio, que el paciente tenga la piel limpia y no aplicar cremas de hidratación sobre la piel.
                                    </li>
                                    <li>
                                        Tratar de mantener una temperatura corporal entre 34°C y 36°C,
                                        debido a que el resultado del examen puede verse alterado por frialdad en los miembros superiores o inferiores.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </template>

        <template id="pev">
            <div>
                <section>
                    <div class="box-one">
                        <div class="content-text">
                            <h1>Potenciales Evocados Visuales (PEV)</h1>
                            <p>
                                Es un estudio diagnóstico que permite evaluación fisiológica no invasiva del Nervio Óptico.
                                Mediante un estímulo visual que puede ser de tipo flash o por patrón reverso,
                                se obtienen respuestas eléctricas en la corteza cerebral visual.
                            </p>
                            <div class="pre-description">
                                Se utiliza para el diagnóstico de:
                            </div>
                            <ul class="goals">
                                <li>
                                    Neuritis óptica
                                </li>
                                <li>
                                    Esclerosis Múltiple
                                </li>
                                <li>
                                    Neuropatía óptica isquémica
                                </li>
                                <li>
                                    Lesiones compresivas del Nervio óptico
                                </li>
                                <li>
                                    Enfermedades neurodegenerativas
                                </li>
                                <li>
                                    Lesiones quiasmáticas
                                </li>
                                <li>
                                    Lesiones retroquiasmáticas
                                </li>
                            </ul>
                        </div>
                        <img src="images/pev.jpeg" alt="potenciales evoados visuales">
                    </div>
                </section>
                <section>
                    <article>
                        <div class="content-suggestions">
                            <div class="box-suggestions">
                                <h4>Recomendaciones</h4>
                                <ul>
                                    <li>
                                        No tiene ninguna contraindicación, pero es indispensable que los componentes ópticos del ojo
                                        (córnea, iris, pupila y lentes) estén íntegros y normofuncionantes para permitir transmisión
                                        de la información a través de la vía visual.
                                    </li>
                                </ul>
                            </div>
                            <div class="box-suggestions">
                                <h4>Preparación</h4>
                                <ul>
                                    <li>
                                        En niños es importante la deprivación de sueño horas antes del examen según
                                        la edad, ya que este debe estar dormido.
                                    </li>
                                    <li>
                                        El cabello limpio y no podrá húmedo
                                    </li>
                                    <li>
                                        Evitar el uso de maquillaje y cremas de hidratación sobre la piel.
                                    </li>
                                    <li>
                                        En caso de uso de lentes, es importante llevarlos ya que deben usarse durante el examen,
                                        en especial cuando se realiza por técnica de patrón reverso.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </article>
                </section>
            </div>
        </template>

        <template id="pea">
            <div>
                <section>
                    <div class="box-one">
                        <div class="content-text">
                            <h1>Potenciales Evocados Auditivos (PEA)</h1>
                            <p>
                                Es una prueba que se usa para estudiar el funcionamiento del sistema nervioso central,
                                concretamente de la actividad eléctrica de la corteza cerebral.
                                Consiste esencialmente en registrar mediante electrodos especiales,
                                las corrientes eléctricas que se forman en las neuronas y que son la base del correcto funcionamiento cerebral.
                            </p>
                            <p>
                                Es una herramienta fundamental en programas de detección temprana de hipoacusia en niños pretérmino,
                                sirve para diferenciar la hipoacusia conductivas de la neurosensorial,
                                útil en tumores del ángulo pontocerebeloso y conducto auditivo interno, entre otros.
                            </p>
                            <div class="box-suggestions">
                                <h4>Preparación</h4>
                                <ul>
                                    <li>
                                        No tiene ninguna contraindicación, y es importante en niños la deprivación de sueño horas antes del
                                        examen según la edad, ya que este debe estar dormido.
                                    </li>
                                    <li>
                                        El cabello debe estar limpio y no lo podrá tener húmedo.
                                    </li>
                                    <li>
                                        Evitar el uso de maquillaje y cremas de hidratación sobre la piel.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <img src="images/pea.jpg" alt="Neuroconducción">
                    </div>
                </section>

            </div>
        </template>

        <template id="pess">
            <div>
                <section>
                    <div class="box-one">
                        <div class="content-text">
                            <h1>Potenciales Evocados Somatosensoriales (PESS)</h1>
                            <p>
                                Son la manifestación eléctrica de las respuesta cerebral,
                                en el área somatosensorial posterior a la aplicación de estímulos eléctricos,
                                en las fibras aferentes sensitivas de los nervios periféricos.
                                Por lo que, permite identificar alteraciones del nervio periférico,
                                médula (cordones posteriores) y a nivel central en la corteza cerebral.
                            </p>
                            <p>
                                Es útil para el estudio de patologías que involucren la vía aferente sensitiva, como son polineuropatías 
                                (infecciosas, metabólica o inflamatorias), radiculopatías, tumores (médula, tallo y corteza cerebral), 
                                entre otros.
                            </p>
                            <div class="box-suggestions">
                                <h4>Preparación</h4>
                                <ul>
                                    <li>
                                        No tiene ninguna contraindicación, y es importante en niños la deprivación de sueño horas antes 
                                        del examen según la edad, ya que este debe estar dormido.
                                    </li>
                                    <li>
                                        El cabello debe estar limpio y no lo podrá tener húmedo.
                                    </li>
                                    <li>
                                        Evitar el uso de maquillaje y cremas de hidratación sobre la piel.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <img src="images/pess.jpeg" alt="Potenciales Evocados Somatosensoriales">
                    </div>
                </section>

            </div>
        </template>
    </main>
    <?php include_once('partials/footer.php'); ?>
    <script src="servicios.js"></script>
</body>

</html>