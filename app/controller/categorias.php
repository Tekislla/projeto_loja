<?php
/*
 * CONTROLADOR PARA CATEGORIAS
 *
 * Vai verificar que ação o usuário deseja fazer
 *
 * Dependendo da ação, faz algo e exibe uma view
 */

require_once "../model/CategoriaCrud.php";

    if (isset($_GET['acao'])) {
        $acao = $_GET['acao'];
    } else {
        $acao = 'index';
    }

    switch ($acao){
        case 'index':
            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();
            include "../views/templates/cabecalho.php";
            include "../views/categorias/index.php";
            include "../views/templates/rodape.php";
            break;

        case 'show':
            $id = $_GET['id'];
            $crud = new CategoriaCrud();
            $categoria = $crud->getCategoria($id);
            include "../views/templates/cabecalho.php";
            include "../views/categorias/show.php";
            include "../views/templates/rodape.php";
            break;
    }
