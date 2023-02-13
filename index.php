<html>

    <head>

        <title>PHP- aula de exemplo de uso de variaveis  </title>

     </head>

        <body>
                <?php

                //declarando variaveis
                $var1 = 1; //inteiro
                $varX = 9.50; //ponto flutuante
                $varY = 9.50; //ponto flutuante
                        $var2 = $varX + $varY; //recebendo o resultado de uma expressao
                $varSTR = "Atribuir String"; //variavel texto-string
                $varletra = "a"; //variavel caracter
                $varbool = true; //atribuição logica

                echo"Exemplo de uma aplicação em PHP";
                print"<P>";

                echo"Conteudo de var1: ";
                echo $var1;
                print"<P>";

                echo "Conteudo de varX: ";
                echo $varX;
                print "<P>";

                echo"Conteudo de varY: ";
                echo $varY;
                print "<P>";

                echo"Conteudo de var STR: ";
                echo $varSTR;
                print "<P>";

                echo"Conteudo de varletra: ";

                echo$varletra;
                print"<P>";
                echo"Conteudo de varbool: ";
                echo $varbool;

                ?>
        </body>
</html>