<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <link rel="stylesheet" href="pags.css">
</head>
<body>
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
        <h2><a href="#">Bonés</a></h2>
        <div class="carousel">
            <?php
            $pag = "bones";
            $conn = new mysqli('localhost', 'root', '', 'teste');
            $codigo = 1;
            $sql = "SELECT url from $pag WHERE Codigo = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $codigo);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $imagem = htmlspecialchars($row['url']);
                    echo "
                    <div class='carousel-wrapper'>
                        <a href='#'>
                            <img src='imgs/$pag/$imagem' alt='Imagem'>
                        </a>
                    </div>";
                }
            } else {
                echo "<p>Nenhuma imagem encontrada.</p>";
            }
            ?>
        </div>
    </main>
    <h1>Novidades</h1>
    <main class="carousel-container">
        <h2><a href="#">Tênis</a></h2>
        <div class="carousel">
            <?php
            $pag2 = "calcados";
            $conn2 = new mysqli('localhost', 'root', '', 'teste');
            $codigo2 = 2;
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


    <main class="carousel-container">
        <h2><a href="#">Moletons</a></h2>
        <div class="carousel">
            <?php
            $pag3 = "casacos";
            $conn3 = new mysqli('localhost', 'root', '', 'teste');
            $codigo3 = 3;
            $sql3 = "SELECT url from $pag3 WHERE Codigo = ?";
            $stmt3 = $conn3->prepare($sql3);
            $stmt3->bind_param("s", $codigo3);
            $stmt3->execute();
            $result3 = $stmt3->get_result();
            if ($result3->num_rows > 0) {
                while ($row3 = $result3->fetch_assoc()) {
                    $imagem3 = htmlspecialchars($row3['url']);
                    echo "
                    <div class='carousel-wrapper'>
                        <a href='#'>
                            <img src='imgs/$pag3/$imagem3' alt='Imagem'>
                        </a>
                    </div>";
                }
            } else {
                echo "<p>Nenhuma imagem encontrada.</p>";
            }
            ?>
        </div>
    </main>


    <main class="carousel-container">
        <h2><a href="#">Cintos</a></h2>
        <div class="carousel">
            <?php
            $pag4 = "cintos";
            $conn4 = new mysqli('localhost', 'root', '', 'teste');
            $codigo4 = 4;
            $sql4 = "SELECT url from $pag4 WHERE Codigo = ?";
            $stmt4 = $conn3->prepare($sql4);
            $stmt4->bind_param("s", $codigo4);
            $stmt4->execute();
            $result4 = $stmt4->get_result();
            if ($result4->num_rows > 0) {
                while ($row4 = $result4->fetch_assoc()) {
                    $imagem4 = htmlspecialchars($row4['url']);
                    echo "
                    <div class='carousel-wrapper'>
                        <a href='#'>
                            <img src='imgs/$pag4/$imagem4' alt='Imagem'>
                        </a>
                    </div>";
                }
            } else {
                echo "<p>Nenhuma imagem encontrada.</p>";
            }
            ?>
        </div>
    </main>

    <main class="carousel-container">
        <h2><a href="#">Cropeds</a></h2>
        <div class="carousel">
            <?php
            $pag5 = "fem";
            $conn5 = new mysqli('localhost', 'root', '', 'teste');
            $codigo5 = 5;
            $sql5 = "SELECT url from $pag5 WHERE Codigo = ?";
            $stmt5 = $conn3->prepare($sql5);
            $stmt5->bind_param("s", $codigo5);
            $stmt5->execute();
            $result5 = $stmt5->get_result();
            if ($result5->num_rows > 0) {
                while ($row5 = $result5->fetch_assoc()) {
                    $imagem5 = htmlspecialchars($row5['url']);
                    echo "
                    <div class='carousel-wrapper'>
                        <a href='#'>
                            <img src='imgs/$pag5/$imagem5' alt='Imagem'>
                        </a>
                    </div>";
                }
            } else {
                echo "<p>Nenhuma imagem encontrada.</p>";
            }
            ?>
        </div>
    </main>
    
    <main class="carousel-container">
        <h2><a href="#">Camisetas</a></h2>
        <div class="carousel">
            <?php
            $pag6 = "mas";
            $conn6 = new mysqli('localhost', 'root', '', 'teste');
            $codigo6 = 6;
            $sql6 = "SELECT url from $pag6 WHERE Codigo = ?";
            $stmt6 = $conn6->prepare($sql6);
            $stmt6->bind_param("s", $codigo6);
            $stmt6->execute();
            $result6 = $stmt6->get_result();
            if ($result6->num_rows > 0) {
                while ($row6 = $result6->fetch_assoc()) {
                    $imagem6 = htmlspecialchars($row6['url']);
                    echo "
                    <div class='carousel-wrapper'>
                        <a href='#'>
                            <img src='imgs/$pag6/$imagem6' alt='Imagem'>
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

</body>
</html>