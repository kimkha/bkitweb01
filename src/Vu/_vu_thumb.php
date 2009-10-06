<?php
function thumb_create($image_type,$src_img,$max_w,$max_h,$thumb_name){
	//Thumb's path
	$path_image=$thumb_name;
	// Get original size
	list($width, $height) = getimagesize($src_img);
	// Get ratio
	$src_ratio=$max_w/$max_h;
	if (($width/$height)>$src_ratio){
		$ratio=$width/$max_w;
	}
	else {
		$ratio=$height/$max_h;
	}
	//Get new size
	$new_width=$width/$ratio;
	$new_height=$height/$ratio;
	//The value define the right position
	$x_begin=($max_w-$new_width)/2;
	$y_begin=($max_h-$new_height)/2;
	// Resample
	$image_p = imagecreatetruecolor($max_w, $max_h);
	
	//////////////JPG image////////////////
	if ($image_type=="image/jpeg"||$image_type=="image/jpg"){
		$image = imagecreatefromjpeg($src_img);//Greate an image
		imagecopyresampled($image_p, $image, $x_begin, $y_begin, 0, 0, $new_width, $new_height, $width, $height);										//Change the 2 first value
		imagejpeg($image_p,'upload/images/'.$thumb_name,100);//Change thumbnail image location here	
	}
	
	
	/////////////GIF Image//////////////////
	if ($image_type=="image/gif"){
		$image = imagecreatefromgif($src_img);//Greate an image
		imagecopyresampled($image_p, $image, $x_begin, $y_begin, 0, 0, $new_width, $new_height, $width, $height);										//Change the 2 first value
		imagegif($image_p,'upload/images/'.$thumb_name,100);//Change thumbnail image location here	
	}
	
	
//	//////////////PNG image//////////////////Not finished yet
//	if ($image_type=="image/png"){
//		$image = imagecreatefrompng($src_img);//Greate an image
//		imagecopyresampled($image_p, $image, $x_begin, $y_begin, 0, 0, $new_width, $new_height, $width, $height);										//Change the 2 first value
//		imagepng($image_p,'upload/images/'.$thumb_name,100);//Change thumbnail image location here	
//	}
//	
//	/////////////BMP image///////////////////Not finished yet
//	if ($image_type=="image/bmp"){
//		$image = imagecreatefromwbmp($src_img);//Greate an image
//		imagecopyresampled($image_p, $image, $x_begin, $y_begin, 0, 0, $new_width, $new_height, $width, $height);										//Change the 2 first value
//		imagewbmp($image_p,'upload/images/'.$thumb_name,100);//Change thumbnail image location here	
//	}
	return $path_image;
}