<?php
//On peut écrire "[]" ou "array()"
$projects = array(
    
"NRJ" => array(
"name"=>"Energies renouvelables",
"budget"=>400000,
"technologies"=> array(
    "web" => array("HTML", "CSS", "JS"),
    "Mobile" => array("React Native")
)
),

"H2O" => array(
    "name"=>"Traitement des eaux usées",
    "budget"=>750000,
    "technologies"=> array(
        "Client riche" => array("Java", "Oracle"),
        "RWD" => array("MangoDB", "Node", "Angular")
    )
    ),

    "RDC" => array(
        "name"=>"Gestion des maraudes restos du coeur",
        "technologies"=> array(
            "Web static" => array("HTML", "CSS", "JS")
        
        )
    )
);
//print_r($projects); //print_r() ou var_dump()

//Génère un tableau HTML affichant le contenu de l'array projects.
$html ='<table class="table table-striped">';
$html .='<thead> <tr> <th>Projets</th> <th>Budget</th> <th>Technologies</th> </tr> </thead><tbody>';

foreach($projects as $key=>$val){
    $html .= '<tr>';
    $html .= '<td>'. $key . '-'. $projects[$key]['name'] .'</td>';
    $html .= '<td>'. (array_key_exists ('budget',$projects[$key])?number_format($projects[$key]['budget'], 2, ',',' ') .'€':'') . '</td>';
    $html .= '<td>';
    foreach($projects[$key]['technologies'] as $key2 => $val2){
        $html .= '<li>' . $key2 . '<ol>';
        foreach($projects[$key]['technologies'][$key2] as $val3){
            $html .= '<li>' . $val3 . '</li>';
        }

        $html .= '</ol> </li>';
    }
    $html .= '</td>';
    $html .= '</tr>';
}

$html .='</tbody></table>';
echo $html;
?>
