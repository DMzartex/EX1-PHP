<?php 

function DevinerNombre($nombre,$reponse):bool {
    $nombre = 44;
    $nbr = htmlspecialchars($_GET['user_name']);
    if($nbr > $nombre){
        $reponse = "Votre nombre est trop grand !";
        $alert = false;
      }elseif($nbr < $nombre){
        $reponse = 'Votre nombre est trop petit !';
        $alert = false;
      }else{
        $reponse = 'BRAVO vous avez gagnez !';
        $alert = true;
      }

      return $alert;
}

function affichage($reponse, $alert):string{
    if(!$alert){
        $block = '<div class = "alert alert-danger"'. $message .'</div>';
    }else{
        $block = '<div class = "alert alert-success"'. $message .'</div>';
    }

    return $block;
}

