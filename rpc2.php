<?php

echo "Bienvenue dans ce jeu de Chifoumi !\nVous jouez contre l'ordinateur.\nMerci de choisir pierre, feuille ou ciseaux.\n";

function test (){ //permet de choisir un nombre au hasard entre 0 et 2
    $numbers = range(0, 2);
    shuffle($numbers);
    foreach ($numbers as $number) {
        return $number;
    }  
}

function getPlayer2() { //assigne le choix du player 2 (ordi)
    $choix = array("pierre", "feuille", "ciseaux");
    $s2 = test();
    return $choix[$s2];
}

function getUsersInput() { //demande au player de choisir pierre feuille ou ciseaux
    $p1 = readline("Player 1 : ");
    $p2 = getPlayer2();
    return array("Player1" => $p1, "Player2" => $p2);
}

function rpc () { //determine qui gagne
    $test = getUsersInput();
    $pfc = array("pierre", "feuille", "ciseaux");
    $p1 = $test["Player1"];
    $p2 = $test["Player2"];

    if (!in_array($p1, $pfc) ||
        !in_array($p2, $pfc)) {
            return "Saisie invalide";
        }
       
    if ($p1 === $p2) {
        echo "Player 2 : ".$p2."\n";
        return "Draw";
    }
    elseif ($p1 === "pierre" && $p2 === "ciseaux" ||
            $p1 === "feuille" && $p2 === "pierre" ||
            $p1 === "ciseaux" && $p2 === "feuille") {
        echo "Player 2 : ".$p2."\n";
        return "Player 1 win";
    }
    else 
    echo "Player 2 : ".$p2."\n";
    return "Player 2 win";
}

echo rpc()."\n";
