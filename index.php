<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php project</title>
</head>
<body>
    <!-- this is a sample website -->
    <div class="container">
        <h1>PHP Project </h1><br>
    <?php 
    echo"<br>";
        echo" This project is to connect PHP and  SQL <br>"; 
    $var1=100000;
    $var2=200000;
    echo"total cost of making the project is ", $var1+$var2;
    $fruits=array("orange","apple","banana","cherry");
    echo $fruits[0];
    echo"<br>";
    echo $fruits[1];
    echo"<br>";
    echo $fruits[2];
    echo"<br>";
    echo $fruits[3];
    echo"<br>";
    $num=0;
    while($num<10){
    echo"<br>";
   echo "the value of num is ",$num;
   $num++;
    }
    if($num>8){
    echo"<br>";
    echo "the num is larger than 8";
    }
    else{
        echo"<br>";
        echo "the num is not larger than 8";
    }
    $a=0;
    while($a<count($fruits)){
    echo"<br>";
        echo "Following is the main fruits to consume :  ", $fruits[$a];
$a++;
    }
    function hello(){
    echo"<br>";
        echo"Hello world";
    }
hello();
hello();
hello();
hello();
echo"<br>";
$name="nandini";
$len=strlen($name);
echo"The string length is: " ,$len ."and the string is :" ,$name;
echo"<br>";
$count=str_word_count($name);
echo"The string word count is: " ,$count;
echo"<br>";
$rev=strrev($name);
echo"The reversed string  is: " ,$rev;
    ?>
    </div>
<script src="index.js"></script>
</body>
</html>