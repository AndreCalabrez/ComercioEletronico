<?php
    $conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
    if($_POST){
        $nome = $_POST['nome'];
        $dataNasc = $_POST['datanasc'];
        $rua = $_POST['rua'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $uf = $_POST['uf'];
        $cpf = $_POST['cpf'];
        $login = $_POST['login'];
        $senha = md5($_POST['senha']);


        $stmt = $conexaoBanco->prepare("INSERT INTO cliente (nome, dataNasc, rua, bairro, cidade, estado, cpf, login, senha) 
                                                VALUES (?,?,?,?,?,?,?,?,?)");
        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $dataNasc);
        $stmt->bindParam(3, $rua);
        $stmt->bindParam(4, $bairro);
        $stmt->bindParam(5, $cidade);
        $stmt->bindParam(6, $uf);
        $stmt->bindParam(7, $cpf);
        $stmt->bindParam(8, $login);
        $stmt->bindParam(9, $senha);
        $stmt->execute();

        header("location: loginClienteAreaCliente.php");

    }
?>

