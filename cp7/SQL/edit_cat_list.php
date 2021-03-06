<?php
// Récupère la page active si exite
if (isset($_GET['pg']) && !empty($_GET['pg'])){
  $pg = (int) $_GET['pg'];
}else{
  $pg = 1;
}
// Récupère le nombre de lignes actif si existe
if (isset($_GET['nb']) && !empty($_GET['nb'])){
  $nb = (int) $_GET['nb'];
}else{
  $nb = 5;
}
// Ouvre la BDD en MYSQLI
$start = ($pg-1)*$nb;
$cnn=mysqli_connect('localhost', 'root', 'greta', 'northwind');
$res=mysqli_query($cnn, "SELECT * FROM categories LIMIT {$start}, {$nb}");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Northwind Traders</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
</head>

<body class="container">
<section class="test"></section>
<h1>Liste des catégories</h1>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="http://localhost/colombes/cp7/index.php">Accueil</a></li>
    <li class="breadcrumb-item active" aria-current="page">Liste catégories</li>
    <li class="breadcrumb-item"><a href="http://localhost/colombes/cp7/SQL/edit_cat_form.php">Edition catégories</a></li>
  </ol>
</nav>

<a href="edit_cat_form.php" class="btn btn-primary">Ajouter une catégorie</a>

  <table class="table table-dark table-striped">

  <thead>
    <tr>
    <?php
    // Liste des colonnesid="lol"
    $html='';
    while($col = mysqli_fetch_field($res)){
      $html .="<th>{$col-> name}</th>";

    }
    echo $html;
    ?>
    </tr>
  </thead>

  <tbody>
  <?php
  // Liste les data 
  $html="";
  while ($row = mysqli_fetch_row($res)){
    $html.="<tr>";
    foreach($row as $key => $val){
      // Lien si 1ère colonne
      if($key===0){
        $html .='<td><a href="edit_cat_form.php?k='.$val.'">'.$val.'</a></td>';
      }
      // Si ce n'est pas du BLOB
      if(strpos($val, ';base64,')){
        $html.='<td><img src="' .$val.'"/></td>';
      }else{
        $html.="<td>{$val}</td>";
      }
     
    }
    $html.="</tr>";
  }
  echo $html;
  ?>
  </tbody>
  </table>
  <nav>
    <ul class="pagination justify-content-center">
        <?php
        // Calcule la pagination 
        $res=mysqli_query($cnn,"SELECT COUNT(*) AS total FROM categories");
        $row=mysqli_fetch_assoc($res);
        $pgs=ceil($row['total']/$nb);
        // Affiche la pagination
        $html='';
        for($i=1; $i<=$pgs; $i++){
          $href=$_SERVER['PHP_SELF'].'?pg='.$i.'&nb='.$nb;
          $html .= '<li class = "page-item '.($pg===$i?'active':'').'"><a class="page-link" href="'.$href.'">'.$i.'</a></li>';
        }
        echo $html;
        mysqli_close($cnn);
        ?>
    </ul>
  </nav>
  
</body>
</html>
