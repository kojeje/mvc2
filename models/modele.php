<?php

function connexion_serveur_bd($serveur, $id, $mdp, $bd) {
  $id_connexion = mysqli_connect($serveur, $id, $mdp);
  mysqli_select_db($id_connexion,$bd);
  
  return $id_connexion;
}
 
function deconnexion_serveur_bd($id_connexion) {
  mysqli_close($id_connexion);
}

function set_utf8_bd($id_connexion) {
  mysqli_set_charset($id_connexion, 'utf8');
}
 
function requete_bd($requete, $id_connexion) { 
  return mysqli_query($id_connexion,$requete);
}
 
function resultats_fetch_assoc($resultats) {
  return mysqli_fetch_assoc($resultats);
}

?>