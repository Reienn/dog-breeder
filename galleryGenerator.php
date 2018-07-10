<?php
	function gallery($dir){//creates lightbox gallery from given directory (with gallery.js file)	
		echo '<div id="gallery">';
		$images = array_diff(scandir($dir), array('..', '.')); //gets file names
		
		$i = 1;
		foreach($images as $img){ //creates <img> tags with links to modal lightbox
			echo '<img src="'.$dir."/".$img.'" onclick="openModal('.$i.')" class="hover-shadow">';
			$i++;
		}
		
		echo '</div><div id="modal">';
		
		$j = 1;
		$all = count($images); //number of images
		foreach($images as $img){ //creates divs for images, prev/next buttons and signature
			echo '<div class="mySlides" id="'.$j.'">';		
			if($j == 1){
				$prev = $all;
			} else{
				$prev = $j-1;
			}
			if($j==$all){
				$next = 1;
			} else{
				$next = $j+1;
			}
			echo '<a class="prev" onclick="plusSlides('.$j.', '.$prev.')">&#10094;</a>';
			echo '<img src="'.$dir."/".$img.'">';
			echo '<a class="next" onclick="plusSlides('.$j.', '.$next.')">&#10095;</a>';
			echo '<div class="numbertext">'.$j.' / '.$all.'<br><b>'.$img.'</b></div>';					
			echo '</div>';
			$j++;
		}
		echo '<span class="close cursor" onclick="closeModal()">&times;</span></div>';		
	}
?>