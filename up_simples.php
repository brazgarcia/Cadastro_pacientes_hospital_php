<?php

try {

    // Criação de um diretório de destino.
    $diretorio_destino = "anexos/";

    //verificador de diretório de destino.
    if(!isset($diretorio_destino)) {

        throw new Exception("Diretório não encontrado ou inexistente.");

    }

    $nome_arquivo_servidor = $diretorio_destino . "anexo.gif";

    if(move_uploaded_file($_FILES["arquivo_up"]["tmp_name"], $nome_arquivo_servidor)) {
      
        echo "Arquivo enviado!";

    } else {

        throw new Exception("Erro ao enviar anexo. Erro: " . $_FILES["arquivo_up"]["error"]);
    }



} catch (Exception $e) {

    echo $e->getMessage();

}