<?php

require_once "bd/conexion.php";

function icono($Area){
    $ruta_img = "";
    switch($Area){
        case 'Programacion':
            $ruta_img = 'img/iconos/programacion.png';
            break;
        case 'Asignaturas Comunes':
            $ruta_img = 'img/iconos/asignaturas-comunes.png';
            break;
        case 'Redes':
            $ruta_img = 'img/iconos/redes.png';
            break;
        case 'Bases de datos':
            $ruta_img = 'img/iconos/bases-datos.png';
            break;
        case 'Electronica':
            $ruta_img = 'img/iconos/electronica.png';
            break;
        case 'Ingenieria':
            $ruta_img = 'img/iconos/ingenieria.png';
            break;
        case 'Sistemas operativos':
            $ruta_img = 'img/iconos/sistemasop.png';
        break;
        case 'Calculo':
            $ruta_img = 'img/iconos/calculo.png';
        break;
        case 'Estadistica':
            $ruta_img = 'img/iconos/estadistica.png';
        break;
        case 'Automatas':
            $ruta_img = 'img/iconos/automatas.png';
        break;
        case 'Investigacion':
            $ruta_img = 'img/iconos/investigacion.png';
        break;
        case 'Matematicas Aplicada':
            $ruta_img = 'img/iconos/algebra.png';
        break;
        case 'Web':
            $ruta_img = 'img/iconos/programacion-web.png';
        break;
        case 'Administracion':
            $ruta_img = 'img/iconos/administracion.png';
        break;
        case 'IA':
            $ruta_img = 'img/iconos/inteligencia-artificial.png';
        break;
    }
    return $ruta_img;
}

function imprimir($NumeroSemestre){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where semestre_materia='$NumeroSemestre'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='row gx-5 row-cols-1 row-cols-lg-3 mx-5'>";
        while($row = $ResultSet->fetch_assoc()){
            $id_materia = $row['id_materia'];
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];
            $area_materia = $row['area_materia'];
            $url_materia = $row['url_materia'];
            $url_programa = $row['url_programa'];
            $ruta_img = icono($area_materia);

    // Cuadro de materia
            $tabla .= "<div class='col my-3 p-3 justify-content-center'>";
                $tabla .= "<h5 class='text-white align-self-start rounded-top text-center font-semibold py-3 azul-medio'>$nombre_materia</h5>";
                $tabla .= "<div class='d-flex align-items-center bg-light'>";
                    $tabla .= "<img class='h-16 mx-2' src='$ruta_img' alt=''>";
                    $tabla .= "<p class='text-sm mx-4 my-2'>$descrip_materia</p>";
                $tabla .= "</div>";
                $tabla .= "<div class='d-flex p-2 justify-content-center align-items-center bg-light'>";
                    $tabla .="<button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#modalReticula" .$id_materia ."'>
                                Ver más </button>";
                 $tabla .= "</div>";
            $tabla .= "</div>";
    
    //modal de la materia
          $tabla .="  <div class='modal fade' id='modalReticula" .$id_materia ."' tabindex='-1' aria-labelledby='modal" .$id_materia ."' aria-hidden='true'>
              <div class='modal-dialog modal-lg'>
                <div class='modal-content'>
                  <div class='modal-header azul-medio'>
                    <h5 class='modal-title text-white font-semibold' id='modal" .$id_materia ."'>" .$nombre_materia ."</h5>
                    <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                  </div>
                  <div class='modal-body'>"
                    .$descrip_materia
                  ."</div>
                </div>
              </div>
            </div>";
        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

function imprimir1erSemestre(){
    return imprimir("1");
}

function imprimir2doSemestre(){
    return imprimir("2");
}

function imprimir3erSemestre(){
    return imprimir("3");
}

function imprimir4toSemestre(){
    return imprimir("4");
}

function imprimir5toSemestre(){
    return imprimir("5");
}

function imprimir6toSemestre(){
    return imprimir("6");
}

function imprimir7moSemestre(){
    return imprimir("7");
}

function imprimir8voSemestre(){
    return imprimir("8");
}

function imprimir9noSemestre(){
    return imprimir("9");
}

function imprimirEspecialidad(){
    $cn = conexion();
    $sqlQ = "SELECT * FROM materia where area_materia='Especialidad'";
    $ResultSet = $cn->query($sqlQ); 
   
    $tabla = "";

    if($ResultSet->num_rows > 0){
        $tabla .= "<div class='row gx-5 row-cols-1 row-cols-lg-3 mx-5'>";
        while($row = $ResultSet->fetch_assoc()){
            $id_materia = $row['id_materia'];
            $nombre_materia = $row['nombre_materia'];
            $descrip_materia = $row['descripcion_materia'];
            $area_materia = $row['area_materia'];
            $ruta_img = icono($area_materia);

            $tabla .= "<div class='col my-3 p-3 justify-content-center'>";
                $tabla .= "<h5 class='text-white align-self-start rounded-top text-center font-semibold py-3 azul-medio'>$nombre_materia</h5>";
                $tabla .= "<div class='d-flex align-items-center bg-light'>";
                    $tabla .= "<img class='h-16 mx-2' src='$ruta_img' alt=''>";
                    $tabla .= "<p class='text-sm mx-4 my-2'>$descrip_materia</p>";
                $tabla .= "</div>";
                $tabla .= "<div class='d-flex p-2 justify-content-center align-items-center bg-light'>";
                    $tabla .="<button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#modalReticula" .$id_materia ."'>
                                Ver más </button>";
                 $tabla .= "</div>";
            $tabla .= "</div>";

            #modal de la materia
            $tabla .="  <div class='modal fade' id='modalReticula" .$id_materia ."' tabindex='-1' aria-labelledby='modal" .$id_materia ."' aria-hidden='true'>
            <div class='modal-dialog modal-lg'>
              <div class='modal-content'>
                <div class='modal-header azul-medio'>
                  <h5 class='modal-title text-white font-semibold' id='modal" .$id_materia ."'>" .$nombre_materia ."</h5>
                  <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                </div>
                <div class='modal-body'>"
                  .$descrip_materia
                ."</div>
              </div>
            </div>
          </div>";
        }
        $tabla .= "</div>";
    }

    return $tabla;
    
    $cn->close();
}

?>