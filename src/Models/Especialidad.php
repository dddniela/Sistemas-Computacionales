<?php
require_once("src/Models/Seccion.php");
require_once "Conexion.php";

class Especialidad
{
    private $especialidadId;
    private $programaId;
    private $nombre;
    private $status;
    private $connection;

    public function setConnection($conn)
    {
        $this->connection = $conn;
    }

    public function getEspecialidades()
    {
        $url =  $GLOBALS['api'] . '/api/especialidad/getEspecialidadesByProgramaId?programaId=' . $GLOBALS['programaId'];

        $headers = ['Content-Type: application/json'];
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    public function getMateriasByEspecialidadId($especialidadId)
    {
        $url =  $GLOBALS['api'] . '/api/materia/getMateriasByEspecialidadId';

        $headers = ['Content-Type: application/json'];
        $data = [
            'programaId' => $GLOBALS['programaId'],
            'especialidadId' => $especialidadId,
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        $result = curl_exec($ch);
        curl_close($ch);

        return json_decode($result, true);
    }

    function icono($Area)
    {
        $ruta_img = "";
        switch ($Area) {
            case 'Distribuidas':
                $ruta_img = 'img/iconos/distribuidas.PNG';
                break;
            case 'Concurrentes':
                $ruta_img = 'img/iconos/concurrentes.PNG';
                break;
            case 'Blockchain':
                $ruta_img = 'img/iconos/blockchain.PNG';
                break;
            default:
                $ruta_img = 'img/iconos/circuloDeLectura.PNG';
                break;
        }
        return $ruta_img;
    }

    function imprimirNombres()
    {
        $especialidades = $this->getEspecialidades();

        $especialidadesNombre = "";
        foreach ($especialidades['data'] as $especialidad) {
            $especialidadesNombre .= "<li>" . $especialidad['nombre'] . "</li>";
        }

        return $especialidadesNombre;
    }

    function imprimirDropdown()
    {
        $especialidades = $this->getEspecialidades();

        $lista = "";
        foreach ($especialidades['data'] as $especialidad) {
            $especialidadId = $especialidad['especialidadId'];
            $nombre = $especialidad['nombre'];

            $lista .= "<li>
                            <a class='dropdown-item' id='tab-especialidad$especialidadId-tab' data-bs-toggle='pill'
                                data-bs-target='#tab-especialidad$especialidadId' type='button' aria-controls='tab-especialidad$especialidadId'
                                aria-selected='false'>$nombre</a>
                        </li>";
        }

        return $lista;
    }


    function imprimirNavPills()
    {
        $especialidades = $this->getEspecialidades();
        $tabla = "";
        $i = 0;

        foreach ($especialidades['data'] as $especialidad) {
            $especialidadId = $especialidad['especialidadId'];
            $nombre = $especialidad['nombre'];
            $selectedBool = $i == 0 ?  'true' :  'false';
            $activeBool = $i == 0 ?  'active' :  '';

            $tabla .= "
                <li class='especial nav-item' role='presentation'>
                    <button class='especial nav-link $activeBool id='tab-especialidad$especialidadId-tab' data-bs-toggle='pill' data-bs-target='#tab-especialidad$especialidadId'
                    type='button' role='tab' aria-controls='tab-especialidad$especialidadId' aria-selected='$selectedBool'>$nombre</button>
                </li>";
            $i++;
        }
        return $tabla;
    }

    function imprimirPills()
    {
        $especialidades = $this->getEspecialidades();
        $tabla = "";
        $i = 0;

        foreach ($especialidades['data'] as $especialidad) {
            $especialidadId = $especialidad['especialidadId'];
            $nombre = $especialidad['nombre'];
            $activeBool = $i == 0 ?  'show active' :  '';

            $tabla .= "
                <div class='tab-pane fade show $activeBool' id='tab-especialidad$especialidadId' role='tabpanel' aria-labelledby='tab-especialidad$especialidadId-tab'>
                    <h2 class='titleDarkSection text-center font-bold my-4 d-flex d-sm-none'>$nombre</h2>
                <div class='container'>";

            $tabla .= $this->imprimirEspecialidad($especialidadId);

            $tabla .= "</div>
                </div>";
            $i++;
        }

        return $tabla;
    }

    function imprimirEspecialidad($especialidadId)
    {
        $especialidades = $this->getMateriasByEspecialidadId($especialidadId);
        $seccion = new Seccion();

        $tabla = "<div class='row justify-content-md-start h-100 justify-content-center'>";

        foreach ($especialidades['data'] as $especialidad) {
            $materiaId = $especialidad['materiaId'];
            $nombre = $especialidad['nombre'];
            $competencia = $especialidad['competencia'];
            $area = $especialidad['area'];
            $ruta_img = $this->icono($area);
            $urlVideo = $especialidad['urlVideo'];
            $urlPrograma = $especialidad['urlPrograma'];

            // Cuadro de materia
            $tabla .= "<div class='col-lg-4 col-md-6 col-sm-9 col-9 p-4 h-100 justify-content-center rounded-3'>
                    <div class='row azul-medio' style='height: 88px;'>
                        <div class='d-flex justify-content-center h-100'>
                            <h5 class='text-white align-self-center rounded-top text-center font-semibold py-3'>$nombre</h5>
                        </div>
                    </div>
                    <div class='row bg-light overflow-hidden d-none d-sm-flex' style='height: 110px;'>
                        <div class='col-md-3 col-12 justify-content-center align-items-start'>
                            <div class='d-flex flex-row justify-content-center align-items-start h-100'>
                                <img class='h-16 p-1 mt-4 ms-4' src='$ruta_img' alt=''>
                            </div>
                        </div>
                        <div class='col-md-9 col-12 justify-content-center align-items-center'>
                            <div class='d-flex flex-row justify-content-center align-items-center h-100 text-wrap'>
                                <p class='text-sm mx-4 my-2' style='text-align: justify;'>$competencia</p>
                            </div>
                        </div>
                    </div>  
                    <div class='row bg-light'>
                        <div class='col-12 my-2 justify-content-center'>
                            <div class='d-flex p-2 justify-content-center align-items-center'>
                            <button type='button' class='btn btn-warning font-bold' data-bs-toggle='modal'
                                data-bs-target='#modalReticula' 
                                        data-materia ='$nombre' 
                                        data-videoMateria ='$urlVideo' 
                                        data-descMateria ='$competencia'
                                        data-urlMateria ='$urlPrograma'
                                        data-id='$materiaId'
                                        onclick='youtubePlay(this)'>
                                        Ver más </button>
                                </div>
                            </div>
                        </div>
                    </div>";
        }

        $botonReticula = $seccion->getReticula($especialidadId);
        $botonReticula = $botonReticula['data'];
        if ($botonReticula) {
            $titulo = $botonReticula['titulo'];
            $url = $botonReticula['url'];

            $tabla .=  "<div class='justify-content-center text-center'>
                            <p>
                                <a class='btn-warning w-auto btn font-bold' target='_blank'
                                href='$url'>$titulo</a>
                            </p>
                        </div>";
        }


        $tabla .= "</div>";

        return $tabla;
    }
}
