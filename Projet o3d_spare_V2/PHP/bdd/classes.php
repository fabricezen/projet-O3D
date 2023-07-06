<?php 

  $title = 'Accueil';
  $currentPage = 'accueil';

  require '../inc/login.php';


  $eleve = "ADAM Noemie";
  $classes = "Cine4";

  switch($eleve && $classes){
    case "Cine4":
      echo "eleve Enregistré";
      break;
    case "Cine2":
      echo "Pas dans cette classe";
      break;
    case "Cine3":
      echo "Pas dans cette classe";
      break;
    case "Game2":
       echo "Pas dans cette classe";
      break;
    case "Game3":
        echo "Pas dans cette classe";
      break;
    case "Game4":
        echo "Pas dans cette classe";
      break;
      case "3D1 A":
        echo "Pas dans cette classe";
        break;
      case "3D1 B":
        echo "Pas dans cette classe";
        break;
      case "Game Prog 2":
        echo "Pas dans cette classe";
        break;
      case "Game Prog 3":
        echo "Pas dans cette classe";
        break;
        case "Game Prog 1":
        echo "Pas dans cette classe";
          break;
        case "Anim":
          echo "Pas dans cette classe";
          break;
        case "Design":
          echo "Pas dans cette classe";
          break;
        case "GRAPH G4":
          echo "Pas dans cette classe";
          break;
        case "GRAPH G3":
          echo "Pas dans cette classe";
          break;
  }


?>

<h1 class="display-1 text-center my-5">Page d'accueil</h1>


<?php require '../inc/foot.php'; ?>

