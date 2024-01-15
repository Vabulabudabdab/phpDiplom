<?php include __DIR__.'/dbTEST.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form enctype="multipart/form-data" action="test.php" method="POST">
    Отправить этот файл: <input name="file" type="file" />
    <input type="submit" value="Отправить файл" />
</form>

<?php foreach ($result as $img): ?>
                <div class="col-md-3 image">
                   <img src="img/<?=$img['image']?>">
                </div>
 <?php endforeach; ?>



</body>
</html>