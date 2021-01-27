<?php
/**
 * Batterie de tests pour la fonction age()
 */

 require_once('functions.php');
 echo '<p> Test 1 :'. age('12/31/2005', '1997-05-14');
 echo '<p> Test 2 :'. age(123456, 987654);
 echo '<p> Test 3 :'. age('Toto', 'aime les gâteaux');

 /**
  * Batterie de test pour la fonction is_date()
  */
  echo '<p> Test 4 :'. is_date('12/31/2005', '1997-05-14');
  echo '<p> Test 5 :'. is_date('Toto aime le coco');
  echo '<p> Test 6 :'. is_date(123456789);
  echo '<p> Test 7 :'. is_date('25/02/2021');
  

?>
