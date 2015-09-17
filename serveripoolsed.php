<?php
//$isik = array(
//    "ees" => "Kadri",
//    "pere" => "Mihhailova",
//    "vanus" => 26,
// echo "<p>" . $isik['ees'] . " " . $isik['pere'] . " (" . $isik['vanus'] . ")</p>";);
class Isik
{
    var $ees = "Kadri";
    var $pere = "Mihhailova";
    var $vanus = 26;
    var $sugu = "naine";
}

$person = new Isik;

$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($person->ees, 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}


echo "<p>" . $person->ees . " " . $person->pere . " (" . $person->vanus . ")</p>";

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};


?>