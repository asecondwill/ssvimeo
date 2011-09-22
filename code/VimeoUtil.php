<?php

class VimeoUtil {
		
	public static function VimeoShortcodeHandler($attributes, $content=null, $parser=null) {
		$player_width = 400;
		$player_height = 225;
		
		if(!isset($attributes['id'])) return '';
		$width = isset($attributes['width']) ? intval($attributes['width']) : $player_width;
		$height = isset($attributes['height']) ? intval($attributes['height']) : $player_height;
		if($width == 0) $width = $player_width;
		if($height == 0) $width = $player_height;
		
		return "<iframe src='http://player.vimeo.com/video/{$attributes['id']}' width='{$width}' height='{$height}' frameborder='0'></iframe>";
		
		
	}
	
}