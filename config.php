<?php

class Config {

	static $webRoot 	= "http://vista.bananabox.biz/media/files/";
	static $mediaDir 	= "/files/";
	static $cacheDir 	= "/cache/";

	public static function getWebRoot() {
		return self::$webRoot;
	}

	public static function getMediaDir() {
		return getcwd().self::$mediaDir;
	}

	public static function getCacheDir() {
		return getcwd().self::$cacheDir;
	}

}
