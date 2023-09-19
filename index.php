<?php 
require("controller.php");

if(isset($_GET["page"]) && !empty($_GET["page"])){
    

    $page = htmlspecialchars($_GET["page"]);
    if($page == "home"){ 
        DisplayHome();
    }else if($page == "equipe"){
        DisplayEquipe();
    }else if($page == "gallerie"){
        DisplayGallerie();
    }else if($page == "joueurs"){
        DisplayJoueurs();
    }else if($page == "esgi"){
        DisplayESGI();
    } 
}else{
        DisplayHome();
}
?>