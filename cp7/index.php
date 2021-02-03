<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nothwind Traders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    
</head>
<body class="container">
<div class="jumbotron">
  <h1 class="display-4">Northwid Traders</h1>
  <p class="lead">
  Projet fil rouge en HTML, CSS, JavaScript, PHP et MySQL basé sur le jeu de données Northwind. 
<?php
include_once('team.php');
$diff=(strtotime(date('Y-m-d'))-strtotime('2020-11-02'))/60/60/24; // Divisé par 60 secondes, Divisé par 60 minutes, Divisé par 24h.
  echo'Développé par ' .PRENOM. ', Darons codeurs depuis ' .$diff. ' jours.';
?>
  </p>
  <hr class="my-4">
  <p>Cliquez sur le bouton ci dessous pour accéder au back-office (user et mot de passe requis) :</p>
  <a class="btn btn-success btn-lg" href="#" role="button">Connexion</a>
</div>

<h2>Membres de l'équipe</h2>
<section id="team" class="d-flex flex-wrap justify-content-around">
<?php 
$html='';
for($i=0; $i<count($members); $i++){
    $html .='<div class="card mb-3  '.($members[$i][2]=== 'F'?'girl':'boy').' " style="width: 18rem;">';
    $html .='<div class="card-body">';
    $html .='<h5 class="card-title">'.$members[$i][0]. '</h5>';
    $html .='<p class="card-text">'. $members[$i][1]. ' ans</p>';
    // C'est un opérateur ternaire, le ":" sert à comparer les deux et le "?" à dire qu'on est en mode opérateur ternaire.
    $html .='<p class="card-text">' .($members[$i][3]?($members[$i][2] ==='F'? 'Mariée':'Marié'):'Célibataire'). '<p>';
    $html .='</div> </div>';
}
echo $html;
?>
</section>

<h2>Nos références</h2>
<section id="projects">
    <?php include_once('projects.php');

    ?>
</section>
<div id="bo">
<h2>Back Office</h2>
<section id="tables">
<?php
$cnn = mysqli_connect('localhost', 'root', 'greta', 'information_schema');
$res = mysqli_query($cnn, "select table_name, table_rows from information_schema.tables where table_schema = 'northwind'");
$html='';
while ($row = mysqli_fetch_assoc($res)){
  $html .= '<a class = "btn btn-info" href="' .$row['TABLE_NAME'] . '">' . $row['TABLE_NAME'] . '<span class="badge badge-light">' . $row['TABLE_ROWS'] . '</span></a>';
};
echo $html;
mysqli_close($cnn);
?>
</section>
</div>
</div>
</div>
</body>
</html>