<?php

$result = 0;
//tableau d'erreur
$error = array();
//vérification si chiffre1 et si chiffre 2 existe !! 
if (isset($_GET['chiffre1']) && isset($_GET['chiffre2'])) {
    //initialisation de chiffre1 
    $chiffre1 = htmlspecialchars($_GET['chiffre1']);
    //initialisation de chiffre2
    $chiffre2 = htmlspecialchars($_GET['chiffre2']);
    if (!is_numeric($chiffre1)) {
        //erreur pour le champs n°1
        $error[] = sprintf('La valeur %s n\'est pas un nombre', $chiffre1);
    }
    if (!is_numeric($chiffre2)) {
        //erreur pour le champs n°2
        $error[] = sprintf('La valeur %s n\'est pas un nombre', $chiffre2);
    }
    if (count($error) == 0) {
        //vérification si on choisi l'addition puis affiché le resultat
        if (isset($_GET['addition'])) {
            $result = $chiffre1 + $chiffre2;
            //vérification si on choisi la soustraction puis affiché le resultat
        } elseif (isset($_GET['soustraction'])) {
            $result = $chiffre1 - $chiffre2;
            //vérification si on choisi multiplication puis affiché le resultat
        } elseif (isset($_GET['multiplication'])) {
            $result = $chiffre1 * $chiffre2;
            //vérification si on choisi la division puis affiché le resultat
        } elseif (isset($_GET['division'])) {
            if ($chiffre2 == 0) {
                $result = null;
            } else {
                $result = $chiffre1 / $chiffre2;
            }
            //bouton reset
        } elseif (isset($_GET['reset'])) {
            $result = null;
        }
    }
}
