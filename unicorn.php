<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <label for="what">Are you a human, a cat or a unicorn ?</label>
        <br>
        <input type="radio" name="what" value="human">
        <label for="human">Human</label>
        <input type="radio" name="what" value="cat">
        <label for="cat">Cat</label>
        <input type="radio" name="what" value="unicorn">
        <label for="unicorn">Unicorn</label>
        <br>
        <input type="submit" name="submit">
    </form>

<?php

if (isset($_POST['what'])) {
    $pictureOfYou = ($_POST['what'] == "human") ? "humanpic" : (($_POST['what'] == "cat") ? "catpic" : "unicornpic");
    echo $pictureOfYou;
}

?>
</body>
</html>

