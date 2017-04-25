<!DOCTYPE html>
<html>
<head>
	<title> Upload PHO-TO </title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
  <?php if(isset($_FILE)) print_r($_FILES) ?>
  <?php $notice=""; 
  		if($_SERVER['REQUEST_METHOD'] ==="POST"){ move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],  "image/".$_FILES["fileToUpload"]["name"]);
  		$notice = "<div class=\"alert alert-success\">
                   <strong>Upfile successfull </strong>
                   </div>";
         // lay link image cho vao database
         $link = "image/";
         $link.= $_FILES['fileToUpload']['name']; 
        setcookie('imagelink', $link); 
  } 
 ?>
<body>

<form method="post" enctype="multipart/form-data" action="upfile.php">
  Select image to upload:
  <input type="file" class="btn btn-success" name="fileToUpload" id="fileToUpload">
  <input type="submit" class="btn btn-danger" value="Upload" name="submit">
  <?php if(isset($notice)) echo $notice;?>
  <br><a href="templateAdmin2.php" style="color: blue;">Quay về trang trước</a>
</form>
</body>
</html>

</html>