<div class="container" id="div_inserir">

    <form method="post" action="categorias.php?acao=alterar&id=<?= $categoria->getId(); ?>">
        <br>
        <h1>Alterar uma Categoria</h1>

        <br><br>

        <label for="nome">Nome</label>
        <br>
        <input type="text" name="nome" value="<?= $categoria->getNome(); ?>">
        <br>
        <label for="descricao">Descrição</label>
        <br>
        <textarea name="descricao" id="desc" cols="30" rows="10">
            <?= $categoria->getDescricao(); ?>
        </textarea>
        <br>
        <input type="submit" name="gravar" value="Editar">



    </form>

</div>