<?php
//On peut écrire "[]" ou "array()"
$projects = array(
    
"NRJ" => array(
"name"=>"Energies renouvelables",
"budget"=>"400 000 euros",
"technologies"=> array(
    "web" => array("HTML", "CSS", "JS"),
    "Mobile" => array("React Native")
)
),

"H2O" => array(
    "name"=>"Traitement des eaux usées",
    "budget"=>"750 000 euros",
    "technologies"=> array(
        "Client riche" => array("Java", "Oracle"),
        "RWD" => array("MangoDB", "Node", "Angular")
    )
    ),

    "RDC" => array(
        "name"=>"Gestion des maraudes restos du coeur",
        "Web static"=> array(
            "Client riche" => array("HTML", "CSS", "JS"),
        )
        ) 




);
//print_r($projects); //print_r() ou var_dump()
?>

<?php

//Génère un tableau HTML affichant le contenu de l'array projects.
$html ='<table class="table table-striped">';
$html .='<thead> <tr> <th>Projets</th> <th>Budget</th> <th>Technologies</th> </tr> </thead>';

foreach ($projects as $key=>$val){
    $html .= '<tr>';
    $html .= '<td>'.$key. '-'.$projects[$key]['name'] .'</td>';
    $html .= '<td>'.(array_key_exists('budget',$projects[$key])?$projects[$key]['budget']:'') .'</td>';
    $html .= '<td> <ul>';
    foreach ($projects[$key]['technologies'] as $key2=>$val2){
        $html .= '<li>' .$key2. '<ol>';
        foreach ($projects[$key]['technologies'][$key2] as $val3) {
            $html .= '<li>' .$val3.'</li>';
        }
        $html .= '</ol> </li>';
    }
    $html .= '</ul> </td>';
    $html .= '</tr>';
}

$html .='</tbody></table>';
echo $html;
?>
