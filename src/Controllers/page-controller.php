<?php
/*
This page has the purpose to manage how the user can navigate among the pages
using $_GET['variable'].

Using $_GET we can send and recive informatino from the url.
*/


if(!empty($_GET['option']) && isset($_GET['option'])){
    switch ($_GET['option']) {
        case 0:
           
            include_once "index.php";             
            break;

        case 1:
            include_once "src/View/perfilEgreso-vista.php";
            break;

        case 2:
            include_once "src/View/plantillaDocente-vista.php";
            break;

        case 3:
            include_once "src/View/mapaCurricular-vista.php";
            break;

        case 4:
            include_once "src/View/conocenos-vista.php";
            break;
        
        case 5:
            include_once "src/View/comunidades-vista.php";
            break;
        
        default:
            include_once "src/View/index.php";
            break;
    }

}
 