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

$kadri = new Isik;

$eesnimi_algab_vokaaliga = false;

echo "<p>" . $kadri->ees . " " . $kadri->pere . " (" . $kadri->vanus . ")</p>";

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};


?>