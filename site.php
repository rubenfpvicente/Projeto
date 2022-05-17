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
    $codPostal1=$_POST["codPostal1"];
    $codPostal2=$_POST["codPostal2"];
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
    
    if ($nome == '') {
        echo "Tem que indicar o nome do cliente";
        exit;
    }
    
    if(!is_string($rua)){
        echo "A rua so contem letras";
        exit;
    }
    
    if(!is_numeric($porta)){
        echo "o nº da porta so pode conter numeros";
        exit;
    }
    
    if(strlen($codPostal1) !== 4){
        echo "O campo código tem que ter 4 digitos";
        exit;
    }
    if (!is_numeric($codPostal1)){
        echo "O codigo postal contem apenas numeros";
        exit;
    }
    
    if(strlen($codPostal2) !== 3){
        echo "O código postal tem que ter mais 3 digitos";
        exit;
    }
    if (!is_numeric($codPostal2)){
        echo "O codigo postal contem apenas numeros";
        exit;
    }

    if ($cidade == '') {
        echo "Tem que indicar a cidade";
        exit;
    }
    
    if ($pais == '') {
        echo "Tem que indicar o País";
        exit;
    }
    
    if (strlen($contacto) !== 9) {
        echo "O contacto tem que ter 9 numeros";
        exit;
    }
    
    if (!is_numeric($contacto)){
        echo "O contacto contem apenas numeros";
        exit;
    }
    
    if (strlen($nif) !== 9) {
        echo "O nif tem que ter 9 numeros";
        exit;
    }
    
    if (!is_numeric($nif)){
        echo "O nif contem apenas numeros";
        exit;
    }

    $codPostal = $codPostal1 . "-" . $codPostal2;

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
    $codPostal1=$_POST["codPostal1"];
    $codPostal2=$_POST["codPostal2"];
    $cidade=$_POST["cidade"];
    $pais=$_POST["País"];
    $contacto=$_POST["Contacto"];
    $dataInicio=$_POST["dataInicio"];

    if ($nome == '') {
        echo "Tem que indicar o nome do cliente";
        exit;
    }
    
    if (strlen($nif) !== 9) {
        echo "O nif tem que ter 9 numeros";
        exit;
    }
    
    if (!is_numeric($nif)){
        echo "O nif contem apenas numeros";
        exit;
    }
    
    if(strlen($codPostal1) !== 4){
        echo "O campo código tem que ter 4 digitos";
        exit;
    }
    if (!is_numeric($codPostal1)){
        echo "O codigo postal contem apenas numeros";
        exit;
    }
    
    if(strlen($codPostal2) !== 3){
        echo "O código postal tem que ter mais 3 digitos";
        exit;
    }
    if (!is_numeric($codPostal2)){
        echo "O codigo postal contem apenas numeros";
        exit;
    }
    
    if(!is_string($rua)){
        echo "A rua so contem letras";
        exit;
    }
    
    if(!is_numeric($porta)){
        echo "o nº da porta so pode conter numeros";
        exit;
    }

    if ($cidade == '') {
        echo "Tem que indicar a cidade";
        exit;
    }
    
    if ($pais == '') {
        echo "Tem que indicar o País";
        exit;
    }

    if (strlen($contacto) !== 9) {
        echo "O contacto tem que ter 9 numeros";
        exit;
    }
    
    if (!is_numeric($contacto)){
        echo "O contacto contem apenas numeros";
        exit;
    }

    
    $codPostal = $codPostal1 . "-" . $codPostal2;
    
    $morada=new Morada($rua,$porta,$codPostal, $cidade, $pais);
    
    $agencia->adicionarMorada($morada);

    $agente = new Agente($nome, $morada->codigo, $contacto, $nif, $dataInicio);

    $agencia->adicionarAgente($agente);

    header('Location: agente.html');
    
}

if(isset($_POST['fotografo'])){
    $nome=$_POST["Nome"];
    $rua=$_POST["rua"];
    $porta=$_POST["porta"];
    $codPostal1=$_POST["codPostal1"];
    $codPostal2=$_POST["codPostal2"];
    $cidade=$_POST["cidade"];
    $pais=$_POST["País"];
    $contacto=$_POST["Contacto"];
    $nif=$_POST["NIF"];
    
    if ($nome == '') {
        echo "Tem que indicar o nome do cliente";
        exit;
    }
    
    if(!is_string($rua)){
        echo "A rua so contem letras";
        exit;
    }
    
    if(!is_numeric($porta)){
        echo "o nº da porta so pode conter numeros";
        exit;
    }
    
    if(strlen($codPostal1) !== 4){
        echo "O campo código tem que ter 4 digitos";
        exit;
    }
    if (!is_numeric($codPostal1)){
        echo "O codigo postal contem apenas numeros";
        exit;
    }
    
    if(strlen($codPostal2) !== 3){
        echo "O código postal tem que ter mais 3 digitos";
        exit;
    }
    if (!is_numeric($codPostal2)){
        echo "O codigo postal contem apenas numeros";
        exit;
    }

    if ($cidade == '') {
        echo "Tem que indicar a cidade";
        exit;
    }
    
    if ($pais == '') {
        echo "Tem que indicar o País";
        exit;
    }

    if (strlen($contacto) !== 9) {
        echo "O contacto tem que ter 9 numeros";
        exit;
    }
    
    if (!is_numeric($contacto)){
        echo "O contacto contem apenas numeros";
        exit;
    }

    if (strlen($nif) !== 9) {
        echo "O nif tem que ter 9 numeros";
        exit;
    }
    
    if (!is_numeric($nif)){
        echo "O nif contem apenas numeros";
        exit;
    }

    $codPostal = $codPostal1 . "-" . $codPostal2;
    
    $morada=new Morada($rua,$porta,$codpostal, $cidade, $pais);

    $agencia->adicionarMorada($morada);

    $fotografo = new Fotografo($nome, $morada->codigo, $contacto, $nif);

    $agencia->adicionarFotografo($fotografo);

    header('Location: fotografo.html');
    
}



$agencia->exportar();

