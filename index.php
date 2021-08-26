<?php
    echo "Hello world!"; //oi

    $nome = 1;
    $nome2 = 1.0;
    $nome3 = 1.02;
    $nome4 = "Sérginho";

    echo "<br> boa tarde, olha: $nome4"; /* olha issoooooooooo */

    $num = 1;
    $num2 = 1.0;

    //o duplo = testa se são iguais (por exemplo, ali o ngc é inteiro)

    if ($num == $num2){
        echo "<br> <br> sim";
    } else {
        echo "<br> <br> não";
    }

    //o triplo = testa se são iguais E O TIPO (por exemplo, ali o ngc é decimal)

    if ($num === $num2){
        echo "<br> <br> sim";
    } else {
        echo "<br> <br> não";
    }

    echo "<br> <br> <hr> <hr> <hr> <br> <br>"; //olha isooooooooooooooooooo

    echo "Funções para textos em PHP";
    echo "<br> <br>";
    $msg = "ola, bom dia";

    //converter para maiúsculo

    $maiusculo = strtoupper($msg);
    echo $maiusculo;

    echo "<br> <br>";
    $msg2 = "OLA, BOM TARDE";

    //converter para minúsculo

    $minusculo = strtolower($msg2);
    echo $minusculo;

    //contar caracteres
    //obs.: espaço conta como caractere; acento conta como 2 caracteres e ç também

    echo "<br>";
    $cont = strlen($msg);
    echo "<br> <br> Contar caracteres do '$msg', que é: $cont (observe que conta os espaços também!)";

    $cont = strlen($msg2);
    echo "<br> <br> Contar caracteres do '$msg2', que é: $cont (observe que conta os espaços também!)";

    //como cortar um texto
    //obs.: corta o texto pela posição (que se inicia por 0)

    $texto = substr($msg, 4);
    echo "<br> <br> $texto";

    $texto = substr($msg, 4, 3);
    echo "<br> <br> $texto";

    //QUE COMECEM OS TESTES!!!!!!!!!!!!!!!!!!!!!!!!!!!1

    $texto = substr($msg, 5, 3);
    echo "<br> <br> $texto";

    $texto = substr($msg, 4, 3);
    echo "<br> <br> $texto";

    $texto = substr($msg, 9, 3);
    echo "<br> <br> $texto";

    //retornar a posição de um caracter

    $pos = strpos ($msg, "a");
    echo "<br> <br> O caracter 'a' da frase '$msg' está na posição: $pos, afinal, a posição começa pelo 0";

    //encontrar provedor de email
    echo "<br> <br>";

    $email = "dbsakbddsbbdsadsa@gmail.com";
    $email2 = "boiola123@hotmail.com";
    $email3 = "dhushduhdsa@outlook.com";
    $email4 = "eu@etec.sp.gov.br";
    $email5 = "eudbasbkhdsaetec.sp.gov.br";

    $posicao = strpos($email, "@");
    $posicao2 = strpos($email2, "@");
    $posicao3 = strpos($email3, "@");
    $posicao4 = strpos($email4, "@");

    //se não tiver o @, se ferrou
    if ($posicao == false || $posicao2 == false || $posicao3 == false || $posicao4 == false){
        echo "E-mail inválido!"; //no caso, nem vai dar erro pois tem tudo @ e se eu deixar um email sem @ vai tirar o código inteiro q eu escrevi e ficar a frase ali
    } else {

    $provedor = substr($email, $posicao);
    $provedor2 = substr($email2, $posicao2);
    $provedor3 = substr($email3, $posicao3);
    $provedor4 = substr($email4, $posicao4);

    echo "<b>olha os provedores de tais emails acima que não aparecem, abaixo:</b>";

    echo "<br> <br> Este é o provedor do 1º email: $provedor";
    echo "<br> <br> Este é o provedor do 2º email: $provedor2";
    echo "<br> <br> Este é o provedor do 3º email: $provedor3";
    echo "<br> <br> Este é o provedor do 4º email: $provedor4";
    }
?>