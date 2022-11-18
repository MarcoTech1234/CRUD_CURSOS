<?php

    include 'conexao.php';

    $codigo = $_POST['codigo'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $carga = $_POST['carga'];
    $area = $_POST['AREA'];

    $consulta = "UPDATE curso SET nome = '$nome',
                                 descricao = '$descricao',
                                carga = $carga,
                                AREA = '$area'
                              WHERE codigo = $codigo";
    
    mysqli_query($conexao, $consulta);

    header('location: ver_curso.php');
?>