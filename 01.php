<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	span {
		color:red;
	}

	</style>
</head>
<body>
	<?php
$str1="asd";
echo "<span>asdasd</span><br/>\n";
 $name="石杨";
 $age=18;
 echo "我是{$name},今年{$age}<br/>";


 $html=<<< name
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<span style="color:red">我是谁</span>
</body>
</html>
name;
echo "$html<br/>";
echo "aaa<br/>";



$array["name"]="aa";
$array["age"]="18";
print_r($array);

$array=array("name"=>"asa","age"=>"18");
print_r($array);



$array=array(1,3,5,67,7,2);
$length=count($array);
for($i=0;$i<$length;$i++){
	echo "<br/>$array[$i]\n";
}



foreach($array as $value){
	echo "<br/>$value";
}


?>
</body>
</html>