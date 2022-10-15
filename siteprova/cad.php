<?php

extract($_POST);
$remove = array(".","..");

if($nPasta == ""){
    echo "<h1> VOCÊ NÃO NOMEOU O DIRETÓRIO!";
    exit;
}

if(isset($bDelet)){
    if(is_dir("comodos/$nPasta")){
        $pastD = scandir("comodos/$nPasta");
        $pastaD = array_diff($pastD, $remove);

        foreach ($pastaD as $value) {
            unlink("comodos/$nPasta/$value");

        }
        rmdir("comodos/$nPasta");
        echo "<h1> Diretório Deletado </h1>";
        exit;
    }else{
        echo "<h1> Esse diretório não existe na nossa base de Dados";
        exit;
    }
}else{

if($_FILES['userfile']['error'] == 4){
    echo "<h1> VOCÊ NÃO FEZ NENHUM UPLOAD!";
    exit;
}
    
$comodos = scandir("comodos");
$limitC = array_diff($comodos, $remove);
$sizeC = count($limitC);

if (!is_dir("comodos/$nPasta")) {
    if($sizeC < 3){
    mkdir("comodos/$nPasta");
}else{
    echo "<h1> Limite de diretórios alcançado! Remova um diretório antes de criar um novo.";
    exit;
}
}
$caminho = "comodos/$nPasta";

$nomeTemp = $_FILES['userfile']['tmp_name'];
$nomeFile = $_FILES['userfile']['name'];

$parInfo = pathinfo("$nomeFile");

$ext = $parInfo['extension'];

if($ext == "jpg" || $ext == "png" || $ext == "jpeg"){
    $fil = scandir($caminho);
	$file = array_diff($fil, $remove);
    $size = count($file);
    $nomeArq = $nPasta.$size.".".$ext;

    if ($size < 3) {
        move_uploaded_file($nomeTemp,$caminho."/".$nomeArq);

        echo "<h1> Upload Concluído </h1>";
    }else{
        echo "<h1> Limite de arquivos alcançado! Escolha outro diretório ou apague os arquivos. </h1>";
    }

}else{
    echo "<h1> Error!! Extensão não aceita! </h1>";
}

}

?>