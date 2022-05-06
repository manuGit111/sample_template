<?php include('config.php');

if(isset($_POST['submit'])){
$title=mysqli_real_escape_string($con,$_POST['title']);
$content=mysqli_real_escape_string($con,$_POST['content']);
mysqli_query($con,"INSERT INTO newsletters(`title`, `content`)
VALUES ('$title','$content')");

echo 'newsletter has been submitted';
}


?>

<html>
<head>
<title>Newsform</title>
<script src="//cdn.ckeditor.com/4.5.6/full/ckeditor.js"></script>
</head>

<body>
<h1>Newsform</h1>
<form method="post" action="">
<input type="text" name="title" placeholder="put title here"/>
<textarea name="content" id="content" placeholder="put content here"></textarea>
<input type="submit" value="submit" name="submit"/>
</form>

<script>
// extraPlugins needs to be set too.
CKEDITOR.replace( 'content', {
} );
</script>

</body>
</html>