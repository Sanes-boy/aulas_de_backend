<h2>Exercício 3</h2>
<pre>  
Criar o vetor abaixo, após imprimir seus valores utilizados a estrutura repetição for.

        "nome"      "nota1"   "nota2"
      +----------+----------+----------+
0     |Poliana   |7         |9         |
      +----------+----------+----------+
1     |Murilo    |8         |6         |
      +----------+----------+----------+
2     |André     |6         |7         |
      +----------+----------+----------+
</pre>
<?php
    $aluno1 = [
        "nome" => "Poliana",
        "nota1" => 7,
        "nota2" => 9
        ];

    $aluno2 = [
        "nome" => "Murilo",
        "nota1" => 8,
        "nota2" => 6
        ];

    $aluno3 = array (
        "nome" => "André",
        "nota1" => 6,
        "nota2" => 7
    );
$dados = [$aluno1, $aluno2, $aluno3];

for($i = 0; $i<=2; $i++){
    foreach ($dados[$i] as $key => $value){
        echo $value. " | ";
    }
    echo "<br>";
}
    ?>