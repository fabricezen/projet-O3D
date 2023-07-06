<!-- Documentation PHP sur les fonctions :
https://www.php.net/manual/fr/funcref.php 

aperçu de ce que peuvent vous permettre de faire des fonctions PHP :

str_replace pour rechercher et remplacer des mots dans une variable ;

move_uploaded_file pour envoyer un fichier sur un serveur ;

imagecreate pour créer des images miniatures (aussi appelées "thumbnails") ;

mail pour envoyer un mail avec PHP (très pratique pour faire une newsletter) ;

de nombreuses options pour modifier des images, y écrire du texte, tracer des lignes, des rectangles, etc. ;

crypt pour chiffrer des mots de passe ;

date  pour renvoyer l'heure, la date, etc.




strlen pour calculer la longueur d'une chaîne de caractères ;

str_replace pour rechercher et remplacer une chaîne de caractères ;

sprintf pour formater une chaîne de caractères.
-->

<?php

// https://www.youtube.com/watch?v=iRVcXRhKW3U

function additionner ($nb1, $nb2){
    // echo $nb1 + $nb2;
    return $nb1 + $nb2;
    // return sort de la fonction et cloture, pas d'echo ne s'affichera après
}

function saluer($prénom, $nom, $salutation = "Hello"){
    echo "$salutation, $prénom, $nom";
}

$total = additionner (18 , 8);
var_dump($total);

?>



<h1><?php saluer("Fabrice , PEZAIRE", "") ?></h1>

<!-- // allowEleve([
//     'id' => 1,
//     'name' => 'ADAM Noemie',
//     'email' => 'noemie.adam@hotmail.fr',
//     'classe' => 'Cine 4',
//     'pwd' => 'mdp1',
//     'role' => 'eleve',
//     'is_enabled' => true,
// ]); -->

