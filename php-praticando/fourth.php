<?php

//criando matriz dos personagens
$personagens = [
    ["id" => 0, "nome" => "Elsword", "classe" => "Lord Knight"],
    ["id" => 1, "nome" => "Elsword", "classe" => "Rune Slayer"],
    ["id" => 2, "nome" => "Elsword", "classe" => "Infinity Sword"],
    ["id" => 3, "nome" => "Aisha", "classe" => "Elemental Master"],
    ["id" => 4, "nome" => "Aisha", "classe" => "Void Princess"],
    ["id" => 5, "nome" => "Aisha", "classe" => "Dimension Witch"]
];

//Cria a função findID, ela precisa de uma Matrizy (personagens) e um valor (id)
function findId($personagens, $id){
    foreach($personagens as $personagem){//divide cada linha de $personagens em um array
        if ($personagem['id'] == $id){
            return $personagem;
        }
    }
    //se não achar a opçao, retorna null
    return null;
}

//recebendo o id da página index
$id = $_POST['id'];

//crio a var personagem que vai receber a função findId
$personagem = findId($personagens, $id);
if (is_null($personagem)){
    echo 'Personagem não encontrado';
    die();
}
//chama o ID do personagem, o nome e a classe
echo "ID: " . $personagem['id'] . " Nome: " . $personagem['nome'] . " Classe: " . $personagem['classe'] . '.<br>';
?>