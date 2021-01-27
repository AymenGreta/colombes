<?php
/**
 * Renvoie l'âge en années entre deux dates passées en paramètres
 * @param {string} $date1 - une date ('dd/mm/yyyy' ou 'yyyy-mm-dd')
 * @param {string} $date2 - une autre date ('dd/mm/yyyy' ou 'yyyy-mm-dd')
 * @return {int} âge en années
 */

 //Différence entre les deux dates en années (arrondi à l'entier inférieur).

function age($date1, $date2) : int {     // le "int" est uniquement pour le return 

    //Teste si les arguments sont bien des dates
    if(!is_date($date1) || !is_date($date2)) {
        trigger_error('L\' un des arguments n\'est pas une date',E_USER_ERROR);
    }

    //Transforme les dates de string en timestamp
    $d1=strtotime($date1);
    $d2=strtotime($date2);

    //Cherche la date la plus forte vs la date la plus faible 
    if ($d1>$d2){
        $diff = $d1 - $d2;
    }elseif ($d2 > $d1) {
        $diff = $d2 - $d1;
    }else{
        $diff = 0;
    }
    
    //Renvoie le résultat 
    return floor($diff /60 /60 /24 / 365.25);

} 

/**
 * Renvoie true si la chaine passée en paramètres est une date
 * @param {string} $arg - argument à tster 
 * @return {boolean} 
 */

function is_date($arg) : bool {
    return (bool) strtotime($arg);

}

//Ecrire la fonction TTC qui convertit un montant HT en TTC avec 2 arguments.

/**
 * Renvoie un montant TTC à partir d'un montant HT et d'un taux de TV passés en paramètres
 * @param {float} $mt - montant positif
 * @param {float} $taux - taux valant : 0.021, 0.055, 0.1, 0.2
 * taux normal : 20%
 * taux intermédiaire 10%
 * taux réduit 5.5%
 * taux particulier 2.1%
 * @return {float}
 */
function TTC($mt, $taux=.02): float 
{
    
    if (!is_float($mt) && $mt < 0){ // Le "!" avant le is_float, c'est pour dire " si ce n'est pas un float" 
        trigger_error("Veuillez saisir un montant HT positif",E_USER_ERROR);

    }elseif (!in_array($taux, $corrects, true)){
        trigger_error("Le taux doit être : " .implode(',', $corrects), E_USER_WARNING);
    }else {
        return $mt * (1 + $taux);
    }
}
?>