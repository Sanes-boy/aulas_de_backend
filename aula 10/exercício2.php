<h2>Exercício 2</h2>
<pre>  
Criar o vetor abaixo, após imprimir seus valores utilizados a estrutura repetição for.

       +--------+
nome   |maria   |
       +--------+
idade  |17      |
       +--------+
altura |1.65    |
       +--------+
<?php
    $valores = [
        "nome" => "maria",
        "idade" => 17,
        "altura" => 1.65
    ];

    foreach ($valores as $key => $value){
        echo $value . "</br>";
    }
    ?>