<?php
if($_POST){
    $conexaoBanco = new PDO('sqlite:db/comercioEletronico.sqlite') or die ("Não consegui Conectar!");
	if($_POST['login']){
		  $login = $_POST['login'];
   	}
   	if($_POST['senha']){
   		$senha = md5($_POST['senha']);
   	}


    $stmt = $conexaoBanco->prepare("");


    $SQL = "SELECT count(1) AS usuario FROM cliente
                WHERE login = '$login'
                  AND senha = '$senha'";

    $resultado = $conexaoBanco->query($SQL);

    $prod = $resultado->fetchAll();

    if ($prod[0]['usuario'] != 0){
        session_start();
        $_SESSION['usuario'] = $login;
        if($_SESSION['op'] == 0) {
            header("location: areaCliente.php");
        }else{
            header("location: compra.php");
        }
    }else{
        echo "Usuario Não Existe";
    }

}

?>