<?php
//conexão com o banco de dados
$servername= "servidor_web_gabriella";
$username= "gabriella";
$db_name="loja_carros";
$password = "gabriella";

$connect = mysqli_connect($servername,$usarname,$password,$db_name);
//printf("Character set inicial: %s\n", mysqli_character_set_name ($connect));
mysqli_set_charset($connect, "utf8");
//printf("Character set final: %s\n", mysqli_character_set_name ($connect));

if (mysqli_connect_error()):
  echo "Erro de conexão: ". mysqli_connect_error();


endif;
?>
