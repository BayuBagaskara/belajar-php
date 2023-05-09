<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
</head>

<body>
    <?php
    // 1
   $arrayTampung = array ("Abay", "Asep","Saepul","Sije");
   $implode = implode("/", $arrayTampung);
   echo $implode;
   echo "\n";
   // 2
   $arrayNampung = array ("html", "css", "javascript", "php");
   $implode = implode("-", $arrayNampung);
   echo $implode;
    ?>
</body>

</html>