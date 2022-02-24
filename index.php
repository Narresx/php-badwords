<?php
$string = "    Lorem ipsum dolor sit amet consectetur adipisicing elit.
Culpa unde recusandae quo. Lorem Aliquid vitae voluptatum,
id temporibus cumque consequuntur hic omnis unde veniam odit veritatis tempora itaque,
rerum autem eius.";

var_dump($string);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>
    <div><?php echo $string ?></div>
    <form action="bad_word.php" method="GET">
        <input type="text" placeholder="Scrivi una parola" name="bad_word">
        <button type="submit">Invia</button>
    </form>
</body>

</html>