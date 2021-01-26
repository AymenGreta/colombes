<?php
define("PERSONNE","Aymen");
echo PERSONNE;
?>

<?php
$dateEntrée = "2-11-2020";
$dateAujourdhui = date("d-m-Y");
$diff = date_diff(date_create($dateEntrée), date_create($dateAujourdhui));
echo "La date d'entrée est" . $diff;
?>


<?php
if ($members[$i][3]== true && $members[$i][2]== "M")
echo ('Marié');
else 
echo ('Mariée');
?>

$html .=' <p class="card-text">'. $members[$i][3];
    if ($members[$i][3]== true && $members[$i][2]== "M"){
    echo ('Marié');
    }else{
    echo ('Mariée');
     }; 
     '<p>';
