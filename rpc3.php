<?php
function authorizedShots()
{
    return [
        'pierre',
        'feuille',
        'ciseaux'
    ];
}
/**
 * assigne le choix du player 2 (ordi)
 */
function getPlayer2()
{
    $choix = authorizedShots();
    $s2 = rand(0, 2);
    return $choix[$s2];
}
/**
 * demande au player de choisir pierre feuille ou ciseaux
 */
function getUsersInput()
{
    $p1 = readline('Player 1 : ');
    $p2 = getPlayer2();
    return [
        'Player1' => $p1,
        'Player2' => $p2
    ];
}
/**
 * Lance le jeu et determine qui gagne
 */
function launchGame ()
{
    $userHit = getUsersInput();
    $pfc = authorizedShots();
    $p1 = $userHit['Player1'];
    $p2 = $userHit['Player2'];
    if (!in_array($p1, $pfc) || !in_array($p2, $pfc)) {
        return 'Saisie invalide';
    }
    if ($p1 === $p2) {
        echo 'Player 2 : '.$p2.'\n';
        return 'Draw';
    }
    if ($p1 === 'pierre' && $p2 === 'ciseaux' ||
    $p1 === 'feuille' && $p2 === 'pierre' ||
    $p1 === 'ciseaux' && $p2 === 'feuille') {
        echo 'Player 2 : '.$p2.'\n';
        return 'Player 1 win';
    }
    echo 'Player 2 : '.$p2.'\n';
    return 'Player 2 win';
}
echo 'Bienvenue dans ce jeu de Chifoumi !
Vous jouez contre l\'ordinateur.
Merci de choisir pierre, feuille ou ciseaux';
echo launchGame().'\n';