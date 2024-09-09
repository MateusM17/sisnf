<?php
// Inclusão do arquivo de conexão com o banco de dados
// Esse arquivo deve conter a lógica para conectar ao banco de dados
include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link para o CSS do Bootstrap, que fornece estilos pré-definidos -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Link para o JavaScript do Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Ícones do Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Link para o arquivo de estilo padrão da aplicação -->
    <link rel="stylesheet" href="css/estilo-padrao.css">

    <title>Sistema NotasFiscais 1.0</title> <!-- Título da página -->
</head>

<body>
    <header class="bg-dark">
        <div class="container">
            <!-- Navbar com links para navegação entre as seções do sistema -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">
                    <img src="img/sistema nf 1.0.png" alt="sis-notasfiscais" width="180">
                </a>

                <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
                    <ul class="navbar-nav mr-auto">
                        <!-- Links de navegação com parâmetro para acessar diferentes páginas -->
                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=notas">Notas</a></li>
                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a></li>
                        <li class="nav-item active"><a class="nav-link" href="index.php?menuop=eventos">Eventos</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <div class="container">
            <hr>
            <?php
            // Verifica se a aplicação está sendo acessada via API
            // Se sim, inclui o arquivo da API e sai do script
            if (isset($_GET['api']) && $_GET['api'] == 'true') {
                include('api.php');
                exit(); 
            }

            // Obtém a opção de menu a partir dos parâmetros da URL (GET)
            // Se não houver parâmetro, o valor padrão será "home"
            $menuop = (isset($_GET["menuop"])) ? $_GET["menuop"] : "home";

            // Estrutura de controle switch para incluir a página correta
            switch ($menuop) {
                case 'home':
                    include("paginas/home/home.php");
                    break;
                case 'notas':
                    include("paginas/notas/notas.php");
                    break;
                case 'cad-notas':
                    include("paginas/notas/cad-notas.php");
                    break;
                case 'inserir-notas':
                    include("paginas/notas/inserir-notas.php");
                    break;
                case 'editar-nota':
                    include("paginas/notas/editar-nota.php");
                    break;
                case 'atualizar-nota':
                    include("paginas/notas/atualizar-nota.php");
                    break;
                case 'excluir-nota':
                    include("paginas/notas/excluir-nota.php");
                    break;
                case 'tarefas':
                    include("paginas/tarefas/tarefas.php");
                    break;
                case 'cad-tarefas':
                    include("paginas/tarefas/cad-tarefas.php");
                    break;
                case 'inserir-tarefas':
                    include("paginas/tarefas/inserir-tarefas.php");
                    break;
                case 'editar-tarefas':
                    include("paginas/tarefas/editar-tarefas.php");
                    break;
                case 'atualizar-tarefas':
                    include("paginas/tarefas/atualizar-tarefas.php");
                    break;
                case 'excluir-tarefas':
                    include("paginas/tarefas/excluir-tarefas.php");
                    break;
                case 'eventos':
                    include("paginas/eventos/eventos.php");
                    break;
                default:
                    // Se a opção não corresponder a nenhuma válida, carrega a página inicial
                    include("paginas/home/home.php");
                    break;
            }
            ?>
        </div>
    </main>

    <footer class="container-fluid bg-dark">
        <div class="text-center">SIS Notas Fiscais V 1.0</div>

        <!-- Scripts necessários para o funcionamento de alguns componentes do Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

        <!-- Inclusão de scripts personalizados, como o de validação -->
        <script src="./js/validation.js"></script>
    </footer>
</body>

</html>