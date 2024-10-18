<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izračun varijable c</title>
</head>
<body>
    <h2>Izračunajte varijablu c</h2>
    
    <form action="" method="post">
        <label for="a">Vrijednost a:</label>
        <input type="number" id="a" name="a" required><br><br>

        <label for="b">Vrijednost b:</label>
        <input type="number" id="b" name="b" required><br><br>

        <input type="submit" value="Izračunaj">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];

        $c = (3 * $a - $b) / 2;

        echo "<h3>Rezultat:</h3>";
        echo "Vrijednost a= " . $a . "<br>";
        echo "Vrijednost b= " . $b . "<br>";
        echo "(3 * $a - $b) / 2= " . $c;
    }
    ?>
</body>
</html>
