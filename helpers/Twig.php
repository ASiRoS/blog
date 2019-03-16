<?php 

namespace Helpers;

class Twig {

	public function __construct() {
		$this->twig();
	}

	public function twig() {
		$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/../layouts/');
		$this->twig = new \Twig\Environment($loader, [
		    'cache' => false,
		]);
	}

	public function render($layout_name, $data=[]) {
		echo $this->twig->render("{$layout_name}.html.twig", $data);
	}

}