<h2>Exercício 1</h2>
<pre>  
    Criar o vetor abaixo, após imprimir seus valores utilizados a estrutura repetição for.

      +--------+
0     |Pedro   |
      +--------+
1     |Julia   |
      +--------+
2     |Maria   |
      +--------+
</pre>
<?php
    $nomes = [
        "Pedro",
        "Julia",
        "Maria"
    ];
    for($i = 0; $i<=2; $i++){
        echo $nomes[$i] . "<br>";
    }
    ?>