<?php
  define("Filename", "feriado.txt");

  if($_SERVER["REQUEST_METHOD"] == "POST"){
      
      if(!file_exists(Filename))
        $handle = fopen(Filename, "w");
      else 
        $handle = fopen(Filename, "a");

      fwrite($handle, $_POST['name']." - ".$_POST['cpf']."\n");
      fflush($handle);
      fclose($handle);
      
      header("location: listarUsuarios.php");
  }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Acessar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body>
    <div class="wrapper">
        <h2>Cadastrar Usuário</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Nome</label>
                <input type="text" name="name" class="form-control">
                <span class="help-block"></span>
            </div>    

            <div class="form-group">
                <label>Cpf</label>
                <input type="number" name="cpf" class="form-control" value="123mudar">
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Acessar">
            </div>
        </form>
    </div>    
</body>
</html>