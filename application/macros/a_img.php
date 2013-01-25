<?php
HTML::macro('a_img', function($url, $text, $title, $src, $alt = '', $a_attrs = array(), $img_attrs = array(), $after = null) {
	$url = URL::to($url);
	$src = URL::to_asset($src);
	$img_attrs['alt'] = $alt;
	if (is_null($text)) $text = $url;
	if($after === null) {
		$html = '<a href="'.$url.'" title="'.$title.'"'.static::attributes($a_attrs).'>'.static::entities($text).'<img src="'.$src.'"'.static::attributes($img_attrs).'></a>';
	} else {
		$html = '<a href="'.$url.'" title="'.$title.'"'.static::attributes($a_attrs).'><img src="'.$src.'"'.static::attributes($img_attrs).'>'.static::entities($text).'</a>';	
	}
	return $html;
});
