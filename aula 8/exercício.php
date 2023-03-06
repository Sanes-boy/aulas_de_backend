<h2>Ordenação - Ordem Alfabetica</h2>
<?php
$nomes = [
    "Murilo",
    "Poliana",
    "Dalva",
    "Lavinha",
    "Camila",
    "Kaua"
];
for($c=0; $c<=5; $c++)
for($i = $c + 1;$i<=5; $i++){
if($nomes[0] < $nomes[1]){
 $celBranco = $nomes[2];
 $nomes[2] = $nomes[0];
 $nomes[0] = $celBranco;
} 
}
    var_dump($nomes);
//Camila, dalva, kaua,, lavinia, murilo, poliana