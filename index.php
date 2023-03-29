<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="post">
    <div class="titlecard">
        <h1>
            thebigsoftware
        </h1>
    </div>
    <div class="login">
        <input type="text" name="user" placeholder="username"><br>
        <input type="text" name="pass" placeholder="password"><br>
        <button onClick="func()">login</button>
    </div>
    <?php 
    if (isset($_GET['error'])){
        ?><h1><?php echo $_GET['error']; ?></h1><?php
    }
    ?>
    </form>
</div>   
</body>
<style>
    body {
        background-image: url('yellow-gray-gradient-background-scaled.jpg');
    }
    .login {
       position: absolute;
       top: 30%;
       left: 45%; 
    }
    .titlecard {
        font-family: Georgia, 'Times New Roman', Times, serif;
        color: beige;
        position: absolute;
        left: 5%;
        top: 2%;
        font-size: 35px;
        text-shadow: 2px 2px 4px #000000;
    }
    
</style>
</html>