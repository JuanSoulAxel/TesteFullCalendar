<?php include 'config/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastar Evento</title>
</head>
<body>

<form  action="controllers/ControllerCadEvents.php" method="POST" enctype="multipart/form-data">
                <input class="" name="inpDisplay" type="text" required> <br> <br>
                <select name="inpColor" required>
                    <option value="red">Vermelho</option>
                    <option value="blue">Azul</option>
                </select>
                 <br> <br> 
                <input name="inpStart" type="date" min="2023-01-01" max="2023-12-31" required> <br> <br>
                <input name="inpEnd" type="date" min="2023-01-01" max="2023-12-31" required>
                <button type="submit">Save changes</button>
</form>
</body>
</html>