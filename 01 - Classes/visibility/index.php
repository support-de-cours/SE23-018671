<?php 
require "User.php";

$john = new User("john");
// $john->name = "Bob";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Visilité</h1>

    <div>
        User Name : <?=  $john->getName() ?>
    </div>

</body>
</html>