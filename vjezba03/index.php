<?php

function replaceSpaces($inputString) {
    $outputString = str_replace(' ', '_', $inputString);
    return $outputString;
}

$title = "Da Vincijev kod";
$link= "https://hr.wikipedia.org/" . replaceSpaces($title)

?>

<!DOCTYPE html>
<html lang="hr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.">
    <meta name="keywords" content="Da Vincijev kod, Dan Brown, kriminalistički triler">
    <title><?php echo $title; ?></title>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    
    <p>Da Vincijev kod je kriminalistički triler američkog pisca Dana Browna.</p>
    
    <p>

        <a href="<?php echo $link; ?>" target="_blank">Pročitajte više o Da Vincijevom kodu</a>
    </p>
</body>
</html>

<!-- index.html -->