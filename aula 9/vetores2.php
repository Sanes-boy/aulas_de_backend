<h2>Vetor com índice textual</h2>
<pre>  
      +--------+
nome  |notebook|
      +--------+
marca |Dell    |
      +--------+
Preço |5.400   |
      +--------+
<pre>

<?php
    $produtos = [
        "nome" => "notebook",
        "marca" => "dell",
        "preco" => 5499.99
    ];
    var_dump($produtos);

    Echo "<br>";
    echo $produtos["nome"] . "<br>";
    echo $produtos["marca"] . "<br>";
    echo $produtos["preco"] . "<br>";

    //estrutura de repetição específica
    //para percorrer vetores
    foreach ($produtos as $key => $value){
        echo $value . "</br>";
    }
    ?>