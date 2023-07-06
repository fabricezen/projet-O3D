<?php 

  $title = 'Accueil';
  $currentPage = 'accueil';

  require '../inc/login.php';

    // on pose une question
    $reponse = true;
    if($reponse){
      echo "ajout sur la liste des éleves";
    }else{
      echo "retrait de la liste des éleves";
    }

?>

<h1 class="display-1 text-center my-5">Page d'accueil</h1>


<?php require '../inc/foot.php'; ?>