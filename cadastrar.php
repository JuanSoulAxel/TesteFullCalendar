<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form  action="controllers/ControllerCadEvents.php" method="POST" enctype="multipart/form-data">
                <input class="" name="inpDisplay" type="text"> <br> <br>
                <input name="inpColor" type="text"> <br> <br> 
                <input name="inpStart" type="text"> <br> <br>
                <input name="inpEnd" type="text">
                <button type="submit">Save changes</button>
</form>
</body>
</html>