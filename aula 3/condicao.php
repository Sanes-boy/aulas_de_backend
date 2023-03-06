<h2>Estrutura de condição</h2>
<hr>
<p>
    A estrutura de condição é utilizada para avaliar qual instrução deve ser executada, dada um condição.
    Se a condição for verdadeira (true) executada a  instrução 1, caso contrário executada a instrução

    <strong>Exemplo</strong>
    <pre>
        if (<em>condição</em>){
            //instrução 1
        }else{
            //instrução 2
        }
    </pre>
</p>
<?php
/*para passar de ano é necessário tirar no minimo 6 pontos em cada disciplina. Murilo tirou.... Ele foi aprovado ou não?*/
$nota_do_murilo = 10;
$faltas= 0;

//      V       V
if($nota-do_murilo >= 6 && faltas <75){
    echo "murilo foi aprovado"
}else{
    echo "murilo foi reprovado"
}
?>
<strong>Exemplo 2</strong>
<p> O aluno para ser aprovado precisa obter 
    nota superior a 6 pontos, para fazer o exame final precisa ter tirado menos que 6 e mais que 3 pontos.
    Notas menores que 3 são recuperações diretas.
</p>

<?php
    $nota = 6;
    if($nota >=6){
        echo"Aprovado"
    }else+{
        echo"Reprovado"
    }