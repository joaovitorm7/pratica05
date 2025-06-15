<?php
if (isset($_POST["enviar"])) {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    echo "<h3>Cadastro Realizado:</h3>";
    echo "Email: $email<br>";
    echo "Senha: $senha<br><br>";

    if (isset($_FILES["img-perfil"]) && $_FILES["img-perfil"]["error"] === 0) {
        $nomeTemp = $_FILES["img-perfil"]["tmp_name"];
        $nomeFinal = basename($_FILES["img-perfil"]["name"]);
        $diretorio = "uploads/";
        $caminhoFinal = $diretorio . $nomeFinal;

        $check = getimagesize($nomeTemp);
        if ($check === false) {
            echo "O arquivo não é uma imagem válida.";
            exit;
        }

        $extensao = strtolower(pathinfo($caminhoFinal, PATHINFO_EXTENSION));
        $tiposPermitidos = ["jpg", "jpeg", "png", "gif", "tiff"];
        if (!in_array($extensao, $tiposPermitidos)) {
            echo "Tipo de imagem não permitido. Use JPG, JPEG, PNG, TIFF ou GIF.";
            exit;
        }

        if (!is_dir($diretorio)) {
            mkdir($diretorio);
        }

        if (move_uploaded_file($nomeTemp, $caminhoFinal)) {
            echo "Imagem enviada com sucesso!<br>";
            echo "<img src='$caminhoFinal' alt='Foto de perfil' width='200'>";
        } else {
            echo "Erro ao enviar o arquivo.";
        }
    } else {
        echo "Erro: Nenhuma imagem foi enviada ou ocorreu uma falha.";
    }
} else {
    echo "Acesso inválido.";
}
?>
