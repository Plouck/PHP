<!-- <?php
  $chambre_est_sale = true ;

  if ($chambre_est_sale == true) {
    echo "Range ta chambre, on dirait la cage d'un bonobo!";}
  else {
    echo "Ta chambre est trop propre, vis un peu!";
  }
 ?> -->

 <!-- <?php
   $chambre_est_sale = "dégoutante" ;

   if ($chambre_est_sale == "dégoutante") {
     echo "Ta chembre est dégoutante.";
   }
   elseif ($chambre_est_sale == "sale") {
     echo "Ta chambre est sale.";
   }
   elseif ($chambre_est_sale == "en ordre") {
     echo "Ta chambre est en ordre.";
   }
   elseif ($chambre_est_sale == "immaculée") {
     echo "Ta chambre est immaculée.";
   }
   else {
     echo "T'es un maniaque mec !!!";
   }
  ?> -->

<!-- <?php
  $time_h = 14;
  $time_m = 52;

  if ($time_h >= 5 and $time_h <= 9) {
    echo "Bonjour!";
  }
  elseif ($time_h > 9 and $time_h <= 12) {
    echo "Bonne journée!";
  }
  elseif ($time_h > 12 and $time_h <= 16) {
    echo "Bon après-midi!";
  }
  elseif ($time_h > 16 and $time_h <= 21) {
    echo "Bonne soirée!";
  }
  else {
    echo"Bonne nuit!";
  }

 ?> -->

<!-- <?php
 $age=$_POST["Age"];
 $sexe = $_POST ["gender"];
 $langue = $_POST["langue"];

if ($langue == "french") {
  if ($sexe == "homme") {

    if($age<12){
      $verdict='Salut petit!';
    }
    elseif($age<18){
      $verdict="Salut l'ado!";
    }
    elseif($age<115){
      $verdict="Salut l'adulte!";
    }
    else{
      $verdict='Wow! Toujours vivant?';
    }
  }
   else {
    if($age<12){
      $verdict='Salut petite!';
    }
    elseif($age<18){
      $verdict="Salut l'adolescente!";
    }
    elseif($age<115){
      $verdict="Salut l'adulte!";
    }
    else{
      $verdict='Wow! Toujours vivante?';
    }
 }
}
  else {
    if ($sexe == "homme") {

      if($age<12){
        $verdict='hi boy!';
      }
      elseif($age<18){
        $verdict="hi teenagers";
      }
      elseif($age<115){
        $verdict="hi mister";
      }
      else{
        $verdict='Wow! are you alive ?';
      }
    }
     else {
      if($age<12){
        $verdict='hi girl!';
      }
      elseif($age<18){
        $verdict="hi teenagerse";
      }
      elseif($age<115){
        $verdict="hi lady!";
      }
      else{
        $verdict='Wow! are you alive?';
      }
   }
  }
  echo $verdict;
?> -->

<!-- <?php
 $note=$_POST["note"];

 if ($note <= 3) {
   $resultat = "Ce travail est nul.";
 }
 elseif ($note >= 6 and $note <= 9 ) {
   $resultat = "Ce travail n'est pas terrible.";
 }
 elseif ($note == 10 ) {
   $resultat = "Tout juste!";
 }
 elseif ($note >= 11 and $note <= 14 ) {
   $resultat = "C'est pas mal.";
 }
 elseif ($note >= 15 and $note <= 18 ) {
   $resultat = "Bravo!";
 }
 elseif ($note == 19 or $note == 20) {
   $resultat = "Police! Arrêtez ce tricheur!";
 }
 else {
   $resultat = "ERREUR";
 }
echo $resultat;
?> -->


<?php
$age=$_POST["Age"];
$sexe = $_POST ["gender"];

$resultat ="Désolé, vous ne remplissez pas les critères de sélection.";

if ($age >=21 and $age <= 40 and $sexe == "femme") {
  $resultat = "Bonjour, bienvenue parmi nous!";
}
echo $resultat;
 ?>
