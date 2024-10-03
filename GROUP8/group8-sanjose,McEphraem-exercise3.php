<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group Exercise</title>
</head>
<body>

<?php
 
 $firstfile =  "grp8data.txt";
 $secondFile = "sample.txt";

 if (file_exists($firstfile)) {
    $redFile = file($firstfile);
    
     $get = file_get_contents($secondFile);
     echo $get;

 } else {
     
     echo "file not found";
 }    
    
if(file_put_contents($secondFile,"BSIT-3G")){
    echo "<h1 style='color:red'>Input data succesfully!<h1>";    
 };
 
 $get = file_get_contents($secondFile);
 echo $get;

 ?>  
</body>
</html>
