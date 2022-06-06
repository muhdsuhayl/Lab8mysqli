<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 define ('db user', 'root') ;
 define ('db password', '") :
 define ('db host', 'localhost');
 define ('db name', 'registration') :
 $conn = mysqli connect (db host, db user, db password, db name) ;
 $result = mysqli query ($conn, "select * from user") ;
 while ($row = mysqli fetch array ($result)) t

foreach ($row as $key=›$value) (

echo "$key = $value
(br> In";

 }
 mysqli free' result ($result) ;
 mysali close ($conn) ;
 ?>
</body>
</html>