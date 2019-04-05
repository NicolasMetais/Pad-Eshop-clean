<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
<?php 
while ($data = $response->fetch())
{
?>
    <div class="product">
        <h3>
            <?php echo $data['title'] ?>
        </h3>
        <img src="<?php echo $data['img']?>">
        <p>
            <?php echo $data['price']?>
        </p>
    </div>
<?php
}
?>
<div>
    Voir tout nos produits ici
</div>
</body>
</html>
