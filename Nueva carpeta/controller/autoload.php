<?php  
class ViewPage {
	public function view_page($url) {
		$namePage = array('Inicio','login');
		if(in_array($url, $namePage)){
			$page = $url;
		}
		else {
			$page = 'Error 404';
		}
		if ($page === 'login') {
			include 'views/'.$page.'/widget-default.php';
		} else {
			include 'views/header/widget-default.php';
			include 'views/'.$page.'/widget-default.php';
			include 'views/footer/widget-default.php';
		}
	}
}