<?php
$isik = array(
    "ees" => "Kadri",
    "pere" => "Mihhailova",
    "vanus" => 26,
);

$eesnimi_algab_vokaaliga = false;

echo "<p>" . $isik['ees'] . " " . $isik['pere'] . " (" . $isik['vanus'] . ")</p>";

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};


?>