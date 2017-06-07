<?php

$conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
if($_POST){


    $nome = $_POST['nome'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);


    $stmt = $conexaoBanco->prepare("INSERT INTO funcionario ( nome, login, senha) 
                                                VALUES (?,?,?)");


    $stmt->bindParam(1, $nome);
    $stmt->bindParam(2, $login);
    $stmt->bindParam(3, $senha);

    $stmt->execute();

    header("location: gerenciar.php");
}


?>