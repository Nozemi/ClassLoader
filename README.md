# ClassLoader
PHP Class Auto Loader

So this class loader loads classes located in a class library folder,
and the class library folder sub folders. (Just up to one sub folder)
The class loader also checks if the class library folder exists.

Let us say you are now in the root directory of the website, like this index page is.
It works just fine, but when you move to http://website.com/SubFolder/page.php it gets
problems loading the classes, well, not here. The class loader appends "../" to the
class library directory path until it finds the directory or up to 3 times.
<p>To change the class library directory from the defaul "lib", you need to change the
$dir variable in the ClassLoader.php, and just require that ClassLoader.php file from
where you want to use your classes.

You could also make it check further than 3 directories above for the classes library by
changing the for loop in the <strong>ClassLoader.php</strong> and specify
a higher number than 3. (Example: for($i = 0; $i < 6; $i++)).

###Usage:
1. Add "require_once 'PATH_TO_CLASS_LOADER/ClassLoader.php';" to the top of the file you want to use your classes in.
2. If you name your classes library folder something other than "lib", you got to change it in ClassLoader.php
