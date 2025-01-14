<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login2</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
<main>
<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <label for="cpf">Insira seu cpf</label>
        <input type="text" name="cpf" id="cpf" maxlength="14" 
        placeholder="xxx.xxx.xxx-xx" 
        pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" 
        required>
        <label for="senha">Insira sua senha</label>
        <input type="password" name="senha" id="senha" value="">
        <input type="submit" value="Enviar" name="botão">s  
        </form>
        </main>
<?php
$cpf = null;
$senha = null;
$enviar = null;     
    $cpf = $_POST['cpf'] ?? 0;
    $senha = $_POST['senha'] ?? 0;
    $enviar = $_POST['botão'] ?? 0;
    $host = "localhost";
    $db   = "teste";
    $user = "root";
    $pass = "";
    $con = new mysqli($host, $user, $pass);
    if ($con->connect_error) {
        die("Falha na conexão: " . $con->connect_error);
    } 
    if($enviar=="Enviar" && isset($cpf) && isset($senha) && isset($enviar)){ 
    $con->select_db($db);
    $query = "SELECT * FROM Usuario WHERE cpf='$cpf' AND senha='$senha'";
    $result = $con->query($query);
   // var_dump($result);
    if ($result instanceof mysqli_result) {
       
        if ($result->num_rows > 0) {
          //  $nome = $result2;
            $con2 = new mysqli($host, $user, $pass);
            $con2->select_db($db);
            $query2 = "SELECT nome FROM Usuario WHERE cpf='$cpf'";
            $result2 = $con2->query($query2);
            $row = $result2->fetch_object();
            $nome = $row->nome;
            setcookie('nome',$nome,time()+3600);
           header('Location: home.php');
            exit();  
        } else {
            $session = false;
            echo "<h1>Usuário não encontrado!</h1>";
        }
    } else {
        // Se a consulta falhar, exibe a mensagem de erro
        echo "Erro na consulta: " . $con->error;
    }
} else {
    echo "<h1>Preencha todos os campos corretamente!";
}
  ?>
    
    </main>
</body>
</html>