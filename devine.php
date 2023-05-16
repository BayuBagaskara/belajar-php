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
  define("fungsi", "ini adalah cetakan hasil fungsi dari const dari fungsi");
  echo fungsi;

  echo "<br>";

  // define const array
  // php = array 
  define("arraykelas",["kelas x", "kelas xi", "kelas xii"]);
  echo "saya adalah " . arraykelas;

  echo "<br>";
  // define const fungsi global
  define("name", "merupakan contoh global fungsi definisi");
  function smk()
  {
    echo name;
  }

    ?>
</body>

</html>