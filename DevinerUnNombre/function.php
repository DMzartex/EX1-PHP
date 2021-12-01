<?php 

function deviner_nombre(): string{
  $nombre = 44;
  $message = "";
  $nbr = $_GET['user_name'];
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
  $nbr = $_GET['user_name'];
  $nombre = 44;

 if($nbr != $nombre){
   return false;
 }else{
   return true;
 }
}

