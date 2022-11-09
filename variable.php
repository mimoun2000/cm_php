<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon cours php</title>
</head>
<body>
<nav>
        <ul>
            <li>  <a href="index.php">hom</a></li>
            <li>  <a href="variable.php">variable</a></li>
            <li>  <a href="constante.php">constante</a></li>

        </ul>
    </nav>
    <h1>
   <?php 
echo "bonjour tout le monde";
// commentaire
# commentaire
/*commentaire
ligne 1
ligne 2
*/
echo "<hr>";// 
$a = 2;
$nom = "mimoun";
$x =2.6;
echo $a . "<br>";

echo $nom . "  ";

echo $x . "<br>";
$nom_complet= "mimoun    " .  "kardous" ;
echo $nom_complet;
$a = 34;
echo "<br>"  . $a . "<br>";


   ?>
   </h1>
</body>
</html>