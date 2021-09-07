<?php
  define("Filename", "feriado.txt");
  
  echo 'Listar usuários cadastrados<br /><br />';

  $handle  = fopen(Filename, 'r');

  while(!feof($handle)) {
   $getLineContent = fgets($handle, 1024);
   echo $getLineContent.'<br />';
  }

  fflush($handle);
  fclose($handle);
  
  echo '<br /><a href="cadastro.php">Registrar novo usuário</a>';
  echo '<br /><br/><a href="welcome.php">Página de Welcome</a>';
?>