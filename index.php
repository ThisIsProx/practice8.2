<HTML lang="en">
<HEAD>
    <TITLE>«Суперглобальні змінні PHP</TITLE>
</HEAD>
<BODY>
<h2>Метод Get</h2>
<form method="get" action = "">
    <label>
        enter a <input type="text" name="a">
    </label>
    <label>
        enter b <input type="text" name="b">
    </label>
    <input type="submit" value="обрахувати">
</form>

<?php
$a=$_GET["a"];
$b=$_GET["b"];
echo "сума get = ", $a + $b. "<br>";
echo "різниця get = ", $a - $b. "<br>";
echo "добуток get = ", $a * $b. "<br>";
echo "частка get = ", $a / $b. "<br>";
?>
</BODY>
</HTML>
