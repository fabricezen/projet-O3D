<?php

$eleves = [
    [
    'id' => 1,
    'name' => 'ADAM Noemie',
    'email' => 'noemie.adam@hotmail.fr',
    'classe' => 'Cine 4',
    'pwd' => 'mdp1',
    'role' => 'eleve',
    'enabled' => true,
    
    ],

    [
    'id' => 2,
    'name' => 'ALBRECHT Hippolyte',
    'email' => 'hippolyte.albrecht@gmail.com',
    'classe' => '3D1 B',
    'pwd' => 'mdp2',
    'role' => 'eleve',
    'enabled' => true,
    ],

    [
    'id' => 3,
    'name' => 'ALZUYETTA Baptiste',
    'email' => 'b.alzuyeta@gmail.com',
    'classe' => 'Cine 2',
    'pwd' => 'mdp3',
    'role' => 'eleve',
    'enabled' => true,
    ],

    [
    'id' => 4,
    'name' => 'ANGENAULT Stéphane',
    'email' => 'angenault.stephane@gmail.com',
    'classe' => 'Game 2',
    'pwd' => 'mdp4',
    'role' => 'eleve',
    'enabled' => true,
    ],

    [
    'id' => 5,
    'name' => 'ARGENTIERI Olivier',
    'email' => 'olivierargentier@gmail.fr',
    'classe' => 'Game Prog 2',
    'pwd' => 'mdp5',
    'role' => 'eleve',
    'enabled' => true,
    ],

    [
    'id' => 6,
    'name' => 'AUGUSTE Aymeric',
    'email' => 'aymeric.auguste@sfr.fr',
    'classe' => 'GRAPH G4',
    'pwd' => 'mdp6',
    'role' => 'eleve',
    'enabled' => true,
    ],

    [
    'id' => 7,
    'name' => 'AUPEIX Florent',
    'email' => 'florent.aupeix@gmail.fr',
    'classe' => '3D1 B',
    'pwd' => 'mdp7',
    'role' => 'eleve',
    'enabled' => true,
    ],

    [
    'id' => 8,
    'name' => 'AUSTEN Morgan',
    'email' => 'austen.morgan95@gmail.fr',
    'classe' => 'Game 2',
    'pwd' => 'mdp8',
    'role' => 'eleve',
    'enabled' => true,
    ],

    [
        'id' => 9,
        'name' => 'BANAK Alexis',
        'email' => 'alexis.banak@gmail.com',
        'classe' => 'GRAPH G4',
        'pwd' => 'mdp9',
        'role' => 'eleve',
        'enabled' => true,
    ],

];

// $eleve['name'] = 'ADAM Noemie';
// $eleve['email'] = 'noemie.adam@hotmail.fr';
// $eleve['classe'] = 'Cine 4';
// $eleve['pwd'] = 'mdp1';
// $eleve['role'] = 'eleve';
// $eleve['enable'] = true;

// foreach ($eleve as $value){
//     echo $value;
// }

// $eleve = [
//     'id' => 1,
//     'name' => 'ADAM Noemie',
//     'email' => 'noemie.adam@hotmail.fr',
//     'classe' => 'Cine 4',
//     'pwd' => 'mdp1',
//     'role' => 'eleve',
//     'enabled' => true,
// ];

// echo $eleve[''];

// foreach ($eleve as $value){
//     echo $value;
// }


// affectation des éleves selon leur classe
foreach($eleves as $eleve) {
    echo $eleve['name'] . 'qui est affecté à cette classe : '. $eleve['classe'] . PHP_EOL;
}

// Toutefois, avec cet exemple, on ne récupère que la valeur. 
// Or, on peut aussi récupérer la clé de l'élément. On doit dans ce cas écrire foreach,comme ceci :

foreach($eleve as $property => $propertyValue){
    echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
}

// Cette commande a toutefois un défaut : elle ne renvoie pas de code HTML comme <br /> pour les retours à la ligne.
// Pour bien les voir, il faut donc utiliser la balise HTML <pre>  qui nous permet d'avoir un affichage plus correct.

echo '<pre>';
print_r($eleve);
echo '</pre>';
// => FONCTIONNE pas

// Vérifiez si une clé existe dans un tableau avec array_key_exists

if (array_key_exists('name', $eleve)) {
    echo 'la clé "name" se trouve dans cette liste !';
}

?>

<h1>DEBUG</h1>
<pre>
<?php var_dump($eleve)?>

</pre> 

