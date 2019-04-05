<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
while ($data = $query->fetch())
{
?>
    <div class="product">
        <h3>
            <?php echo $data['pseudo'] ?>
        </h3>
        <p>
            <?php echo $data['lastname']?>
        </p>
        <p>
            <?php echo $data['firstname']?>
        </p>
        <p>
            <?php echo $data['Email']?>
        </p>
    </div>
<?php
}
?>
</body>
</html>