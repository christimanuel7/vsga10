<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
        Nama : <input type="text" name="tnama"></br>
        Umur: <input type="text" name="tumur"></br>

        <input type="submit" name="box" value="ok">
    </form>
    <?php
        if(isset($_GET['box'])){
            echo $_GET['tnama']."<br>";
            echo $_GET['tumur'];
        }
    ?>
</body>
</html>