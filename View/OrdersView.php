<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
while ($data = $query->fetch())
{
?>
    <div class="Orders">
        <p>
            <?php echo $data['produit']?>
        </p>
        <p>
            <?php echo $data['date achat']?>
        </p>
        <p>
            <?php echo $data['date arrivée']?>
        </p>
    </div>
<?php
}
?>
</body>
</html>