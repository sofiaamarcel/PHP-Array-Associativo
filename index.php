<?php

// Como se lê? Há um array chamado alunos com 3 posiçoês. Em cada uma das posiçõês há um
// array associativo com 3 par-valor. As chaves do array associativo são: nome, dt_nasc,
// e cidade. Cada par-valor é separado por vírgula e para definir o valor de uma chave  usa-se
// o operador de associação: =>
$alunos = array(array("nome" => "Thaís", "dt_nasc" => "04/04/2002", "cidade" => "Mococa"),    // i 1
                array("nome" => "Sofia", "dt_nasc" => "07/02/2003", "cidade" => "Mococa"),    // i 2
                array("nome" => "Gabriela", "dt_nasc" => "03/02/2003", "cidade" => "Mococa"), // i 3
                array("nome" => "Agatha", "dt_nasc" => "22/10/2003", "cidade" => "Mococa"),   // i 4
            );


// Como se lê? "Acessando o índice do array alunos. No índice 1, há um array , um asssociativo
// onde há uma chave chamada nome e devera chamar Agatha".
// echo $alunos[1]["nome"];

// Navegando pelos índices do array no navegador ex: http://localhost:8000?i=3
$indice = $_GET["i"];

// No exemplo acima de i=3 mostraria os dados da quarta posição do array(i=3)
echo $alunos[ $indice ]["nome"] . "<br />"; //mostraria Agatha
echo $alunos[ $indice ]["dt_nasc"] . "<br />";//mostraria 22/10/2003
echo $alunos[ $indice ]["cidade"] . "<br />"; //mostraria Mococa 

// olhe com var_dump para ver como a estrutura do array se comporta:
// var_dump($alunos)
?>








                



