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
    $nilai = 75;

    if($nilai >= 75){
        echo "kamu sudah diatas KKM";
        
    }else {
        echo "kamu dibawah KKM";
    }
    
     echo "<br>";
     
    $waktu = 10;
    if($waktu <= 10) {
        echo "selamat pagi";
    } else {
        echo "selamat siang";
    }

    echo "<br>";
     
    // elseif
    $nilaiTugas = 80;
    if($nilaiTugas >= 90){
        echo "Selamat, kamu nilainya bagus (A) ";
    }elseif($nilaiTugas >=85){
        echo "Selamat, kamu nilainya cukup bagus (A-)";
    }elseif($nilaiTugas >=80){
        echo "Selamat, kamu nilainya bagus (B)";
    }elseif($nilaiTugas >=75){
        echo "Selamat, kamu nilainya kurang bagus (C)";
    } else{
        echo "selamat kamu remedial";
    }

    // switch
    $hari = "senin";
    switch ($hari) {
        case 'senin':
            echo "Hari ini adalah senin";
            break;
        case 'selasa':
            echo "Hari ini adalah selasa";
            break;
            case 'Rabu':
                echo "Hari ini adalah Rabu";
                break;
                case 'kamis':
                    echo "Hari ini adalah kamis";
                    break;
                    case 'jumat':
                        echo "Hari ini adalah selasa jumat";
                        break;
                        default:
                        echo "Hari ini adalah wekend libur! jangan ganggu ";
                        break;
        
       
    }
    ?>
</body>

</html>