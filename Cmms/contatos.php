<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSSCMS/reset.css">
    <link rel="stylesheet" href="./CSSCMS/autenticacao.css">
    <title>Dashboard</title>
</head>
<body>
    <header>
        <div class="container-inicio">
            <div class="container-texto">
                <h1>C M S</h1>
                <p class="nomeProjeto">Cafeteria</p>
                <p class="gerenciamento">Gerenciamento de Conteúdo do Site</p>
            </div>
            <div class="imagem">
                <img src="./IMGs/coffee-cup.png" alt="" width="100px" height="100px">
            </div>
        </div>   
    </header>
    <section class="menu-color">
        <div class="menu">
            <div class="administradores">
                <div>
                    <img src="./IMGs/coffee (1).png" alt="">
                    <p>Adm. de Produtos</p>
                </div>
                <div>
                    <img src="./IMGs/coffee.png" alt="">
                    <p>Adm. de Categorias</p>
                </div>
                <div>
                    <a href="cafeteria/Cmms/contatos.php">
                    <img src="./IMGs/livros-de-contato.png" alt="">
                    </a>
                    <p>Contatos</p>
                </div>
                <div>
                    <img src="./IMGs/perfil.png" alt="">
                    <p>Usuários</p>
                </div>
            </div>
            <div class="logout">
                <p class="bem-vindo">Bem-Vindo Nome do Usuário</p>
                <img src="./IMGs/sair.png" alt="">
                <p>Logout</p>
            </div>
        </div>   
    </section>
    <section class="principal" >
        <p>Titulo da Sessão</p>
        <table>
        <?php
                // Import do arquivo da controller para solicitar a listagem dos dados
                    require_once('./controller/controllerMensagens.php');
                    // Chama a função que vai retornar os dados de contatos
                    $listMensagem = listarMensagens();

                    // Estrutura de repetição para retornar ps dados do array e printar na tela
                    foreach ($listMensagem as $item)
                    {
                ?>

                <tr id="tblLinhas">
                    <td class="tblColunas registros"><?=$item['nome']?></td>
                    <td class="tblColunas registros"><?=$item['email']?></td>
                    <td class="tblColunas registros"><?=$item['mensagem']?></td>
                   
                    <td class="tblColunas registros">
                        <a href="router.php?componente=contatos&action=buscar&id=<?=$item['id']?>">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>   
                        <a onclick="return confirm('Deseja realmente excluir este <?=$item['nome']?> contato?')" href="router.php?componente=contatos&action=deletar&id=<?=$item['id']?>">
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                            <img src="img/search.png" alt="Visualizar" title="Visualizar" class="pesquisar">
                    </td>
                </tr>
                <?php
                }
                ?>
        </table>
    </section>
    <footer>
        <div class="copyright">
            &copy; Copyright 2021
            <p>Todos os direitos reservados - Política de Privacidade</p>
        </div>
        <div class="desenvolvido">
            <p>Desenvolvido por : João Gabriel</p> 
            <p>Versão 1.0.0</p> 
        </div>
    </footer>
</body>
</html>