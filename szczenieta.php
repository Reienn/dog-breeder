<!DOCTYPE html>
<html lang="pl-PL">
	<?php include 'top.php';?>
		
		<div class="mioty">
			<div class="miot">
				<h1>Lorem ipsum dolor sit amet!</h1>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus justo vitae magna auctor, quis ultricies erat finibus. Nulla facilisi. Sed fermentum rhoncus imperdiet.<br>
				Phasellus tincidunt elit ligula, in consectetur nisl dapibus et. Donec tristique ligula et nisl placerat, non elementum lorem posuere. Quisque tempor fermentum dolor, et tristique mi viverra ut. Sed semper eget quam a feugiat. Duis pulvinar volutpat erat, sit amet sagittis nibh rhoncus at. Duis eleifend neque vel justo maximus pretium eu vel libero.<br><br>
				ojciec: <a href="golden-retriever-Lorem-Ipsum.php">LOREM Ipsum</a> | 
				matka: <a href="golden-retriever-Dolor-Sit.php">DOLOR Sit</a><br><br>
			</div>
		</div>
		<?php
			include 'galleryGenerator.php';
			$dir = 'assets/puppies';
			gallery($dir);
		?>	
	﻿<?php include 'bottom.php';?>
</html>