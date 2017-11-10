<<?php

include 'parameters.yml';

$bdd = mysqli_connect(database_host, database_user, database_password, database_name);

$cookie_id='id';
if (isset($_GET['id']) & $_GET['id_jouet']) {
    $quantite_construit="0";
    $quantite_a_construire=mysqli_query($bb, 'SELECT quantite from jouet where id_jouet=$id_jouet');
    $_COOKIE = $_GET['id'];
    setcookie($cookie_id, $_COOKIE, time() + (86400 * 30), "/");
    while($donnees = mysqli_fetch_assoc($quantite)) {
    $quantite_a_construire--;
    $quantite_construit=++;
  }
}

?>
