<?php
	function GetDirectory()
	{
		$dir = 'lib/'; // Define the class library folder.
		
		// Checks if class library exists at the defined location.
		if(!file_exists($dir))
		{
			// If it does not exist, it appends "../" 3 times, or until it finds the folder.
			for($i = 0; $i < 3; $i++)
			{
				if(!file_exists($dir))
				{
					$dir = '../' . $dir;
				}
			}
		}
		
		return $dir; // Returns the actual class library position result.
	}

	function ClassLoader() {
		$dir = GetDirectory(); // Gets the library directory's actual position.
				
		// Gets the classes inside the library directory.
		foreach(glob($dir . '/*.class.php') as $file) {
			require_once $file;
		}
		
		// Gets the classes inside sub folders of library directory.
		foreach(glob($dir . '*/*.class.php') as $file) {
			require_once $file;
		}
	}
	
	// Registers the class loader.
	spl_autoload_register('ClassLoader');
?>