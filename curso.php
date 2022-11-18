<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if(!isset($_GET['editar'])){ ?>

        <form method="POST" action="processa_curso.php">
            <h2>Inserir Curso</h2>
            <label><h3>Nome do Curso:</h3></label>
            <input type="text" name="nome" placeholder="Digite o Nome do Curso"/>
            <br><br>
            <label><h3>Descrição:</h3></label>
            <input type="text" name="descricao" placeholder="Digite a descricao"/>
            <br><br>
            <label><h3>Carga :</h3></label>
            <input type="number" name="carga" placeholder="Digite a escolaridade"/>
            <br><br>
            <label><h3>Area:</h3></label>
            <input type="text" name="AREA" placeholder="Digite a area"/>
            <br><br>
            <input type="submit" value="CADASTRAR">
        </form>

        <?php }else{ ?>

        <?php
            include 'conexao.php';
            $consulta = "SELECT * FROM curso";
            $consulta_curso = mysqli_query($conexao, $consulta);
            while($linha = mysqli_fetch_array($consulta_curso)){
                if($linha['codigo'] == $_GET['editar']){
        ?>

        <form method="POST" action="edita_curso.php">
            <h2>Editar Curso</h2>
            <input type="hidden" name="codigo" value="<?php echo $linha['codigo']; ?>">
            <label><h3>Nome do Curso:</h3></label>
            <input type="text" name="nome" value="<?php echo $linha['nome'];?>"/>
            <br><br>
            <label><h3>Descrição:</h3></label>
            <input type="text" name="descricao" value="<?php echo $linha['descricao']; ?>"/>
            <br><br>
            <label><h3>Carga :</h3></label>
            <input type="number" name="carga" value="<?php echo $linha['carga']; ?>"/>
            <br><br>
            <label><h3>Area:</h3></label>
            <input type="text" name="AREA" value="<?php echo $linha['AREA'] ?>"/>
            <br><br>

            <input type="submit" value="EDITAR">
                
        </form>
        <?php } ?> <!--FECHA O IF -->
        <?php } ?> <!--FECHA O WHILE -->
        <?php } ?> <!--FECHA O ELSE -->
    </body>
</html>