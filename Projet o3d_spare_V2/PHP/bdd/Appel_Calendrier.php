<?php 

//   $title = 'Accueil';
//   $currentPage = 'accueil';

$eleve [] = 'ADAM Noemie';
$eleve [] = 'ALBRECHT Hippolyte';
$eleve [] = 'ALZUYETTA Baptiste';
$eleve [] = 'ANGENAULT Stéphane';
$eleve [] = 'ARGENTIERI Olivier';
$eleve [] = 'AUGUSTE Aymeric';
$eleve [] = 'AUPEIX Florent';
$eleve [] = 'AUSTEN Morgan';
$eleve [] = 'BANAK Alexis';
$eleves [] = '';

echo $eleve[2];



  require '../inc/login.php';

      // on pose une question
$reponse = true;
if($reponse == true){
  echo "présent";
}else{
  echo "absent";
}

?>

<h1 class="display-1 text-center my-5">Page d'accueil</h1>


<?php require '../inc/foot.php'; ?>

<h1>DEBUG</h1>
<pre>
<?php var_dump($eleve)?>

</pre> 

