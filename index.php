<!doctype html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Mihhailova</title>
</head>
<body>
<?php

$page = (!empty($_GET['page']) ? $_GET['page'] : 'home');

?>


<form action="index.php?" method="get">
    <input name="page">
    <input type="submit">
</form>

<?php

require($page . '.php');

?>

</body>
</html>