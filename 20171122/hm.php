<?php

$height=$_POST["height"];
$weight=$_POST["weight"];
if(is_numeric($height)&&is_numeric($weight)){
echo "height:". $height;
echo "<br><br>";
echo "weight:". $weight;
echo "<br><br>";
echo "BMI=" . $weight/(($height/100)*($height/100));
echo "<br><br>";}
else if(empty($height)||empty($weight))
echo "please type in all information";
else 
echo "Error!!";




if(is_file($_FILES["file"]["name"])<0)
    echo "empty!!"
    else if(!@getimagesize($FILES["tmp_name"]))
    echo "wrong file type"
    else 
move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
echo '<img src="upload/'.$_FILES["file"]["name"].'"/>';}

?>