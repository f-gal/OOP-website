<?php

class site {
	
	private $header;
	private $footer;

}

public function addHeader($header) {
	
	$this->header = $header;

}

public function addFooter($footer) {

	$this->footer = $footer;

}

public function display($content, $site) {

	global $page;
	
	include $this->header;
	
	$page->display($content);
	
	include $this->footer;

	
}

?>