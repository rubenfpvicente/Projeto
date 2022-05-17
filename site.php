<?php

require_once 'Colaborador.php';
require_once 'Modelo.php';
require_once 'Agente.php';
require_once 'Fotografo.php';
require_once 'Agencia.php';
require_once 'Morada.php';

$agencia = new Agencia();

if(isset($_POST['modelo'])){
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

    $morada=new Morada($rua,$porta,$codpostal, $cidade, $pais);

    $agencia->adicionarMorada($morada);

    $modelo = new Modelo($nome, $morada->codigo, $contacto, $nif, $sexo, $nacionalidade,$altura, $medida1,$medida2,$medida3,0);

    $agencia->adicionarModelo($modelo);

    header('Location: modelo.html');
    
}

if(isset($_POST['agente'])){
    $nome=$_POST["Nome"];
    $nif=$_POST["NIF"];
    $rua=$_POST["rua"];
    $porta=$_POST["porta"];
    $codpostal=$_POST["codPostal"];
    $cidade=$_POST["cidade"];
    $pais=$_POST["País"];
    $contacto=$_POST["Contacto"];
    $dataInicio=$_POST["dataInicio"];

    $morada=new Morada($rua,$porta,$codpostal, $cidade, $pais);

    $agencia->adicionarMorada($morada);

    $agente = new Agente($nome, $morada->codigo, $contacto, $nif, $dataInicio);

    $agencia->adicionarAgente($agente);

    header('Location: agente.html');
    
}


$agencia->exportar();

