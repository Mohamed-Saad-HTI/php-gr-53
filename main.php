
<?php
var_dump($_POST);
if(isset($_POST['submit22'])){
    var_dump($_POST['username'],$_POST['password']);
    echo $_POST['username'] , $_POST['password'] ;
}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        <input type="text" placeholder="username" name="username" >
        <input type="text" placeholder="password" name="password" >
        <button type="submit" name="submit22">login</button>
    </form>

</body>
</html>