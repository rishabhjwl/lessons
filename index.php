<?php
$var1=4;
$var2=5;
$var3='hello everyone';
echo $var1+$var2." ".$var3;
$var4="<html><body>
<h1>Hi</h1>
</body>
</html>";
echo $var4;

$var5=10;
if ($var5<4)
{
	echo $var5;
}
elseif ($var5==4)
{
	echo $var5;
}
else
{
	echo $var5;
}

echo "<br>";

$var6=1;
while ($var6<= 5) 
{
	echo $var6;
	$var6++;
}
echo '<br>';
if (isset($_GET['name1']))
{
	echo $_GET['name1'];
}
echo '<br>';
if (isset($_GET['lessons']))
{
	print_r($_GET['lessons']);
}
else
{
	echo "select your lessons";
}
$var7='<html>
<body>
<form action="http://localhost/lessons/index.php" method="GET">
<input type="text" name="name1">
	<select name="lessons[]" size="4" multiple="">
		<option value="mysql">My SQL</option>
		<option value="web_dev">Web Dev</option>
		<option value="oracle">Oracle</option>
		<option value="javascript">Javascipt</option>
	</select>
<input type="submit" name="">	
</form>
</body>
</html>';
echo $var7;


echo "<br>";

$var8=array('python','java','cpp');
print_r($var8);
echo $var8[1];

echo "<br>";

array_push($var8, 'javascript');
print_r($var8);
echo "<br>";
array_pop($var8);
print_r($var8);
echo "<br>";
foreach ($var8 as $key => $value)
{
	echo $key;
	echo $value;
	echo "<br>";
}
foreach ($var8 as $key)
{
	echo $key;
	echo "<br>";
}

$var9=array
(
	array('Jaguar',22,18),
	array('BMW',15,13),
	array('Volvo',55,20)
);
foreach ($var9 as $index)
{
	foreach ($index as $value) 
	{
		echo($value." ");
	}
	echo("<br>");
}


?>