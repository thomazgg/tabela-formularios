<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Formulario v3</title>
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>

<body>
    <h1>Tabela - Dados dos Formulários</h1>
    <table class="content-table">
        <thead>
            <tr>
                <th>Rank</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>CPF</th>
                <th>Celular</th>
                <th>Endereço</th>
                <th>Bairro</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>Estado</th>
                <th>Tipo</th>
                <th>Qtd.</th>
                <th>Forma de Pagamento</th>
                <th>Total dos produtos</th>
                <th>Frete</th>
                <th>Valor Total</th>
                <th>Valor Total + Frete</th>
            </tr>
        </thead>
        <tbody>
            <tr id="1" onclick=location.href='dados.php'>
                <td>1</td>
                <td>Robson</td>
                <td>robson@gmail.com</td>
                <td>robson123</td>
                <td>123.456.789-10</td>
                <td>99876-5432</td>
                <td>Rua da minha casa</td>
                <td>Bairro 1</td>
                <td>12345-001</td>
                <td>Uma cidade qualquer</td>
                <td>Um estado qualquer</td>
                <td>Produto tipo 1 R$100.00</td>
                <td>1</td>
                <td>Boleto Bancário</td>
                <td>R$100.00</td>
                <td>Expresso R$10.00</td>
                <td>$100.00</td>
                <td>R$110.00</td>
            </tr>
            <tr id="2" onclick=location.href='dados.php'>
                <td>2</td>
                <td>Roberto</td>
                <td>roberto@gmail.com</td>
                <td>roberto123</td>
                <td>123.456.789-11</td>
                <td>99876-5433</td>
                <td>Rua da minha casa</td>
                <td>Bairro 2</td>
                <td>12345-002</td>
                <td>Uma cidade qualquer</td>
                <td>Um estado qualquer</td>
                <td>Produto tipo 2 R$200.00</td>
                <td>2</td>
                <td>A vista 10% desconto</td>
                <td>R$400.00</td>
                <td>Sedex 10 - R$30.00</td>
                <td>R$400.00</td>
                <td>R$930.00</td>
            </tr>
            <tr id="3" onclick=location.href='dados.php'>
                <td>3</td>
                <td>Pedro</td>
                <td>pedro@gmail.com</td>
                <td>pedro123</td>
                <td>123.456.789-12</td>
                <td>99876-5434</td>
                <td>Rua da minha casa</td>
                <td>Bairro 3</td>
                <td>12345-003</td>
                <td>Uma cidade qualquer</td>
                <td>Um estado qualquer</td>
                <td>Produto tipo 3 R$300.00</td>
                <td>3</td>
                <td>3 x – Sem Juros</td>
                <td>R$900.00</td>
                <td>Correio R$0.00</td>
                <td>R$900.00</td>
                <td>R$900.00</td>
            </tr>
        </tbody>
    </table>
    
</body>