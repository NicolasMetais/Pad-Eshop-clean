<?php /*ici j'ai encore un peu de réorganisation a faire, ca arrivera avec le routeur de la page principale. A savoir que toutes ces pages sont une seule et meme page affichée sans rechargement de page \..O../
   |
  . .
 /   \


   */
$bdd = new PDO('mysql:host=localhost;dbname=ecommerce test;charset=utf8', 'root', '');

$response = $bdd->query('SELECT * FROM profil');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>
        <ul id="menuProfile">
            <li>
                <a href="ProfilView.php?action=myself">Myself</a>
            </li>
            <li>
                <a href="ProfilView.php?action=adresses">My Adresses</a>
            </li>
            <li>
                <a href="ProfilView.php?action=orders">My Orders</a>
            </li>
            <li>
                <a href="ProfilView.php?action=paymentoptions">Payment options</a>
            </li>
            <li>
                <a href="ProfilView.php?action=promocode">Promotional Codes</a>
            </li>
        </ul>

<?php require('../Controller/controller.php');

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'myself') {
            mySelf();
        }
        else if ($_GET['action'] == 'adresses') {
            adresses();
        }
        else if ($_GET['action'] == 'orders') {
            orders();
        }
        else if ($_GET['action'] == 'paymentoptions') {
            payOptions();
        }
        else if ($_GET['action'] == 'promocode') {
            promoCode();
        }
        else if ($_GET['action'] == 'admin') {
            Administration();
        }
    } 
?>
</body>
</html>
