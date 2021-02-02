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
  
/**
 * Batterie de test pour la fonction TTC
 */

 echo '<p>  Batterie de test pour la fonction TTC </p>';
 echo '<p> Test 8 : ' . TTC(100.0);
 echo '<p> Test 9 : '. TTC(100.0, .34);
 echo '<p> Test 10 : '. TTC(100.0, .055);
 echo '<p> Test 11 : '. TTC('toto', .1);
 echo '<p> Test 12 : '. TTC(100, 'tata');


 /**
  * Batterie de test pour la fonction generatePassword() 
  */

  echo '<p> Batterie de test pour la fonction generatePassword()';
  echo '<p> Test 13 : ' . generatePassword();
  echo '<p> Test 14 : ' . generatePassword(18);
  echo '<p> Test 15 : ' . generatePassword(5);

  /**
  * Batterie de test pour la fonction generatePassword2() 
  */

  echo '<p> Batterie de test pour la fonction generatePassword2()';
  echo '<p> Test 16 : ' . generatePassword2();
  echo '<p> Test 17 : ' . generatePassword2(18);
  echo '<p> Test 18 : ' . generatePassword2(5);
  echo '<p> Test 19 : ' . generatePassword2(70);

  /**
  * Batterie de test pour la fonction average()
  */
  echo '<p> Batterie de test pour la fonction average()';
  echo '<p> Test 24 : ' . average(10,20,30);
  echo '<p> Test 25 : ' . average(rand(1,9), rand(10,99), rand(100,999));
  echo '<p> Test 26 : ' . average(10, '20', '2020-11-02', 'toto fait du velo');
  echo '<p> Test 27 : ' . average(10,array(20,30));
  echo '<p> Test 28 : ' . average(10,20,30);
?>   
