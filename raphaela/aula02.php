<html>
    <head>     
        <title>PHP – Aula Exemplo do Uso de Variáveis</title>
    </head>     
        <body>           
            <?php              
            $var1 = 1;
            $varX = 9.50;
            $varY = 9.50;                 
            $var2 = $varX + $varY;
            $varSTR = "Atribui String";                
            $varletra = "a";                
            $varbool = true;

            echo "Exemplo de uma aplicação em PHP";               
            print "<P>";

            echo "<strong>Conteúdo de var1:  </strong>";               
            echo $var1;               
            print "<P>";

            echo "<strong>Conteúdo de varX:  </strong>";            
            echo $varX;            
            print "<P>";

            echo "<strong>Conteúdo de varY:  </strong>";               
            echo $varY;                
            print "<P>";

            echo "<strong>Conteúdo de var2:  </strong>";               
            echo $var2;                
            print "<P>";

            echo "<strong>Conteúdo de varSTR:  </strong>";               
            echo $varSTR;               
            print "<P>";

            echo "<strong>Conteúdo de varletra:  </strong>";

            echo $varletra;               
            print "<P>";               
            echo "<strong>Conteúdo de varbool:  </strong>";               
            echo $varbool;

            ?>  
            </body>            
            </html>          