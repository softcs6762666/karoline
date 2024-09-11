<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrocel de fotos</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

    <button class="btn">
        <a href="login.php"><h2>Exit</h2></a>
        <i class="fa-solid fa-right-from-bracket"></i>
    </button>

    <div class="carrocel">
        <div class="slides">
            <?php
            //diretorio de imagens 
            $diretorio = "imagens/";

            //abrir o diretorio 
            if ($handle = opendir($diretorio)){
                //lterar sobre todos os arquivos do diretorio
                while (false !== ($entrada = readdir($handle))){
                    //exibir apenas imagens jpg
                    if($entrada !="." && $entrada != ".." && preg_match("/\.(jpg|jpeg|png)$/i", $entrada)){
                        echo"<div class='slide'><img src='$diretorio$entrada' alt='Imagem'></div>";
                    }
                }
                closedir($handle);
            }
            ?>
        </div>
        <div class="controles">
            <span class="anterior" onclick="mudarSlide(-1)"&#10094;></span>
            <span class="proximo" onclick="mudarSlide(1)"&#10095;></span>
        </div>
    </div>
    
    <script src="js/script.js"></script>
</body>
</html>