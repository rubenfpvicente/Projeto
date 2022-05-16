<?php

$agencia = new Agencia();

if($_POST['modelo']){
    $nome=$_POST["Nome"];
    $rua=$_POST["rua"];
    $porta=$_POST["porta"];
    $codpostal=$_POST["codPostal"];
    $cidade=$_POST["cidade"];
    $pais=$_POST["País"];
    $contacto=$_POST["Contacto"];
    $nif=$_POST["NIF"];
    $sexo=$_POST["sexo"];
    $nacionalidade=$_POST["nacionalidade"];
    $altura=$_POST["altura"];
    $medida1=$_POST["medida1"];
    $medida2=$_POST["medida2"];
    $medida3=$_POST["medida3"];
    $codAgente=$_POST["codAgente"];

    $morada=new Morada($rua,$porta,$codpostal, $cidade, $pais);

    $modelo = new Modelo($nome, $morada->codigo, $contacto, $nif, $sexo, $nacionalidade,$altura, $medida1,$medida2,$medida3,$codAgente);

}


$agencia->adicionarModelo($modelo);

$agencia->exportar();

