<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Listy</title>
</head>
<body>
    <h4>Lista</h4>
    <ul>
<li>wielkopolska</li>
<ol>
    <li>Poznań</li>
    <li>Gniezno</li>
    <li>Wągrowiec</li>
</ol>
<li>Dolnoslaskie
    <?php
$city = "Wrocław";
echo "<ol>";
echo "<li> Legnica </li>";
echo "<li> $city</li>";
//echo "</ol>"
    ?>
    <li> Boleslawiec</li>
</ol>
</li>
<li>Kujawsko-pomorskie</li>
</ul>
</body>
</html>