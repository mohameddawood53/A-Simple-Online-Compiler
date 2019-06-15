<?php

	$languageID=$_POST['language'];
			
				if ($languageID == "cpp"){
					include("compilers/cpp.php");
                }elseif($languageID == "java"){
					include("compilers/java.php");
				}
			
?>


