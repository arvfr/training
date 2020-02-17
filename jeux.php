<?php

echo "Premiere etape du jeu\n";

function usage(){
    echo "Vous vous retrouvez devant un Ours bien énervé, que voulez-vous faire ?\n";
    echo "
    [A] => Tu l'affrontes.
    [B] => Tu tentes de fuire.
    [C] => Tu fais le mort.\n";
}

function getUsersInput() { //demande au player de faire un choix
    $step = readline("Je choisi : ");
    return $step;
}

function firstHistory() {
    echo "Après un combat acharné, vous vous en sortez avec de multiples contusions. L'ours se met à pleurer et vous explique qu'il se sent seul. Que faites-vous ?
    [A] => Tu le console
    [B] => Tu lui dis que c'est bien fait
    [C] => Tu te mets à pleurer toi aussi\n";
    $response = getUsersInput();
    if ($response == 'A') {
        echo "L'ours décide de t'épargner\n";
        return;
    } 
    
    elseif ($response == 'B') {
        echo "L'ours s'enerve encore plus et décide de te tuer. Du coup, tu es mort.\n";
        return;
    }
    elseif ($response == 'C') {
        $random = rand(0, 1);
        if ($random == 0) {
            echo "L'ours s'enerve encore plus et décide de te tuer. Du coup, tu es mort.\n"; 
            return;
        }
        echo "L'ours décide de t'épargner\n";
        return;
    }
}

function secondHistory() {
    echo "Texte deuxième histoire\n";
}

function thirdHistory() {
    echo "Texte troisième histoire\n";
}

function getHistoryByUserInput() {
    $response = getUsersInput();
    switch ($response) {
        case 'A':
            firstHistory();
        break;

        case 'B':
            secondHistory();
        break;

        case 'C':
            thirdHistory();
        break;
        
        
        default:
            echo "Saisie invalide\n";
        break;
    }
    // getHistoryByUserInput();
}
usage();
getHistoryByUserInput();