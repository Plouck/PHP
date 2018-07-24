<?php
 $note=$_POST["note"];

 switch ($note) {
     case "0":
     case '1':
     case '2':
     case '3':
       $resultat = "Ce travail est nul.";
       break;
     case "4":
     case '5':
       break;
     case "6":
     case '7':
     case '8':
     case '9':
       $resultat = "Ce travail n'est pas terrible.";
       break;
     case '10':
       $resultat = "Tout juste!";
       break;
     case '11':
     case '12':
     case '13':
     case '14':
       $resultat = "C'est pas mal.";
       break;
     case '15':
     case '16':
     case '17':
     case '18':
       $resultat = "Bravo!";
       break;
     case '19':
     case '20':
       $resultat = "Police! Arrêtez ce tricheur!";
       break;
 }
 echo $resultat;
 ?>
