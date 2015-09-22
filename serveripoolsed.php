<?php
//$isik = array(
//    "ees" => "Kadri",
//    "pere" => "Mihhailova",
//    "vanus" => 26,
// echo "<p>" . $isik['ees'] . " " . $isik['pere'] . " (" . $isik['vanus'] . ")</p>";);
class Isik
{
    public $persoon = array("ees" => "", "pere" => "", "vanus" => 0, "sugu" => "");

    function Isik($ees, $pere, $vanus, $sugu)
    {

        $this->persoon["ees"] = $ees;
        $this->persoon["pere"] = $pere;
        $this->persoon["vanus"] = $vanus;
        $this->persoon["sugu"] = $sugu;

    }
}

$person = new Isik("Kadri", "Mihhailova", 26, "naine");

echo "<p>" . $person->persoon["ees"] . " " . $person->persoon["pere"] . " (" . $person->persoon["vanus"] . ")</p>";

$vowels = array('A', 'E', 'I', 'O', 'U', 'Õ', 'Ä', 'Ö', 'Ü', 'a', 'e', 'i', 'o', 'u', 'õ', 'ä', 'ö', 'ü');
if (in_array(substr($person->persoon["ees"], 0, 1), $vowels)) {
    $eesnimi_algab_vokaaliga = true;
} else {
    $eesnimi_algab_vokaaliga = false;
}

$floating1 = 1.23;
$floating2 = 2.34;
$float_sum = $floating1 + $floating2;

echo "<p>" . $float_sum . "</p>";

if ($eesnimi_algab_vokaaliga) {
    echo "<p>Nimi algab vokaaliga</p>";
};

//echo $_GET['koer'];
?>
<form action="?" method="post">
    <input name="kass">
    <input type="submit">
</form>

<?php

if ($_POST["kass"]) {
    echo "Kass oli: " . $_POST['kass'];
};
?>










