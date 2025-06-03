<?php
include_once('config.php');

$id = $_GET["id"];

$sql = "DELETE FROM users WHERE id=:id";

$deleteUsers = $conn -> prepare($sql);
$deleteUsers -> bindParam(':id', $id);
$deleteUsers -> execute();
header("Location:dashboard.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="add.php" method="POST">
            <input type="hidden" name="id"  Value="<?php echo $data [$id]?>"></br>
            <input type="text" name="name" placeholder="name" Value="<?php echo $data [$name]?>"></br>
            <input type="text" name="surname" placeholder="Surname" Value="<?php echo $data [$surname]?>"></br>
            <input type="email" name="email" placeholder="Email" Value="<?php echo $data [$email]?>"></br>


            <button type="submit" name="update">Update</button>
        </form>

        <style>
            form>input{
                margin-bottom: 10px;
                font-size: 20px;
                padding: 5px;
            }
            button{
                background-color:transparent;
                border: 1px solid black;
                padding: 10px 40px;
                font-size: 20px;
                cursor: pointer;
            }
        </style>


</body>
</html>