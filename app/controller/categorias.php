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

        case 'inserir':
            if(!isset($_POST['gravar'])) {
                //FORMULÁRIO
                include "../views/templates/cabecalho.php";
                include "../views/categorias/inserir.php";
                include "../views/templates/rodape.php";
            } else {
                //GRAVAR OS DADOS NO BD
                $cat = new Categoria();
                $cat->setNome($_POST['nome']);
                $cat->setDescricao($_POST['descricao']);
                $insert = new CategoriaCrud();
                $insert->insertCategoria($cat);
                header("location: categorias.php");
            }
            break;

        case 'alterar':
            if(!isset($_POST['gravar'])) {
                //FORMULÁRIO
                $id = $_GET['id'];
                $crud = new CategoriaCrud();
                $categoria = $crud->getCategoria($id);
                include "../views/templates/cabecalho.php";
                include "../views/categorias/alterar.php";
                include "../views/templates/rodape.php";

            } else {
                //GUARDAR OS DADOS EDITADOS NO BD
                $cat = new Categoria();
                $cat->setId($_GET['id']);
                $cat->setNome($_POST['nome']);
                $cat->setDescricao($_POST['descricao']);
                $editar = new CategoriaCrud();
                $editar->updateCategoria($cat);
                header("location: categorias.php");
            }
            break;

        case 'excluir':
            $id = $_GET['id'];
            $crud = new CategoriaCrud();
            $crud->deleteCategoria($id);
            header('location: categorias.php');
            break;
    }
