<?php
//Criando a matriz
$personagens = [//matriz é feita de todos esses arrays
    ["id" => 0, "nome" => "Elsword", "classe" => "Lord Knight"],//array
    ["id" => 1, "nome" => "Elsword", "classe" => "Rune Slayer"],//array
    ["id" => 2, "nome" => "Elsword", "classe" => "Infinity Sword"],//array
    ["id" => 3, "nome" => "Aisha", "classe" => "Elemental Master"],//array
    ["id" => 4, "nome" => "Aisha", "classe" => "Void Princess"],//array
    ["id" => 5, "nome" => "Aisha", "classe" => "Dimension Witch"]//array
];
/*
identificação de elementos da matriz
[0,0], [0,1], [0,2],
[1,0], [1,1], [1,2], 
[2,0], [2,1], [2,2],
*/ 

//Mostrando todo conteúdo do Array, imprimindo todas as propriedade de cada linha, uma de cada vez
echo 'TODAS AS CLASSES: <br><br>';
foreach($personagens as $personagem){
    echo "ID: " . $personagem['id'] . " Nome: " . $personagem['nome'] . " Classe: " . $personagem['classe'] . '.<br>';
}
echo '<br>';

?>