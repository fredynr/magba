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
    <title>Nosotros</title>
</head>

<body>
    <?php
    include_once('partials/header.php');
    ?>
    <main>
        <div class="nos-header">
            <h1>Quiénes somos</h1>
            <p>
                Somos una Institución Prestadora de Servicios
                de Salud, especialista en servicios de Neurología
                Clínica y en estudios Neurofisiológicos.
            </p>
        </div>
        <div class="container-mvh">
            <figure>
                <img src="images/docMeet3_v1.png" alt="">
            </figure>
            <section class="mision-vision">
                <article>
                    <h2>Misión</h2>
                    <p>
                        Prestar servicios de atención en Neurología, de
                        una forma integral y eficaz centrado en el paciente
                        y su familia, buscando siempre excelencia y
                        calidad, apoyándose en recursos tecnológicos y
                        de alto nivel científico, con un equipo humano
                        comprometido y creativo.
                    </p>
                </article>
                <article>
                    <h2>Visión</h2>
                    <p>
                        En el año 2025 Magba Neurodigital S.A.S,
                        será reconocida por la comunidad en general y las entidades aseguradoras,
                        como una institución líder a nivel Nacional e Internacional,
                        en la prestación de servicios de Neurología y Fisiatría,
                        por su alta calidad científica, humana y de tecnología.
                        Contando con un grupo de personas comprometidas,
                        idóneas y enfocadas en el crecimiento y bienestar de los usuarios y sus familias.
                    </p>
                </article>
            </section>
            <section class="history">
                <h2><span>Nuestra</span> <span>Historia</span></h2>
                <p>
                    Fue fundada el 28 de Septiembre del año
                    2000, y cuya motivación ha sido contribuir
                    en el mejoramiento de la calidad de vida
                    de los pacientes y su familia, a través
                    del diagnostico acertado, tratamiento
                    y rehabilitación oportuna de las
                    enfermedades neurológicas.
                </p>
            </section>
            <div class="goals-policies">
                <section class="container-goals">
                    <ul class="goals">
                        <h2>Objetivos</h2>
                        <li>
                            Prestar un servicio de alta calidad que asegure la satisfacción del paciente y su familia.
                        </li>
                        <li>
                            Asegurar una alta oportunidad para la asignación de citas y puntualidad en la atención.
                        </li>
                        <li>
                            Mantener tecnología innovadora para los estudios de neurofisiología, electroencefalografía y somnografía, y dar diagnósticos acertados a nuestros pacientes.
                        </li>
                        <li>
                            Promover la investigación para convertirnos en centro de referencia en patologías neurológicas, osteomusculares y degenerativas, a nivel nacional e internacional.
                        </li>
                    </ul>
                    <ul class="values">
                        <li><img src="images/check.svg" alt=""><span>Calidad</span></li>
                        <li><img src="images/group.svg" alt=""><span>Trabajo en equipo</span></li>
                        <li><img src="images/person.svg" alt=""><span>Respeto por el individuo</span></li>
                        <li><img src="images/heart.svg" alt=""><span>Sensibilidad</span></li>
                        <li><img src="images/partner.svg" alt=""><span>Honestidad</span></li>
                    </ul>
                </section>
                <article class="policies">
                    <h2>Políticas de calidad</h2>
                    <p>A través de la mejora continua, ofreciendo un servicio
                        con altos estándares de calidad, con un equipo
                        humano capacitado y guiado por principios de calidez,
                        imparcialidad, integridad y confidencialidad.</p>
                </article>
            </div>
        </div>
    </main>
    <?php include_once('partials/footer.php'); ?>
    <script src="js/app.js"></script>
</body>

</html>