<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <title>Igra Pogodi broj</title>
</head>
<body>
    <h2>Pogodi broj</h2>
    
    <form action="" method="post">
        <label for="a">Upiši jedan broj od 1 do 10*</label>
        <input type="number" id="a" name="a" required autofocus><br><br>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = rand(1,10);

        if ($a == $b) {
            echo '<div class="btn btn-success">Pogodak, probaj ponovo!</div><br>';
        }
         else {
            echo '<div class="btn btn-success">Krivo, probaj ponovo!</div><br>';
        }
        echo "Zamišljeni broj je " . $b;
    }
    ?>
</body>
</html>
