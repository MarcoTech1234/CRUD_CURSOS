<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <table style="border: 2px solid #ccc">
            <thead>
                <th>Nome</th>
                <th>descricao</th>
                <th>carga</th>
                <th>area</th>
            </thead>
            <tbody>
                <?php
                    include 'conexao.php';
                    $consulta = "SELECT * FROM CURSO";
                    $consulta_curso = mysqli_query($conexao, $consulta);

                    while($linha = mysqli_fetch_array($consulta_curso)){
                        echo '<tr><td>' . $linha['nome'] . '</td>';
                        echo '<td>' . $linha['descricao'] . '</td>';
                        echo '<td>' . $linha['carga'] . '</td>';
                        echo '<td>' . $linha['AREA'] . '</td>';                        
                ?>

                <td><a href="deleta_curso.php?codigo=<?php echo $linha['codigo']; ?>">
                    <input type="submit" value="DELETAR">
                </a></td>
            
                <td><a href="curso.php?editar=<?php echo $linha['codigo']; ?>">
                    <input type="submit" value="EDITAR">
                </a></td>          
                </tr>

                <?php
                    }
                ?>
            </tbody>
        </table>
        <a href="curso.php"><input type="submit" value="VOLTAR"/></a>
    </body>
</html>