<?php
namespace APITracking;
class APITrackingInit{
	public function __construct()
	{
		return spl_autoload_register([$this, "loader"]);
	}
	private function loader($className)
	{
		$filename = str_replace("APITracking\\","lib/",$className);
		$filename = dirname(__FILE__)."/{$filename}.class.php";
		if(file_exists($filename)) require_once($filename);
//		else die("class '{$className}' can not found");
	}
}
return new \APITracking\APITrackingInit();