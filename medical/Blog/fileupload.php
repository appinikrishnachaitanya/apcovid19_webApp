<?php
if(isset($_POST['upload_btn']))
{
$filetype=($_FILES['upload']['type']);

if($filetype=='application/pdf')
{
	$targetfolder='upload/';
	$targetdest=$targetfolder.basename($_FILES['upload']['name']);
	if(move_uploaded_file($_FILES['upload']['tmp_name'], $targetdest))
	{
		echo "Successfully Uploaded";
	}
 


}

else
{

?>
<script type="text/javascript">
	alert("Only Pdf are allowed");
</script>
<?php
}
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>upload</title>
</head>
<body>
	<form action="" method="POST" enctype="multipart/form-data">
	<label>Upload</label>
	<input type="file" name="upload">
    <input type="submit" value="upload" name="upload_btn"> 

</form>

</body>
</html>