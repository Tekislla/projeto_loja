    <h2>Listagem de categorias</h2>
    <br>
    <br>
    <div class="container">
        <h5><a href="?acao=inserir"> Inserir Nova Categoria</a></h5>
        <table class="table">
            <thead class="thread">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Categoria</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categorias as $categoria): ?>
            <tr>
                <th scope="row"><?= $categoria->getId(); ?></th>
                <td><a href="?acao=show&id=<?= $categoria->getId(); ?>"><?= $categoria->getNome(); ?></a></td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
