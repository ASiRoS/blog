<?php 

function view($layout, $data = []) {
	ob_start();
		load_layout($layout, $data);
	$content = ob_get_clean();

	load_layout('main', $content);
}

function load_layout($layout, $data = []) {
	$path = __DIR__ . '/../layouts/';
	$file = $path . $layout . '.php';

	if (file_exists($file)):
		if (is_string($data)):
			$content = $data;
			$data = [];
			$data['content'] = $content;
		endif;

		if (is_array($data)):
			extract($data);
		endif;

		//var_dump($articles);
		require_once $file;

	endif;

}
