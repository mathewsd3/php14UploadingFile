<html>
<head>
<title>File Upload Program</title>
</head>
<body>
 
<form action="index.php" enctype="multipart/form-data" method="post">
Select image :
<input type="file" name="file"><br/>
<input type="submit" value="Upload" name="Submit1"> <br/>
 
 
</form>
<?php
if(isset($_POST['Submit1']))
{ 
$filepath = "images/" . $_FILES["file"]["name"];
 
if(move_uploaded_file($_FILES["file"]["tmp_name"], $filepath)) 
{
//$dir    = 'C:\wamp64\www\ISI\exercise-fileupload\images';
$dir    = 'images/';
$files1 = array_diff(scandir($dir), array('..', '.'));


foreach($files1 as $key=>$value)
{

	$filepath = "images/" . $value;
	echo '<br>'.$filepath.'<br>';
}


foreach($files1 as $key=>$value)
{
	$filepath = "images/" . $value;
	echo '<br>'."<img src=".$filepath." height=200 width=300 />";
}
} 
else 
{
echo "Error !!";
}
} 
?>
 
</body>
</html>