<h2>Matriz</h2>


<?php
    $produto1 =[
        "nome" => "Notebook",
        "marca" => "dell",
        "preco" => 5000
    ];

    $produto2 =[
        "nome" => "Camera",
        "marca" => "nikon",
        "preco" => 3000
    ];

    $produto3 =[
        "nome" => "Smartphone",
        "marca" => "LG",
        "preco" => 1500
    ];
$tabela = [
    $produto1,
    $produto2,
    $produto3
];

var_dump($tabela);
echo $tabela[1]["marca"];

//json - Javascript Object Notation
echo "<br><br><br><br>";
echo json_encode($tabela);
?>