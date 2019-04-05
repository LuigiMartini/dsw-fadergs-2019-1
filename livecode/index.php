<?php

# modelo de dados

$produto_1 = array(
    "nome_produto" => "Camisa",
    "descricao_produto" => "Camisa de tecido adequado ao clima gaúcho.",
    "preco_produto" => 50.00
);

$produto_2 = array(
    "nome_produto" => "Calça",
    "descricao_produto" => "Calça da altura correta para pernas que chegam até o chão.",
    "preco_produto" => 100.00
);

$produto_3 = array(
    "nome_produto" => "Sapato",
    "descricao_produto" => "Sapato de couro de cachorro.",
    "preco_produto" => 250.00
);

$db = array($produto_1, $produto_2, $produto_3);

## código...

function cria_produto($produto)
{
    $nome = $produto['nome_produto'];
    $descricao = $produto['descricao_produto'];
    $preco = $produto['preco_produto'];
echo <<<EOS
<div class="card bg-dark text-white">
  <img src="images/produto.jpg" class="card-img" alt="...">
  <div class="card-img-overlay texto_produto">
    <h5 class="card-title">$nome</h5>
    <p class="card-text">$descricao</p>
    <p class="card-text">R$ $preco</p>
  </div>
</div>
EOS;
}

function cria_jumbotron($titulo, $descricao)
{
echo <<<EOS
    <div class="jumbotron">
      <h1 class="display-4">$titulo</h1>
      <p class="lead">$descricao</p>
    </div>
EOS;
}

include('static/page_header.php');
include('componentes/barra_navegacao.php');

# Descricao da loja.
cria_jumbotron("Roupa Nova", "A sua velha loja de roupas novas.");

# Lista de produtos.
foreach ($db as $key => $value) {
    cria_produto($value);
}

include('static/page_footer.php');

?>
