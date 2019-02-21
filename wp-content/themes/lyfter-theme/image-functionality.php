<?php


// Cloudinary Images
function add_image($image = false, $params, $class) {

	if ( $image !== false  ) {

		$base = 'https://res.cloudinary.com/agrowth/image/upload/';
		$filename = $image['filename'];

		if (	$params === 0 ) {
			$params = 'g_south,q_60,c_fill,w_1280';
		}

		$output = $base.$params.'/'.$filename;

		echo '<img src="' . @$output . '" class="' . @$class . '" />';

	} else {
		echo 'image is false';
	}

}


function add_image_src($image) {
	$base = 'https://res.cloudinary.com/agrowth/image/upload/';
	$filename = $image['filename'];

	$src = $base.'/'.$filename;

	echo @$src;
}


function add_bg_image($image, $params) {
	if ( $image ) {
		$imgname = $image;

		$base = 'https://res.cloudinary.com/agrowth/image/upload/';

		if (	$params === 0 ) {
			$params = 'g_south,q_60,c_fill,w_1280';
		}
		if (strpos($imgname, $base) === 0) {
			$imgname = substr($imgname, strlen($base));
		}

		$output = $base.$params.'/'.$imgname;

		echo @$output;
	}

}


function add_thumbnail_image($params, $class) {

	$imgname = get_the_post_thumbnail_url();
	$base = 'https://res.cloudinary.com/agrowth/image/upload/';
	if (	$params === 0 ) {
		$params = 'g_south,q_60,c_fill,w_1280';
	}
	if (strpos($imgname, $base) === 0) {
		$imgname = substr($imgname, strlen($base));
		}

	$output = $base.$params.'/'.$imgname;

	echo '<img src="' . @$output . '" class="' . @$class . '" />';

}
