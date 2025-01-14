<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <?php
    $cpf = null;
    $senha = null;
    $enviar = null;
    $cpf = $_POST['cpf'] ?? 0;
    $senha = $_POST['senha'] ?? 0;
    $enviar = $_POST['botão'] ?? 0;
    $nome = $_POST['nome'] ?? 0;
    $host = "localhost";
    $db   = "teste";
    $user = "root";
    $pass = "";
    $con = new mysqli($host, $user, $pass);
    if ($con->connect_error) {
        die("Falha na conexão: " . $con->connect_error);
    } 
    if($enviar=="Enviar" && isset($cpf) && isset($enviar)){ 
    $con->select_db($db);
    $query = "SELECT * FROM Usuario WHERE cpf='$cpf'";
    $result = $con->query($query);
    $verify = false;
    $linha=$result->num_rows;
  
        if ($result->num_rows != 0) {
       echo "<h1>Esse cpf já foi cadastrado, deseja ir para tela login?<br>";
      
        }if($result -> num_rows == 0) {
            $verify = true;
        }
    
}
    if($verify==true)
    {
        $con = new mysqli($host, $user, $pass);
        if ($con->connect_error) 
        {
            die("Falha na conexão: " . $con->connect_error);
        } 
            if($enviar=="Enviar" && $cpf!=null && $senha!=null && $nome!=null &&$enviar!=null){
            $con->select_db($db);
            $query = "INSERT INTO USUARIO VALUES(null,'$cpf','$nome','$senha')";
            $result = $con->query($query);
            echo " ". $result;
            if($result==1){
            setcookie('nome',$nome,time()+3600);
            header('Location: home.php');
            exit();  // Certifique-se de chamar 'exit' após o redirecionamento
        }    if($result !=1) {
                echo "Erro ";
                                }    
        }
    }   
if($verify==false){  
   echo "<h1>teste</h1>";
}
  ?>
  
</body>
</html>