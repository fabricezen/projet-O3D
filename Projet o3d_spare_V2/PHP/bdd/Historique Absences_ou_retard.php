<?php 

  $title = 'Accueil';
  $currentPage = 'accueil';

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