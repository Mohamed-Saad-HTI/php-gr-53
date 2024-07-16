
  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="handle.php" method="get">
        <input type="text" placeholder="username" name="username" >
        <input type="text" placeholder="password" name="password" >
        <button type="submit" name="submit22">login</button>
    </form>
    <?php
        if(isset($_GET['error'])){
            echo $_GET['error'] ; }
    ?>

</body>
</html>