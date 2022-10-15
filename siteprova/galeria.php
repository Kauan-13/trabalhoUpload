<link rel="stylesheet" href="estilo.css">

<?php

$fil = scandir("comodos");
$remover = array(".","..");
$file = array_diff($fil, $remover);

$size = count($file);

if($size == 3){

    $a = $file[2];
    $b = $file[3];
    $c = $file[4];

    $arq = scandir("comodos/$a");
    $arqA = array_diff($arq, $remover);
    $sizeA = count($arqA);

    $arq = scandir("comodos/$b");
    $arqB = array_diff($arq, $remover);
    $sizeB = count($arqB);

    $arq = scandir("comodos/$c");
    $arqC = array_diff($arq, $remover);
    $sizeC = count($arqC);

    if($sizeA == 3 && $sizeB == 3 && $sizeC == 3){
        $img_1 = "comodos/$a/$arqA[2]";
        $img_2 = "comodos/$a/$arqA[3]";
        $img_3 = "comodos/$a/$arqA[4]";

        $img_4 = "comodos/$b/$arqB[2]";
        $img_5 = "comodos/$b/$arqB[3]";
        $img_6 = "comodos/$b/$arqB[4]";

        $img_7 = "comodos/$c/$arqC[2]";
        $img_8 = "comodos/$c/$arqC[3]";
        $img_9 = "comodos/$c/$arqC[4]";

        echo 
            "<section>
            <center><h1>$a</h1></center>
            <div>  
                <img src='$img_1'>
                <img src='$img_2'>
                <img src='$img_3'>
            </div>
            <center><h1>$b</h1></center>
            <div>
                <img src='$img_4'>
                <img src='$img_5'>
                <img src='$img_6'>
            </div>
            <center><h1>$c</h1></center>
            <div>
                <img src='$img_7'>
                <img src='$img_8'>
                <img src='$img_9'>
            </div>
            </section>";

    }else{
        $contA = 3 - $sizeA;
        $contB = 3 - $sizeB;
        $contC = 3 - $sizeC;

        echo "<h1> É NECESSÁRIO QUE TODOS OS DIRETÓRIOS TENHAM 3 IMAGENS!! FALTAM:";
        echo "<h1> $contA IMAGENS NO DIRETÓRIO $a";
        echo "<h1> $contB IMAGENS NO DIRETÓRIO $b";
        echo "<h1> $contC IMAGENS NO DIRETÓRIO $c";
    }
}else{
    $cont = 3 - $size;
    echo "<h1>É NECESSÁRIO CRIAR TODOS OS DIRETÓRIOS ANTES DE ACESSAR A GALERIA!! FALTAM: $cont DIRETÓRIOS";
}

?>
