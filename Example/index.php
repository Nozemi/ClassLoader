<?php
	require_once 'lib/ClassLoader.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Class Loader</title>
	
	<style>
		body { font-family: Calibri,Tahoma; width: 900px; margin: 0 auto; }
	</style>
</head>
<body>
	<p>So this class loader loads classes located in a class library folder,
	and the class library folder sub folders. (Just up to one sub folder)</p>
	<p>The class loader also checks if the class library folder exists.
	Let us say you are now in the root directory of the website, like this index page is.
	It works just fine, but when you move to http://website.com/SubFolder/page.php it gets
	problems loading the classes, well, not here. The class loader appends "../" to the
	class library directory path until it finds the directory or up to 3 times.</p>
	<p>To change the class library directory from the defaul "lib", you need to change the
	$dir variable in the ClassLoader.php, and just require that ClassLoader.php file from
	where you want to use your classes.<br /><br />
	You could also make it check further than 3 directories above for the classes library by
	changing the <strong>for</strong> loop in the <strong>ClassLoader.php</strong> and specify
	a higher number than 3. (Example: <strong>for($i = 0; $i < 6; $i++)</strong>).</p>
</body>
</html>