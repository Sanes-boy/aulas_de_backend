<h2>Exercício<h2>
    <p>
        crie um vetor, como representado abaixo:
        <pre>
        
     ........ 
    | Murilo |
    -........-
    |    3   |
    -........-
    |    4   |
     ........ 
</pre>
<?php
 $meuVetor = [];
        $meuVetor[] = "Murilo";
        $meuVetor[] = 4;
        $meuVetor[] = 3;

        //ou
        $meuVetor = ["Murilo", 4, 3];

        //calcular média
        $media = ($meuVetor[1] + $meuVetor[2])/2;
        $meuVetor[] = $media; //coloca a média na última posição
                              //livre do vetor

        if($meuVetor[3] >= 6){
           $meuVetor[4] = "aprovado";
        }else{
            $meuVetor[] = "reprovado";
        }        
        var_dump($meuVetor);
 ?>
<p>
    após calcule a média das posições 1 e 2 do valor e armazene o resultado na posição 3
</p>
<p>
        Utilize uma estrutura de condição verificar se a média,
        armazenada na posição 3 é maior ou igual a 6, se for
        armazena na posição 4 do vetor a situação "Aprovado",
        caso contrário armazene "reprovado".
        </p>
 <pre>
         --------- 
        |Murilo   | 
         --------- 
        |4        |
         --------- 
        |3        |
         --------- 
        |3.5      |
         --------- 
        |Reprovado|
         --------- 
    </pre>

    <p>
        Imprima o vetor utilizando o comando var_dump
    </p>

    <?php
$valores = [];
 $valores[0] = "murilo";
 $valores[1] = 4;
 $valores[2] = 3;
 echo ($valores[1] + $valores[2]) / 2 ;
 echo "<p></p>";

 $notas = [];
    $notas["debora"] = 7;
 echo "Murilo" . $notas['preprovado'];
 ?>
</p>