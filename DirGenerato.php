<?php
namespace dir;
class DirGenerato 
{
	function create(){
		$dir = ['app','app/database','app/http','app/http/controller','app/http/middleware','public','resource','resource/views','routes'];
		foreach ($dir as $key => $value) {
			mkdir($value, 0700);
		}
		copy ('arquives/controller.php','app/http/controller/controller.php');
		copy ('arquives/.htaccess','.htaccess');
		copy ('arquives/web.php','routes/web.php');
	}
}