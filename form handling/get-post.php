<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP FORM HANDLING</title>
</head>

<body>
    <!-- metode get -->
   <!-- <form action="./get-data.php" method="get">
       <DIv style="margin-bottom: 3PX;">
       <LABEl for="USERNAME" >USERNAME</LABEl>
       <input type="TEXT" id="USERNAME" name="username" placeholder="Masukan nama anda" />

       </DIv>
       <DIv style="margin-bottom: 3PX;">
       <LABEl for="Class" >Class</LABEl>
       <input type="Number" id="Class" name="Class" placeholder="Masukan Class anda" />

       </DIv>
       <input type="submit" value="Simpan nama">
      
   </form> -->

    <!-- metode POST -->
    <form action="./get-data.php" method="POST">
       <DIv style="margin-bottom: 3PX;">
       <LABEl for="USERNAME" >USERNAME</LABEl>
       <input type="TEXT" id="USERNAME" name="username" placeholder="Masukan nama anda" />

       </DIv>
       <DIv style="margin-bottom: 3PX;">
       <LABEl for="Class" >Class</LABEl>
       <input type="Number" id="Class" name="Class" placeholder="Masukan Class anda" />

       </DIv>
       <input type="submit" value="Simpan nama">
      
   </form>
</body>

</html>