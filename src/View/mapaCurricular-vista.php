<div class="row g-0">
    <div class="position-relative w-100 overflow-hidden">
        <img class="w-100 img-fluid" src="img/IMG_3884.webp" alt="">
        <div class="position-absolute top-50 start-50 translate-middle w-100">
            <div class="d-flex flex-column justify-content-center align-items-center text-center">
                <h1 class="fw-bold text-warning">Mapa Curricular</h1>
                <h1 class="fw-bold text-light">Ingeniería en Sistemas Computacionales</h1>
            </div>
        </div>
    </div>
</div>

<!-- reticula de materias -->
<div class="w-full">
    <h2 class="text-center text-warning font-bold azul-cielo text-2xl py-2">Retícula de Materias</h2>

    <ul class="nav nav-pills justify-content-center mb-3 d-flex d-sm-none" id="pills-tab" role="tablist">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                aria-expanded="false">Selecciona el semestre</a>
            <ul class="dropdown-menu">
                <li>
                    <a class="dropdown-item" id="tab-semestre1-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre1" type="button" aria-controls="tab-semestre1"
                        aria-selected="false">1er Semestre</a>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre2-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre2" type="button" aria-controls="tab-semestre2"
                        aria-selected="false">2do Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre3-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre3" type="button" aria-controls="tab-semestre3"
                        aria-selected="false">3er Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre4-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre4" type="button" aria-controls="tab-semestre4"
                        aria-selected="false">4to Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre5-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre5" type="button" aria-controls="tab-semestre5"
                        aria-selected="false">5to Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre6-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre6" type="button" aria-controls="tab-semestre6"
                        aria-selected="false">6to Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre7-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre7" type="button" aria-controls="tab-semestre7"
                        aria-selected="false">7mo Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre8-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre8" type="button" aria-controls="tab-semestre8"
                        aria-selected="false">8vo Semestre</button>
                </li>
                <li>
                    <button class="dropdown-item" id="tab-semestre9-tab" data-bs-toggle="pill"
                        data-bs-target="#tab-semestre9" type="button" aria-controls="tab-semestre9"
                        aria-selected="false">9no Semestre</button>
                </li>
            </ul>
        </li>
    </ul>

    <ul class="nav nav-pills justify-content-center mb-3 d-none d-sm-flex" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="tab-semestre1-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre1"
                type="button" role="tab" aria-controls="tab-semestre1" aria-selected="true">1er Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre2-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre2"
                type="button" role="tab" aria-controls="tab-semestre2" aria-selected="false">2do Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre3-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre3"
                type="button" role="tab" aria-controls="tab-semestre3" aria-selected="false">3er Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre4-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre4"
                type="button" role="tab" aria-controls="tab-semestre4" aria-selected="false">4to Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre5-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre5"
                type="button" role="tab" aria-controls="tab-semestre5" aria-selected="false">5to Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre6-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre6"
                type="button" role="tab" aria-controls="tab-semestre6" aria-selected="false">6to Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre7-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre7"
                type="button" role="tab" aria-controls="tab-semestre7" aria-selected="false">7mo Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre8-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre8"
                type="button" role="tab" aria-controls="tab-semestre8" aria-selected="false">8vo Semestre</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="tab-semestre9-tab" data-bs-toggle="pill" data-bs-target="#tab-semestre9"
                type="button" role="tab" aria-controls="tab-semestre9" aria-selected="false">9no Semestre</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="tab-semestre1" role="tabpanel" aria-labelledby="tab-semestre1-tab">
            <div class="container">
                <?php
                 
                        echo $materia->imprimir1erSemestre();
                  
                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre2" role="tabpanel" aria-labelledby="tab-semestre2-tab">
            <div class="container">
                <?php
                   
                        echo $materia->imprimir2doSemestre();
                    
                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre3" role="tabpanel" aria-labelledby="tab-semestre3-tab">
            <div class="container">
                <?php

                        echo $materia->imprimir3erSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre4" role="tabpanel" aria-labelledby="tab-semestre4-tab">
            <div class="container">
                <?php

                        echo $materia->imprimir4toSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre5" role="tabpanel" aria-labelledby="tab-semestre5-tab">
            <div class="container">
                <?php

                        echo $materia->imprimir5toSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre6" role="tabpanel" aria-labelledby="tab-semestre6-tab">
            <div class="container">
                <?php

                        echo $materia->imprimir6toSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre7" role="tabpanel" aria-labelledby="tab-semestre7-tab">
            <div class="container">
                <?php

                        echo $materia->imprimir7moSemestre();

                ?>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-semestre8" role="tabpanel" aria-labelledby="tab-semestre8-tab">
            <div class="container">
                <?php

                        echo $materia->imprimir8voSemestre();

                ?>
            </div>

        </div>
        <div class="tab-pane fade" id="tab-semestre9" role="tabpanel" aria-labelledby="tab-semestre9-tab">
            <div class="container">
                <?php

                        echo $materia->imprimir9noSemestre();

                ?>
            </div>
        </div>
    </div>

    <div class='modal fade' id='modalReticula' tabindex='-1' aria-labelledby='modalReticula' aria-hidden='true'>
        <div class='modal-dialog modal-lg'>
            <div class='modal-content'>
                <div class='modal-header azul-medio'>
                    <h5 class='modal-title text-white font-semibold' id='modalTitulo'></h5>
                    <button type='button' class='btn-close text-white' data-bs-dismiss='modal'
                        aria-label='Close'></button>
                </div>
                <div class='modal-body'>
                    <div class='d-flex justify-content-center mb-4' style='text-align: justify;'>
                        <p id="descReticula"></p>
                    </div>
                    <div class='d-flex justify-content-center my-2'>
                        <iframe class='aspect-video video-reticula' id='videoReticula' src=''
                            title='YouTube video player' frameborder='0'
                            allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture'
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class='d-flex p-2 justify-content-center align-items-center'>
                        <a target='_blank' href='' id="urlReticula"><button type='button' class='btn btn-warning''>Descargar programa</button></a>
                </div>
            </div>
        </div>
    </div>
</div>


    <div class="justify-content-center text-center">
        <p><a class="btn btn-warning w-auto btn font-bold" target="_blank" href="https://bit.ly/3XZfkOu">Descargar Retícula</a></p>
    </div>

</div>

<!-- especialidad -->
<div class="bg-dark">
    <div class="row g-0 py-5 align-items-center">
        <div class="col-lg-6 col-12 justify-content-center text-center">
            <div class="row g-0 d-flex justify-content-center text-center w-100 h-100">
                <img src="img/Servicio social-3.webp" class="w-100 h-auto py-3" alt="">
            </div>
        </div>
        <div class="col-lg-6 col-12 px-4 text-black">
            <h2 class="font-bold text-2xl text-center text-warning ">Especialidad</h2>
            <p class="text-xl text-white" style="text-align: justify">La Especialidad es el espacio dentro de un
                plan de estudios, constituido por un conjunto de
                asignaturas diseñadas para la formación y desarrollo de competencias, que complementan la formación
                profesional de los estudiantes de las instituciones adscritas al TecNM
            </p>
            <h2 class="text-center text-warning font-bold text-xl">Especialidades que han existido en la carrera
            </h2>
            <div class="gris-zinc py-2">
                <ul class="text-xl m-3">
                     <li>Concurrencia computacional avanzada</li>
                    <li>Procesamiento distribuido de alto desempeño</li>
                </ul>
            </div>
        </div>
    </div>
    <h2 class="font-bold text-center text-warning">Concurrencia Computacional Avanzada</h2>
    <div class="bg-zinc-300" id="tab-especialidad">
        <div class="container">
            <?php
                   
                    echo $materia->imprimirEspecialidad();
                    
            ?>
        </div>
    </div>
</div>

<!-- desarrollo profesional  -->
<div class="azul-cielo pt-5">
    <div class="bg-light">
        <div class="row g-0 py-5 align-items-center">
            <div class="col-lg-6 col-12 justify-content-center text-center">
                <div class="d-flex justify-content-center align-items-center w-100 h-100">
                    <img src="img/ITVER-8.webp" class="w-75 h-auto py-3" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-12 px-4 text-black">
                <h2 class="font-bold text-2xl text-center">Desarrollo profesional de la carrera</h2>
                <p class="text-xl" style="text-align: justify">La carrera de ingeniería en sistemas computacionales ofrece
                    un
                    desarrollo
                    integral y profesional para el estudiante con un plan de estudios orientado a que el estudiante sea
                    capaz de egresar con una experiencia en el ámbito laboral.
                </p>
                <h2 class="text-center font-bold text-xl">"No solo se trata de aprender, sino de crecer profesionalmente"
                </h2>
                <div class="gris-zinc py-2">
                    <ul class="text-xl m-3">
                        <li>Retícula de asignaturas orientada a los tópicos de la carrera</li>
                        <li>Actividades complementarias</li>
                        <li>Especialidad</li>
                        <li>Servicio Social</li>
                        <li>Residencia profesional</li>
                        <li>Tutorías</li>
                        <li>Cursos de Verano</li>
                        <li>Titulación profesional</li>
                        <li>Liberación de segunda lengua</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>    


<!-- Créditos complementarios -->
<div class="azul-cielo pt-5">
    <div class="gris-zinc">
        <div class="row g-0 py-5 align-items-center">
            <div class="col-lg-6 col-12 px-4 text-black">
                <h2 class="font-bold text-2xl text-center">Créditos complementarios</h2>
                <p class="text-xl" style="text-align: justify">
                    Son todas aquellas actividades que realiza el estudiante en beneficio de su formación integral con
                    el
                    objetivo de complementar su formación y desarrollo de competencia profesionales
                </p>
                <p class="text-xl" style="text-align: justify">
                    Las actividades complementarias pueden ser: tutorías, actividades extraescolares, proyectos de
                    investigación o integradores, participación en eventos académicos, productividad laboral,
                    emprendedurismo,
                    fomento a la cultura, construcción de prototipos y desarrollo tecnológico, conservación al medio
                    ambiente, fomento a la cultura, entre otras.
                </p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row g-0 d-flex justify-content-center text-center w-100 h-100">
                    <img src="img/IMG_3394.webp" class="w-75 h-auto py-3" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Servicio social -->
<div class="azul-cielo pt-5">
    <div class="bg-light">
        <div class="row g-0 py-5 align-items-center">
            <div class="col-lg-6 col-12 justify-content-center text-center">
                <div class="row g-0 d-flex justify-content-center text-center w-100 h-100">
                    <img src="img/gestionVinculacion.webp" class="w-75 h-auto py-3" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-12 px-4 text-black">
                <h2 class="font-bold text-2xl text-center">Servicio Social</h2>
                <p class="text-xl" style="text-align: justify">Se entiende por servicio social al trabajo de
                    carácter temporal y obligatorio, que institucionalmente
                    prestan y ejecutan los estudiantes en beneficio de la sociedad. Los estudiantes de las instituciones
                    adscritas al TecNM prestan el servicio social para cumplir con los créditos de sus planes de estudio
                </p>
                <h2 class="text-center font-bold text-xl">Requisitos
                </h2>
                <div class="gris-zinc py-2">
                    <ul class="text-xl m-3">
                        <li>Tener acreditadas las actividades complementarias</li>
                        <li>Tener aprobado al menos el 70% de créditos de su plan de estudios</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Sección: Residencias Profesionales. Información relevante acerca de las residencias profesionales. -->
<div class="azul-cielo pt-5">
    <div class="bg-dark">
        <img src="img/IMG_0337.webp" class="w-full" alt="">
        <div class="px-4 text-black my-3">
            <h2 class="font-bold text-2xl text-center text-warning">Residencias Profesionales</h2>
            <p class="text-xl text-white" style="text-align: justify">Las residencias profesionales permiten al
                estudiante
                emprender un proyecto teórico-práctico, analítico, reflexivo, crítico y profesional, con el propósito de
                resolver un problema específico de la realidad social y productiva, para fortalecer y aplicar sus
                competencias obtenidas a lo largo de cada una de sus asignaturas cursadas. La cual se puede realizar de
                manera individual, grupal o interdisciplinaria; dependiendo de los requerimientos, condiciones y
                características del proyecto de la empresa, organismo o dependencia.
            </p>
        </div>
        <div class="bg-light row rows-cols-3 g-0 py-2">
            <h2 class="text-center text-warning font-bold text-xl">Beneficios</h2>
            <div class="col-sm text-center">
                <img class="h-20 items-center my-4" src="img/icon1.PNG" alt="">
                <p>Participar o emprender proyectos en el ámbito profesional</p>
            </div>
            <div class="col-sm text-center">
                <img class="h-20 items-center my-4" src="img/icon2.PNG" alt="">
                <p>Adquirir experiencia profesional</p>
            </div>
            <div class="col-sm text-center">
                <img class="h-20 items-center my-4" src="img/icon3.PNG" alt="">
                <p>Poner en prácticas los conocimientos adquiridos en el aula</p>
            </div>
        </div>
        <div class="bg-light">
            <div class="row g-0 py-5 align-items-center">
                <div class="col-lg-6 col-12 px-4 text-black">
                    <h2 class="font-bold text-2xl text-center">Requisitos</h2>
                    <p class="text-xl" style="text-align: justify">
                        El valor curricular para la Residencia Profesional es de 10 créditos, y su duración queda
                        determinada por un periodo de 4 meses como tiempo mínimo y 6 meses como tiempo máximo, debiendo
                        acumularse 500 horas
                    </p>
                    <div class="gris-zinc py-2">
                        <ul class="text-xl m-3">
                            <li>Tener acreditadas las actividades complementarias</li>
                            <li>Tener acreditado el servicio social</li>
                            <li>Tener aprobado al menos el 80% de créditos de su plan de estudios</li>
                            <li>No contar con ninguna asignatura en condición de "curso especial"</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-12 justify-content-center text-center">
                    <div class="row d-flex justify-content-center text-center w-100 h-100">
                        <img src="img/gestionVinculacion.webp" class="w-75 h-auto py-3" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>

<!-- Tutorías --> 
<div class="azul-cielo pt-5">
    <div class="gris-zinc">
        <div class="row g-0 py-5 align-items-center">
            <div class="col-lg-6 col-12 justify-content-center text-center">
                <div class="row g-0 d-flex justify-content-center text-center w-100 h-100">
                    <img src="img/IMG_1245.webp" class="w-75 h-auto py-3" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-12 px-4 text-black">
                <h2 class="font-bold text-2xl text-center text-black ">Tutorías</h2>
                <p class="text-xl text-black" style="text-align: justify">La tutoría es un proceso de acompañamiento grupal o individual que un tutor brinda al estudiante durante su estancia en el Instituto, con el propósito de contribuir a su formación integral e incidir en las metas institucionales relacionadas con la calidad educativa; elevar los índices de eficiencia terminal, reducir los índices de reprobación y deserción. La tutoría contempla tres ejes fundamentales: desarrollo académico, desarrollo personal y desarrollo profesional que se ofrece en cada Instituto.             
                </p>
            </div>
        </div>
    </div>   
</div>

<!-- Cursos de verano -->
<div class="azul-cielo pt-5">
    <div class="bg-dark text-white">
        <div class="row g-0 py-5 align-items-center">
            <div class="col-lg-6 col-12 px-4">
                <div class="col-12">
                    <h2 class="font-bold text-2xl text-center text-warning">Cursos de Verano</h2>
                  </div>
                <p class="text-xl" style="text-align: justify">
                    El curso de verano es una alternativa que permite al estudiante avanzar o
                    regularizarse en su proceso educativo, este se ofrece de manera presencial, durante
                    seis semanas (dos semanas previas al inicio del periodo vacacional de verano y las 4
                    semanas correspondientes a dicho periodo) de acuerdo con el calendario oficial
                    vigente de la Secretaría de Educación Pública (SEP), ofreciendo las asignaturas de
                    los planes de estudio vigentes.
                </p>
                <p class="pt-5 text-xl" style="text-align: justify;">
                    El alumno puede reinscribirse hasta en dos asignaturas como máximo o podrá cursar una sola asignatura, 
                    cuando ésta sea de opción de curso especial. <br>
                </p>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row g-0 d-flex justify-content-center text-center w-100 h-100">
                    <img src="img/IMG_3886.webp" class="w-75 h-auto py-3" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Titulación --> 
<div class="azul-cielo pt-5">
    <div class="bg-dark">
        <img src="img/ITVER-7.webp" class="w-full" alt="">
        <div class="px-4 text-black my-3">
            <h2 class="font-bold text-2xl text-center text-warning">Titulación</h2>
            <p class="text-xl text-white" style="text-align: justify">La titulación integral es la validación de las competencias (conocimientos, habilidades y actitudes)
                que el estudiante adquirió y desarrolló durante su formación profesional. A través de los siguientes tipos de proyectos de titulación integral:
            </p>
        </div>
        <div class="bg-light row rows-cols-3 g-0 py-2">
            <!-- <h2 class="text-center text-warning font-bold text-xl">Beneficios</h2> -->
            <div class="col-sm text-center">
                <img class="h-20 items-center my-4" src="img/icon1.PNG" alt="">
                <p class="px-5">Residencia Profesional, Proyecto de Investigación y/o Desarrollo
                    Tecnológico, Proyecto Integrador, Proyecto Productivo.</p>
            </div>
            <div class="col-sm text-center">
                <img class="h-20 items-center my-4" src="img/icon2.PNG" alt="">
                <p>Proyecto de Innovación Tecnológica, proyecto de Emprendedurismo, Proyecto Integral
                    de Educación Dual, Estancia, Tesis o Tesina</p>
            </div>
            <div class="col-sm text-center">
                <img class="h-20 items-center my-4" src="img/icon3.PNG" alt="">
                 <p class="px-5">O por la obtención de un Testimonio de Desempeño Satisfactorio o
                    Sobresaliente en el Examen General de Egreso de Licenciatura (EGEL) del
                    Centro Nacional de Evaluación para la Educación Superior, A. C. (CENEVAL).</p>
            </div>
        </div>
        <div class="bg-light">
            <div class="row g-0 py-5 align-items-center">
                <div class="col-lg-6 col-12 justify-content-center text-center">
                    <div class="row d-flex justify-content-center text-center w-100 h-100">
                        <img src="img/titulacion.webp" class="h-auto py-3" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-12 px-4 text-black">
                    <h2 class="font-bold text-2xl text-center">Requisitos</h2>
                    <p class="text-xl" style="text-align: justify">
                        El egresado debe cumplir con:
                    </p>
                    <div class="azul-cielo py-2 justify-content-center text-white">
                        <ul class="text-xl m-3">
                            <li>La acreditación del 100% de los créditos de su plan de estudios.</li>
                            <li>La acreditación de un programa de lengua extranjera presentando un certificado o constancia.*</li>
                            <li>Constancia de no inconveniencia para la realización del acto protocolario
                                de titulación integral emitida por el Departamento de Servicios Escolares o
                                su equivalente en los Institutos Tecnológicos Descentralizados.</li>
                            <li>Documento probatorio de no adeudo económico, material o equipo con
                                las oficinas, laboratorios y centro de información en la institución de la cual
                                egresó.</li>
                            <li>Liberación del proyecto de titulación integral emitida por el (la) Jefe(a) de
                                Departamento Académico.</li>
                            <li>Presentar acto protocolario del proyecto de titulación integral.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
<!-- Liberación de Idiomas -->
<div class="azul-cielo pt-5">
    <div class="bg-light">
        <div class="row g-0 py-5 align-items-center">
            <div class="col-lg-6 col-12 px-4">
                <h2 class="font-bold text-2xl text-center">Liberación de segunda lengua</h2>
                <p class="text-xl" style="text-align: justify">
                    Para poder hacer la liberación del idioma extranjero, debes de cumplir con una certificación externa que se encuentre avalada por la certificación nacional de nivel de idioma (CENNI) que evalúe 4 habilidades y se obtenga un nivel mínimo B1 o cursar los cinco niveles de inglés o algún otro idioma en el Centro de Idiomas en el ITVER.
                </p>
                <div class="p-3 text-xl gris-zinc">
                    <p class="font-bold ">Contacto del Centro de Idiomas:<br></p>
                    <p class="" style="text-align: justify">
                        Correo electrónico: coo_cle@vercaruz.tecnm.mx <br>
                        FB: <a class="text-decoration-none" href="https://www.facebook.com/LenguaExtranjeraItver"
                            target="_blank"> Centro de Idiomas Itver</a><br>
                    </p>
                </div>
            </div>
            <div class="col-lg-6 col-12">
                <div class="row g-0 d-flex justify-content-center text-center w-100 h-100">
                    <img src="img/centroIdiomas.webp" class="w-75 h-auto py-3" alt="">
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
    const modalReticula = document.getElementById('modalReticula'); modalReticula.addEventListener('show.bs.modal',
        event => {
            // Button that triggered the modal
            const button = event.relatedTarget;

            // se obtienen los atributos que se encuentran en el botón de 'Ver más'
            const id = button.getAttribute('data-id');
            const materia = button.getAttribute('data-materia');
            const videoReticula = button.getAttribute('data-videoMateria');
            const descripcion = button.getAttribute('data-descMateria');
            const url = button.getAttribute('data-urlMateria');

            // se obtienen los elementos por su ID y se cambian los valores.
            document.getElementById("modalTitulo").innerHTML = `${materia}`;
            document.getElementById("descReticula").innerHTML = `${descripcion}`;
            $("#videoReticula iframe").attr('src', videoReticula);
            $("#urlReticula").attr('href', url);

        });

    $("#modalReticula").on('hidden.bs.modal', function (e) {
        $("#modalReticula iframe").attr("src", '');
    });

    function youtubePlay(btn) {
        var id = $(btn).data("id");
        var videoReticula = $(btn).data("videomateria");
        var theModal = $(btn).data("bs-target"),
            videoSRCauto = videoReticula + "?autoplay=1";

        $(theModal + ' iframe').attr('src', videoSRCauto);
        $(theModal + ' button.btn-close').click(function () {
            $(theModal + ' iframe').attr('src', videoReticula);
        });
    }
</script>