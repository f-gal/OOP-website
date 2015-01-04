<?php

function __autoload($class) {
	include "classes/".$class.".php";
}

$site = new site;

$site->addHeader("header.php");
$site->addFooter("footer.php");

$page = new page;

$title = "Example OOP website";

$content = "Some Content";

$site->display($content, $title);

var_dump($site);

?>