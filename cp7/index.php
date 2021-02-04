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
  <a class="btn btn-warning btn-lg" href="#" role="button" data-toggle="modal" data-target="#staticBackdrop">Inscription</a>
</div>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Accueil</li>
    <li class="breadcrumb-item"><a href="http://localhost/colombes/cp7/SQL/edit_cat_list.php" aria-current="page">Liste catégories</a></li>
    <li class="breadcrumb-item"><a href="http://localhost/colombes/cp7/SQL/edit_cat_form.php">Edition catégories</a></li>
  </ol>
</nav>

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

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Inscription</h5>
        <form action="register.php" method="post">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="fname">Prénom :</label>
            <input type="text" name="fname" id="fname" pattern="[A-Za-z\U00C0-\U00FF\-' ]" required class="form-control" required>
          </div>
          <div class="form-group">
            <label for="mail">Courriel :</label>
            <input type="email" name="mail" id="mail" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="pass">Mot de passe :</label>
            <input type="password" name="pass" id="pass" pattern="[A-Za-z0-9@$*!? ]{8,}" class="form-control" required>
            <!-- le {8,} veut dire 8 caractère minimum et pas de maximum pour le mot de passe -->
          </div>
          <div class="form-group">
            <label for="check">Vérification du mot de passe :</label>
            <input type="password" name="check" id="pass" pattern="[A-Za-z0-9@$*!? ]{8,}" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="land">Pays :</label>
            <select name="land" id="land" class="form-control">
              <?php
              $json=file_get_contents('https://restcountries.eu/rest/v2/lang/fr?fields=name;alpha2Code');
              $obj=json_decode($json);
              ?>
            </select>
            <?php
            var_dump($obj);
            ?>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        <input type="submit" value="Valider" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>