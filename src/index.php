<?php

require_once("Models/Conexion.php");
require_once "Models/Docente.php";
require_once("Models/Materia.php");
require_once("Models/Comunidad.php");
$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];

$urlControl = array(
$_SERVER['SERVER_NAME']."/Sistemas-Computacionales/src/",
$_SERVER['SERVER_NAME']."/Sistemas-Computacionales/src/?option=0");
$conn = new Conexion();
$conn->connect();
$docente = new Docente();
$docente->setConnection($conn->getDB());
$materia = new Materia();
$materia->setConnection($conn->getDB());
$comunidad = new Comunidad();
$comunidad->setConnection($conn->getDB());
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Ingenieria, Sistemas, Sistemas Computacionales">
    <meta name="author" content="Daniela Castro Rodriguez, Irving Josue Naranjo Paredes, Angel Sánchez Domínguez, 
    Gabriel Escobar Medina, Nancy Daniela Mendez Arpidez, Marco Gabriel Cortes Toledo, Yelitza Magali Rosas Jimenez,
    Ángel Manuel Sandria Pérez, Karla Mariana Cordova Vasquez, Iván de Jesús Agame Malpica">
    <link rel="icon" href="../img/itver-logo.png"/>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <script src="../assets/js/bootstrap.bundle.js"></script>
    <title>Ingeniería en Sistemas Computacionales</title>
</head>
    <?php
        include_once "View/header.php";  
        for($i = 0; $i < 2; $i++){
            if($url==$urlControl[$i]){
                include_once "View/inicio.php";     
            }
        }
        if(!empty($_GET['option'])){
            include_once "Controllers/page-controller.php";
        }
    ?>
<?php
    include_once "View/footer.php";
?>
<script src="../assets/js/bootstrap.js"></script>
</html>