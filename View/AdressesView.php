<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
while ($data = $query->fetch())
{
?>
    <div class="adresses">
        <p>
            <?php echo $data['adresse1']?>
        </p>
        <p>
            <?php echo $data['adresse2']?>
        </p>
    </div>
<?php
}
?>
</body>
</html>