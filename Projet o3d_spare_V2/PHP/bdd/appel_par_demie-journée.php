<?php 

  $title = 'Accueil';
  $currentPage = 'accueil';

  require '../inc/login.php';

        // on pose une question
        $variable = "demieJournee";
        // pour comparer ==
      if($variable == "demieJournee"){
        // alors
  echo "Egal";
}else{
  echo "Different";
}

?>

<h1 class="display-1 text-center my-5">Page d'accueil</h1>


<?php require '../inc/foot.php'; ?>