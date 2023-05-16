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
  // json encode
  $kelas = array(
    // 'key' => 'value'
    'x' => 'kelas x',
    'xi' => 'kelas xi',
    'xii' => 'kelas xii',
    'xiii' => 'kelas xiii',
    'xiv' => 'kelas xiv',
  );
  foreach ($kelas as $value) {
    echo $value . "<br>";
}

echo "<br>";

$kelasDecode = '{"x" : 1, "xi":2, "xii": 3}';
var_dump(json_decode($kelasDecode));

$object = json_decode($kelasDecode);
print $object->{'x'};

  
  echo json_encode($kelas);
  ?>

    
</body>
</html>