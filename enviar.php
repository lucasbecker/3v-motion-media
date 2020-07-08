<?php

if(isset($_POST['email']) && !empty($_POST['email'])){
    
    $pacote = addslashes($_POST['pacote']);

    $nomeEstabelecimento = addslashes($_POST['nome-estabelecimento']);
    $email = addslashes($_POST['email']);
    $telefone = addcslashes($_POST['telefone']);
    $whatsapp = addcslashes($_POST['whatsapp']);
    $horarioFuncionamento = addcslashes($_POST['horario-funcionamento']);
    $endereco = addcslashes($_POST['endereco']);
    $areaAtuacao = addcslashes($_POST['area-atuacao']);
    $segmento = addcslashes($_POST['segmento']);
    $definicao = addcslashes($_POST['definicao']);
    $diferencial = addcslashes($_POST['diferencial']);
    $publico = addcslashes($_POST['publico']);
    $concorrentes = addcslashes($_POST['concorrentes']);
    $palavrasChave = addcslashes($_POST['palavras-chave']);

    $identidadeVisual = addcslashes($_POST['identidade-visual']);
    $referenciaVisual = addcslashes($_POST['referencia-visual']);
    $perferenciaCores = addcslashes($_POST['perferencia-cores']);
    $perferenciaTipografia = addcslashes($_POST['perferencia-tipografia']);

    $nomeProduto1 = addcslashes($_POST['nome-produto-1']);
    $descricaoProduto1 = addcslashes($_POST['descricao-produto-1']);
    $valorProduto1 = addcslashes($_POST['valor-produto-1']);

    $nomeProduto2 = addcslashes($_POST['nome-produto-2']);
    $descricaoProduto2 = addcslashes($_POST['descricao-produto-2']);
    $valorProduto2 = addcslashes($_POST['valor-produto-2']);

    $nomeProduto3 = addcslashes($_POST['nome-produto-3']);
    $descricaoProduto3 = addcslashes($_POST['descricao-produto-3']);
    $valorProduto3 = addcslashes($_POST['valor-produto-3']);
    
    $nomeProduto4 = addcslashes($_POST['nome-produto-4']);
    $descricaoProduto4 = addcslashes($_POST['descricao-produto-4']);
    $valorProduto4 = addcslashes($_POST['valor-produto-4']);
    
    $nomeProduto5 = addcslashes($_POST['nome-produto-5']);
    $descricaoProduto5 = addcslashes($_POST['descricao-produto-5']);
    $valorProduto5 = addcslashes($_POST['valor-produto-5']);
    
    $nomeProduto6 = addcslashes($_POST['nome-produto-6']);
    $descricaoProduto6 = addcslashes($_POST['descricao-produto-6']);
    $valorProduto6 = addcslashes($_POST['valor-produto-6']);
    
    $nomeProduto7 = addcslashes($_POST['nome-produto-7']);
    $descricaoProduto7 = addcslashes($_POST['descricao-produto-7']);
    $valorProduto7 = addcslashes($_POST['valor-produto-7']);
    
    $nomeProduto8 = addcslashes($_POST['nome-produto-8']);
    $descricaoProduto8 = addcslashes($_POST['descricao-produto-8']);
    $valorProduto8 = addcslashes($_POST['valor-produto-8']);
    
    $nomeProduto9 = addcslashes($_POST['nome-produto-9']);
    $descricaoProduto9 = addcslashes($_POST['descricao-produto-9']);
    $valorProduto9 = addcslashes($_POST['valor-produto-9']);
    
    $nomeProduto10 = addcslashes($_POST['nome-produto-10']);
    $descricaoProduto10 = addcslashes($_POST['descricao-produto-10']);
    $valorProduto10 = addcslashes($_POST['valor-produto-10']);

    $nomeProduto11 = addcslashes($_POST['nome-produto-11']);
    $descricaoProduto11 = addcslashes($_POST['descricao-produto-11']);
    $valorProduto11 = addcslashes($_POST['valor-produto-11']);

    $nomeProduto12 = addcslashes($_POST['nome-produto-12']);
    $descricaoProduto12 = addcslashes($_POST['descricao-produto-12']);
    $valorProduto12 = addcslashes($_POST['valor-produto-12']);

    $nomeProduto13 = addcslashes($_POST['nome-produto-13']);
    $descricaoProduto13 = addcslashes($_POST['descricao-produto-13']);
    $valorProduto13 = addcslashes($_POST['valor-produto-13']);

    $nomeProduto14 = addcslashes($_POST['nome-produto-14']);
    $descricaoProduto14 = addcslashes($_POST['descricao-produto-14']);
    $valorProduto14 = addcslashes($_POST['valor-produto-14']);

    $nomeProduto15 = addcslashes($_POST['nome-produto-15']);
    $descricaoProduto15 = addcslashes($_POST['descricao-produto-15']);
    $valorProduto15 = addcslashes($_POST['valor-produto-15']);

    $nomeProduto16 = addcslashes($_POST['nome-produto-16']);
    $descricaoProduto16 = addcslashes($_POST['descricao-produto-16']);
    $valorProduto16 = addcslashes($_POST['valor-produto-16']);

    $nomeProduto17 = addcslashes($_POST['nome-produto-17']);
    $descricaoProduto17 = addcslashes($_POST['descricao-produto-17']);
    $valorProduto17 = addcslashes($_POST['valor-produto-17']);

    $nomeProduto18 = addcslashes($_POST['nome-produto-18']);
    $descricaoProduto18 = addcslashes($_POST['descricao-produto-18']);
    $valorProduto18 = addcslashes($_POST['valor-produto-18']);

    $nomeProduto19 = addcslashes($_POST['nome-produto-19']);
    $descricaoProduto19 = addcslashes($_POST['descricao-produto-19']);
    $valorProduto19 = addcslashes($_POST['valor-produto-19']);

    $nomeProduto20 = addcslashes($_POST['nome-produto-20']);
    $descricaoProduto20 = addcslashes($_POST['descricao-produto-20']);
    $valorProduto20 = addcslashes($_POST['valor-produto-20']);
    
    $nomePromocao1 = addcslashes($_POST['nome-promocao-1']);
    $descricaoPromocao1 = addcslashes($_POST['descricao-promocao-1']);
    $valorRealPromocao1 = addcslashes($_POST['valor-real-promocao-1']);
    $valorPromocao1 = addcslashes($_POST['valor-promocao-1']);

    $nomePromocao2 = addcslashes($_POST['nome-promocao-2']);
    $descricaoPromocao2 = addcslashes($_POST['descricao-promocao-2']);
    $valorRealPromocao2 = addcslashes($_POST['valor-real-promocao-2']);
    $valorPromocao2 = addcslashes($_POST['valor-promocao-2']);

    $chamadaAnimada = addcslashes($_POST['chamada-animada']);

    $outrasObservacoes = addcslashes($_POST['outras-observacoes']);

    // E-mail para qual vai enviar
    $to = "teste@gmail.com";
    $subjet = "Briefing Pacote ".$pacote;
    $body = '<strong>Sobre o Estabelecimento</strong>\r\n'
            .'Nome do Estabelecimento: '.$nomeEstabelecimento.'\r\n'
            .'Email: '.$email.'\r\n'
            .'Telefone: '.$telefone.'\r\n'
            .'Whatsapp: '.$whatsapp.'\r\n'
            .'Horario de Funcionamento: '.$horarioFuncionamento.'\r\n'
            .'Endereço: '.$endereco.'\r\n'
            .'Região de Atuação: '.$areaAtuacao.'\r\n'
            .'Segmento do Estabelecimento: '.$segmento.'\r\n'
            .'Definição do Estabelecimento: '.$definicao.'\r\n'
            .'Diferencial do Estabelecimento: '.$diferencial.'\r\n'
            .'Público Alvo do Estabelecimento: '.$publico.'\r\n'
            .'Concorrentes do Estabelecimento: '.$concorrentes.'\r\n'
            .'Palavras-Chave: '.$palavrasChave.'\r\n'
            .'<hr><strong>Sobre a Identidade Visual</strong>\r\n'
            .'Identidade Visual: '.$identidadeVisual.'\r\n'
            .'Referências Visuais: '.$referenciaVisual.'\r\n'
            .'Preferencia de Cores: '.$perferenciaCores.'\r\n'
            .'Preferencia de Tipográfia: '.$perferenciaTipografia.'\r\n'
            .'<hr><strong>Produtos</strong>\r\n'
            .'<strong>Produto 1</strong>\r\n'
            .'Nome: '.$nomeProduto1.'\r\n'
            .'Descrição: '.$descricaoProduto1.'\r\n'
            .'valor: '.$valorProduto1.'\r\n'
            .'<strong>Produto 2</strong>\r\n'
            .'Nome: '.$nomeProduto2.'\r\n'
            .'Descrição: '.$descricaoProduto2.'\r\n'
            .'valor: '.$valorProduto2.'\r\n'
            .'<strong>Produto 3</strong>\r\n'
            .'Nome: '.$nomeProduto3.'\r\n'
            .'Descrição: '.$descricaoProduto3.'\r\n'
            .'valor: '.$valorProduto3.'\r\n'
            .'<strong>Produto 4</strong>\r\n'
            .'Nome: '.$nomeProduto4.'\r\n'
            .'Descrição: '.$descricaoProduto4.'\r\n'
            .'valor: '.$valorProduto4.'\r\n'
            .'<strong>Produto 5</strong>\r\n'
            .'Nome: '.$nomeProduto5.'\r\n'
            .'Descrição: '.$descricaoProduto5.'\r\n'
            .'valor: '.$valorProduto5.'\r\n'
            .'<strong>Produto 6</strong>\r\n'
            .'Nome: '.$nomeProduto6.'\r\n'
            .'Descrição: '.$descricaoProduto6.'\r\n'
            .'valor: '.$valorProduto6.'\r\n'
            .'<strong>Produto 7</strong>\r\n'
            .'Nome: '.$nomeProduto7.'\r\n'
            .'Descrição: '.$descricaoProduto7.'\r\n'
            .'valor: '.$valorProduto7.'\r\n'
            .'<strong>Produto 8</strong>\r\n'
            .'Nome: '.$nomeProduto8.'\r\n'
            .'Descrição: '.$descricaoProduto8.'\r\n'
            .'valor: '.$valorProduto8.'\r\n'
            .'<strong>Produto 9</strong>\r\n'
            .'Nome: '.$nomeProduto9.'\r\n'
            .'Descrição: '.$descricaoProduto9.'\r\n'
            .'valor: '.$valorProduto9.'\r\n'
            .'<strong>Produto 10</strong>\r\n'
            .'Nome: '.$nomeProduto10.'\r\n'
            .'Descrição: '.$descricaoProduto10.'\r\n'
            .'valor: '.$valorProduto10.'\r\n'
            .'<strong>Produto 11</strong>\r\n'
            .'Nome: '.$nomeProduto11.'\r\n'
            .'Descrição: '.$descricaoProduto11.'\r\n'
            .'valor: '.$valorProduto11.'\r\n'
            .'<strong>Produto 12</strong>\r\n'
            .'Nome: '.$nomeProduto12.'\r\n'
            .'Descrição: '.$descricaoProduto12.'\r\n'
            .'valor: '.$valorProduto12.'\r\n'
            .'<strong>Produto 13</strong>\r\n'
            .'Nome: '.$nomeProduto13.'\r\n'
            .'Descrição: '.$descricaoProduto13.'\r\n'
            .'valor: '.$valorProduto13.'\r\n'
            .'<strong>Produto 14</strong>\r\n'
            .'Nome: '.$nomeProduto14.'\r\n'
            .'Descrição: '.$descricaoProduto14.'\r\n'
            .'valor: '.$valorProduto14.'\r\n'
            .'<strong>Produto 15</strong>\r\n'
            .'Nome: '.$nomeProduto15.'\r\n'
            .'Descrição: '.$descricaoProduto15.'\r\n'
            .'valor: '.$valorProduto15.'\r\n'
            .'<strong>Produto 16</strong>\r\n'
            .'Nome: '.$nomeProduto16.'\r\n'
            .'Descrição: '.$descricaoProduto16.'\r\n'
            .'valor: '.$valorProduto16.'\r\n'
            .'<strong>Produto 17</strong>\r\n'
            .'Nome: '.$nomeProduto17.'\r\n'
            .'Descrição: '.$descricaoProduto17.'\r\n'
            .'valor: '.$valorProduto17.'\r\n'
            .'<strong>Produto 18</strong>\r\n'
            .'Nome: '.$nomeProduto18.'\r\n'
            .'Descrição: '.$descricaoProduto18.'\r\n'
            .'valor: '.$valorProduto18.'\r\n'
            .'<strong>Produto 19</strong>\r\n'
            .'Nome: '.$nomeProduto19.'\r\n'
            .'Descrição: '.$descricaoProduto19.'\r\n'
            .'valor: '.$valorProduto19.'\r\n'
            .'<strong>Produto 20</strong>\r\n'
            .'Nome: '.$nomeProduto20.'\r\n'
            .'Descrição: '.$descricaoProduto20.'\r\n'
            .'valor: '.$valorProduto20.'\r\n'
            .'<hr><strong>Promoção e Chamada</strong>\r\n'
            .'<strong>Produto na Promoção 1</strong>\r\n'
            .'Nome: '.$nomePromocao1.'\r\n'
            .'Descrição: '.$descricaoPromocao1.'\r\n'
            .'Valor Real: '.$valorRealPromocao1.'\r\n'
            .'Valor Promoção: '.$valorPromocao1.'\r\n'
            .'<strong>Produto na Promoção 2</strong>\r\n'
            .'Nome: '.$nomePromocao2.'\r\n'
            .'Descrição: '.$descricaoPromocao2.'\r\n'
            .'Valor Real: '.$valorRealPromocao2.'\r\n'
            .'Valor Promoção: '.$valorPromocao2.'\r\n'
            .'<strong>Chamada Animada</strong>\r\n'
            .'Informações: '.$chamadaAnimada.'\r\n'
            .'<hr><strong>Observações</strong>\r\n'
            .'Obs.: '.$outrasObservacoes.'\r\n<hr>';

    // E-mail que enviará, ou seja, o e-mail da hospedagem/dominio
    $header = "From:email@dominio.com"."\r\n"
            ."X=Mailer:PHP/".phpversion();

    if(mail($to, $subjet, $body, $header)){
        header('Location: /briefing-concluido.html');
    }else{
        echo("O e-mail não pode ser enviado! ): <br>Volte para a página anterior de briefing e tente novamente.");
    }        
}
