<?php
    include 'conexao.php';

    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $carga = $_POST['carga'];
    $area = $_POST['AREA'];

    $consulta = "INSERT INTO curso(nome, descricao, carga, AREA)
                       VALUES ('$nome', '$descricao', $carga, '$area')";

    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>