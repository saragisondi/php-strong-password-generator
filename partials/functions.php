<?php 

function generator_psw($Lenght){
  $characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRTUVWXYZ0123456789!£$%&/()=?^[]{}*+°#@-_.:,;<>#";

  $password = "";

  while (strlen( $password ) < $Lenght )  {
    $password .= $characters[rand(0, strlen($characters)- 1) ];
  }
  return $password;
}
?>