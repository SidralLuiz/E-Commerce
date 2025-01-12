<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casacos</title>
    <link rel="stylesheet" href="pags.css">
</head>
<body>
    <header>
        <h1><a href="home.php">Website Genérico</a></h1>
        <nav>
            <ul>
            <li><a href="bones.php">Bones</a></li>
                <li><a href="calcados.php">Calçados</a></li>
                <li><a href="casacos.php">Casacos</a></li>
                <li><a href="cintos.php">Cintos</a></li>
                <li><a href="femininas.php">Feminino</a></li>
                <li><a href="masculinas.php">Masculino</a></li>
                <li><a href="contato.html">Contato</a></li>
                <li><a href="carrinho.html">Carrinho</a></li>
                <li><a href="sobre.html">Sobre</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="cadastro.html">Cadastre-se</a></li>
                
            </ul>
        </nav>
    </header>
 
        <main class="carousel-container">
        <h2><a href="#">Casacos</a></h2>
        <div class="carousel">
        <?php
            $conn = new mysqli('localhost', 'root', '', 'teste');
        $codigo = 3;
        $pag = "Casacos";
        $sql = "SELECT url from $pag WHERE Codigo = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$codigo);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imagem = htmlspecialchars($row['url']);
                echo "
                <div class='carousel-item'>
                    <a href='#'>
                        <img src='imgs/$pag/$imagem' alt='Imagem'>
                        
                    </a>
                </div>";
            }
        } else {
            echo "<p>Nenhuma imagem encontrada.</p>";
        }
        
            ?>
    </main> 

    <main class="carousel-container">
        <h2><a href="#">Tênis</a></h2>
        <div class="carousel">
            <?php
            $pag2 = "casacos";
            $conn2 = new mysqli('localhost', 'root', '', 'teste');
            $codigo2 = 3.5;
            $sql2 = "SELECT url from $pag2 WHERE Codigo = ?";
            $stmt2 = $conn2->prepare($sql2);
            $stmt2->bind_param("s", $codigo2);
            $stmt2->execute();
            $result2 = $stmt2->get_result();
            if ($result2->num_rows > 0) {
                while ($row2 = $result2->fetch_assoc()) {
                    $imagem2 = htmlspecialchars($row2['url']);
                    echo "
                    <div class='carousel-wrapper'>
                        <a href='#'>
                            <img src='imgs/$pag2/$imagem2' alt='Imagem'>
                        </a>
                    </div>";
                }
            } else {
                echo "<p>Nenhuma imagem encontrada.</p>";
            }
            ?>
        </div>
    </main>
</body>
</html>