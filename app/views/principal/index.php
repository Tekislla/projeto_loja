<html>
    <head>
        <title>Teste</title>
        <link rel="stylesheet" href="../../../assets/css/teste.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script>



         $(document).ready(function () {

               //ADICIONAR A CLASSE ÁS ABAS
               $("#abas ul li").addClass("selecionado");

                //AO CLICAR EM QUALQUER LI
               $("#abas ul li").click(function () {

                    //ALTERNAR A CLASSE NAQUELE QUE CLIQUEI
                    $(this).toggleClass("selecionado");

                    //GUARDO VALOR DO ID DE QUEM CLIQUEI NA VARIÁVEL
                    var idAba = $(this).attr("id");

                    //ALTERNAR A EXIBIÇÃO DA DIV DE CONTEUDO CORRESPONDENTE
                   $("."+idAba).toggle();

               });
         });
        </script>

    </head>

    <body>

        <div id="abas">
            <ul>
                <!-- FOREACH PERCORRENDO AS CATEGORIAS -->
                <li id="aba1">Aba 1</li>
                <li id="aba2">Aba 2</li>
                <li id="aba3">Aba 3</li>
            </ul>
        </div>

        <div id="conteudos">
            <div class="conteudo aba1">
                conteudo 1
            </div>
            <div class="conteudo aba2">
                conteudo 2
            </div>
            <div class="conteudo aba3">
                conteudo 3
            </div>
        </div>

    </body>
</html>