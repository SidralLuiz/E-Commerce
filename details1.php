<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bone Y</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
<div class="container">
        <!-- Imagem do Produto -->
        <div class="image-section">
            <img src="imgs/bones/bone1.jpg" alt="Imagem do Produto">
        </div>

        <!-- Detalhes do Produto -->
        <div class="details-section">
        <?php
        $pag = "bones";
        $codigo=1;
        $conn = new mysqli('localhost', 'root', '', 'teste');
        $sql = "SELECT preco AND nome from $pag WHERE idBone = $codigo";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        var_dump($result);  
        if($result->num_rows >0){
        $row = $result->fetch_assoc();
        $preco = (int)($row['preco']);
        echo "<h1>$preco à vista</h1>";
        }else {
            echo "<H1>erro na consultado preço";
        }
    // <h1>Blazer Alfaiataria Mindset Amarelo</h1>
//<p class="price">R$ 329,99 à vista</p>
?>
       

            <div class="sizes">
                <label>Escolha o tamanho:</label>
                <input type="radio" id="pp" name="size" value="PP">
                <label for="pp">PP</label>
                <input type="radio" id="p" name="size" value="P">
                <label for="p">P</label>
                <input type="radio" id="m" name="size" value="M">
                <label for="m">M</label>
                <input type="radio" id="g" name="size" value="G">
                <label for="g">G</label>
            </div>

            <div class="buy-section">
                <button class="buy-button">ADICIONAR À SACOLA</button>
            </div>
        </div>
    </div>
</body>
</html>