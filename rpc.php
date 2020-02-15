<?php 

function getUsersInput() {
    $p1 = readline("Player 1 : ");
    $p2 = readline("Player 2 : ");
    return array("Player1" => $p1, "Player2" => $p2);
}

function rpc () {
    $test = getUsersInput();
    $pfc = array("pierre", "feuille", "ciseaux");
    $p1 = $test["Player1"];
    $p2 = $test["Player2"];

    if (!in_array($p1, $pfc) ||
        !in_array($p2, $pfc)) {
            return "Saisie invalide";
        }
       
    if ($p1 === $p2) {
        return "Draw";
    }
    elseif ($p1 === "pierre" && $p2 === "ciseaux" ||
            $p1 === "feuille" && $p2 === "pierre" ||
            $p1 === "ciseaux" && $p2 === "feuille") {
        return "Player 1 win";
    }
    else return "Player 2 win";
}

echo rpc()."\n";
