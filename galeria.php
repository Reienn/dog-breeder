<!DOCTYPE html>
<html lang="pl-PL">
	<?php include 'top.php';?>
	
		<h1>GALERIA</h1>
		<div id="linksGallery">
		<?php
			include 'galleryGenerator.php';
			$folders = array_diff(scandir('assets/gallery'), array('..', '.'));
			if(!isset($_GET['gallery'])){
				foreach($folders as $f){
					$thumb = array_diff(scandir('assets/gallery/'.$f), array('..', '.'));
					echo '<div class="linkGalleryDiv"><a href="galeria.php?gallery='.$f.'"><img src="assets/gallery/'.$f.'/'.$thumb[2].'" class="imglink"/></a><br>';
					echo '<a href="galeria.php?gallery='.$f.'">'.str_replace("-", " ", $f).'</a><br></div>';
				}
			}
			else{
				$f = $_GET['gallery'];
				$dir = 'assets/gallery/'.$f;
				echo '<div class="back"><h2>'.str_replace("-", " ", $f).'</h2></div>';
				gallery($dir);
				echo '<div class="back"><a href="galeria.php">&#10094; powrót</a><br></div>';
			}			
		?>
		</div>	
﻿	<?php include 'bottom.php';?>
</html>