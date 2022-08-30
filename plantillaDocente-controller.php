<?php
    require_once "bd/conexion.php";

    function obtenerInformacion($LimiteInferior, $LimiteSuperior){
        $cn = conexion();
        $sqlSelect = "SELECT * FROM maestro WHERE id_maestro>='$LimiteInferior' AND id_maestro<='$LimiteSuperior'";
        $ResultSet = $cn->query($sqlSelect);
        return $ResultSet;
    }

    function imprimirDatos($LimInferior, $LimSuperior){
        $ResultSet = obtenerInformacion($LimInferior,$LimSuperior);
        $Codigo = "";
        $cont = 1;
        if($ResultSet->num_rows > 0){
            while($row = $ResultSet->fetch_assoc()){
                $id_maestro = $row['id_maestro'];
                $nombre_maestro = $row['nombre_maestro'];
                $palabras_maestro = $row['palabras_maestro'];
                $informacion_maestro = $row['informacion_maestro'];
                $materias_maestro = $row['materias_maestro'];
                $contacto_maestro = $row['contacto_maestro'];
                $url_imagen = $row['url_imagen'];
                $Codigo .=  "<div class='col-lg-4 col-md-6 col-sm-9 col-8 my-2'>
                                <div class='d-flex flex-column gris-zinc rounded-3'>
                                    <div class='d-flex flex-row justify-content-center my-2'>
                                        <img class='rounded-circle p-1 bg-primary' src='img/Docentes/".$url_imagen ."' alt='' style='width: 10rem; height: 10rem;'>
                                    </div>
                                    <div class='d-flex flex-row justify-content-center mx-2'>
                                        <h5 class='fs-5 fw-bolt'>" .$nombre_maestro."</h5>
                                    </div>
                                    <div class='d-flex flex-row justify-content-center my-2'>
                                        <button type='button' class='btn amarillo fw-bolt' data-bs-toggle='modal' data-bs-target='#ModalDocente".$id_maestro."'>Ver mas</button>
                                    </div>
                                </div>
                            </div>";
                
                $Codigo .=   "<div class='modal fade' id='ModalDocente".$id_maestro."' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
                                <div class='modal-dialog modal-lg'>
                                    <div class='modal-content'>
                                        <div class='modal-header azul-medio'>
                                            <h5 class='modal-title text-white font-semibold'>Información docente</h5>
                                            <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <div class='modal-body'>
                                            <div class='col'>
                                            <div class='row justify-content-center m-2'>
                                                <div class='col-7 col-lg-auto justify-content-center m-2'>
                                                    <div class='d-flex justify-content-center'>
                                                        <img class='rounded-circle p-1 bg-primary' src='img/Docentes/".$url_imagen."' alt='' style='width: 15rem; height: 15rem;'>
                                                    </div>
                                                </div>
                                                <div class='col-12 col-lg-7 justify-content-center align-items-center m-2'>
                                                    <div class='d-flex align-items-center h-100'>
                                                        <div class='col'>
                                                            <div class='row'>
                                                                <h1 class='amarillo text-center py-2 fs-4'>$nombre_maestro</h1> 
                                                            </div>      
                                                            <div class='row'>
                                                                <p class='text-dark' style='text-align: justify;'>$palabras_maestro</p>
                                                            </div>     
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                            <div class='d-flex flex-row justify-content-start m-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    <strong>Informacion academica:</strong> <br>
                                                    $informacion_maestro
                                                </div> 
                                            </div>
                                            <div class='d-flex flex-row justify-content-start mx-2' style='text-align: justify;'>
                                                <strong>Materias que ha impartido:</strong>
                                            </div>
                                            <div class='d-flex flex-row justify-content-start mx-2 mb-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    $materias_maestro
                                                </div>   
                                            </div>
                                            <div class='d-flex flex-row justify-content-start mx-2' style='text-align: justify;'>
                                                <strong>Información de contacto:</strong> 
                                            </div>
                                            <div class='d-flex flex-row justify-content-start mx-2 mb-2' style='text-align: justify;'>
                                                <div class='col-12'>
                                                    $contacto_maestro
                                                </div>   
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
            }
        }
        return $Codigo;
    }

    function generarPaginacion(){
        $cn = conexion();
        $sqlSelect = "SELECT * FROM maestro";
        $ResultSet = $cn->query($sqlSelect);
        $NumRows = $ResultSet->num_rows;
        $NumPaginas = $NumRows / 6;
        $Residuo = $NumRows % 6;
        if($Residuo > 0){
            $NumPaginas = $NumPaginas + 1;
        }
        $i = 1;
        $LimInferior = 1;
        $LimSuperior = 6;
        $Paginacion = '';
        $Paginacion .= '<nav aria-label="Page navigation example">';
        $Paginacion .= '<ul class="pagination justify-content-center">';
        if(isset($_GET['inferior'])){
            if($_GET['inferior'] == 1){
                $Paginacion .= '<li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>';
            } else{
                $Paginacion .= '<li class="page-item"><a class="page-link" href="#">Anterior</a></li>';
            } 
        } else{
            $Paginacion .= '<li class="page-item disabled"><a class="page-link" href="#">Anterior</a></li>';
        }
        while($i <= $NumPaginas){
            $Paginacion .= '<li class="page-item"><a class="page-link" href="plantillaDocente.php?inferior='.$LimInferior.'&superior='.$LimSuperior.'">'.$i.'</a></li>';
            $i = $i + 1;
            $LimInferior = $LimInferior + 6;
            $LimSuperior = $LimSuperior + 6;
        }
        if(isset($_GET['superior'])){
            if($_GET['superior'] >= $NumRows){
                $Paginacion .= '<li class="page-item disabled"><a class="page-link" href="#">Siguiente</a></li>';
            } else{
                $Paginacion .= '<li class="page-item"><a class="page-link" href="#">Siguiente</a></li>';
            } 
        } else{
            $Paginacion .= '<li class="page-item"><a class="page-link" href="#">Siguiente</a></li>';
        }
        $Paginacion .= '</ul>';
        $Paginacion .= '</nav>';

        return $Paginacion;
    }
    /*
    Modal pequeño
        <div class='modal-body'>
            <div class='d-flex flex-row justify-content-center m-2'>
                <img class='rounded-circle p-1 bg-primary' src='../img/hector_trujillo.JPG' alt='' style='width: 15rem; height: 15rem;'>
            </div>
            <div class='d-flex flex-row justify-content-center bg-warning'>
                <h1 class='py-2 fs-4'>$nombre_maestro</h1>
            </div>
            <div class='d-flex flex-row justify-content-center m-2' style='text-align: justify;'>
                <p class='text-dark'>$palabras_maestro</p>
            </div>
            <div class='d-flex flex-row justify-content-center m-2' style='text-align: justify;'>
                <p>$informacion_maestro</p>
            </div>
            <div class='d-flex flex-row justify-content-center m-2' style='text-align: justify;'>
                <p>$materias_maestro</p>
            </div>
            <div class='d-flex flex-row justify-content-center m-2'>
                <p>$contacto_maestro</p>
            </div>
        </div>
    
    Modal Grande
        <div class='modal-body'>
            <div class='d-flex flex-row justify-content-center m-2'>
                <div class='d-flex flex-column justify-content-center m-2'>
                    <img class='rounded-circle p-1 bg-primary' src='../img/hector_trujillo.JPG' alt='' style='width: 15rem; height: 15rem;'>
                </div>
                <div class='d-flex flex-column justify-content-center m-2'>
                    <div class='d-flex flex-row bg-warning justify-content-center m-2'>
                        <h1 class='py-2 fs-4'>$nombre_maestro</h1>
                    </div>
                    <div class='d-flex flex-row justify-content-center m-2'>
                        <p class='text-dark'>$palabras_maestro</p>
                    </div>
                </div>
            </div>
            <div class='d-flex flex-row justify-content-center m-2' style='text-align: justify;'>
                <p>$informacion_maestro</p>
            </div>
            <div class='d-flex flex-row justify-content-center m-2' style='text-align: justify;'>
                <p>$materias_maestro</p>
            </div>
            <div class='d-flex flex-row justify-content-center m-2'>
                <p>$contacto_maestro</p>
            </div>
        </div>
    */
?>