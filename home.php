<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thebigoftware</title>
</head>

<body>
    <div class="titlecard">
        <h1>
            thebigsoftware
        </h1>
    </div>
    <div class="menucard">
        <h2><a href="home.php">Home</a></h2>&nbsp;&nbsp;&nbsp;
        <h2><a href="about.php">About</a></h2>&nbsp;&nbsp;&nbsp;
        <h2><a href="posters.php">Posters</a></h2>&nbsp;&nbsp;&nbsp;
    </div>
    <div class="content">
        <br><a href="https://github.com/xxTHEBIGC1990xx">naar github</a><br>
    </div>
</body>
<style>
    body {
        background-image: url('yellow-gray-gradient-background-scaled.jpg');
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
    .menucard {
        display: flex;
        flex-direction: row;
        position: absolute;
        top: 8%;
        left: 700px;
    }
    .content {
        border: 2px solid black;
        height: Calc(102.45vh - 400px);
        width: 1000px;
        overflow: auto;
        background-color: rgba(255, 255, 255, 0.4);
        position: absolute;
        top: 20%;
        left: 22%;
        text-align: center;

    }
</style>

</html>