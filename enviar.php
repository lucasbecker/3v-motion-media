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
    
    $nomePromocao = addcslashes($_POST['nome-promocao']);
    $descricaoPromocao = addcslashes($_POST['descricao-promocao']);
    $valorRealPromocao = addcslashes($_POST['valor-real-promocao']);
    $valorPromocao = addcslashes($_POST['valor-promocao']);

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
            .'<hr><strong>Promoção e Chamada</strong>\r\n'
            .'<strong>Produto na Promoção</strong>\r\n'
            .'Nome: '.$nomePromocao.'\r\n'
            .'Descrição: '.$descricaoPromocao.'\r\n'
            .'Valor Real: '.$valorRealPromocao.'\r\n'
            .'Valor Promoção: '.$valorPromocao.'\r\n'
            .'<strong>Chamada Animada</strong>\r\n'
            .'Informações: '.$chamadaAnimada.'\r\n'
            .'<hr><strong>Observações</strong>\r\n'
            .'Obs.: '.$outrasObservacoes.'\r\n';

    // E-mail que enviará, ou seja, o e-mail da hospedagem/dominio
    $header = "From:email@dominio.com"."\r\n"
            ."X=Mailer:PHP/".phpversion();

    if(mail($to, $subjet, $body, $header)){
        header('Location: /briefing-concluido.html');
    }else{
        echo("O e-mail não pode ser enviado! ): <br>Volte para a página anterior de briefing e tente novamente.");
    }        
}
