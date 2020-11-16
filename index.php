<!DOCTYPE html>
<html>
<head>
	<title>XSS opdracht</title>
</head>
<body>
 		<form method='POST' action="index.php">
            <input type='text' name='zoeken' placeholder='Zoekopdracht'>
            <input type='submit' name='zoek' value='Zoek'>
        </form>
</body>
</html>

<?php
if (isset($_POST["zoek"])) {
    if (!empty($_POST['zoeken'])) {
    echo "De zoekopdracht is: " . $_POST["zoeken"] . "<br/>";
    echo "Geen resultaat gevonden!";

    }
}
?>
