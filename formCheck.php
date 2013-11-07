<!DOCTUPE html>
<html>
<head>
    <meta charset="UTF-8"/>
</head>

<?php
$pass = $_POST["passField"];

if (preg_match_all ("/[0-9]/", $pass, $arr2) && preg_match_all ("/[a-zA-Z]/", $pass, $arr3)) echo "<h2>В строке есть как минимум одна цифра и одна буква!</h2>";
else echo "<h2>В пароле отсутствует хотя бы одна цифра и/или буква!</h2>";

?>


</html>
