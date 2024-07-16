<?php
if(isset($_GET['un'])){
    $name = $_GET['un'] ;

?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1> Hello <?=$name  ?> </h1>
    </body>
    </html>

    <?php } else {
        header("location:login.php") ;
    }





