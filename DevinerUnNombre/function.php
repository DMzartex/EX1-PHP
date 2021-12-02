<?php 

function deviner_nombre($nombre,$nbr): string{
  $message = "";
  if($nbr > $nombre){
      $message = "Trop grand";
  }elseif($nbr < $nombre){
      $message = "Trop petit";
  }else{
      $message = "Top";
  }

  return $message;
}

function alert():bool{
  $nbr = $_GET['nb'];
  $nombre = $_SESSION['nb_devine'];

 if($nbr != $nombre){
   return false;
 }else{
   return true;
 }
}

function GenerateNb() : int{
  $nombre = random_int(1,100);
  return $nombre;
}

function restartNb() :bool{

}

