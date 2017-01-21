<?php

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Output as HTML5
$doc->setHtml5(true);
$sitename = $app->get('sitename');
?>
<!DOCTYPE html>
<html lang="<?=$this->language;?>" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="<?=$this->baseurl?>/templates/gorbib/css/template.css">
	<style>
		.page {
			background: none;
			border: none;
		}
		body {
			background-image: url(<?=$this->baseurl?>/templates/gorbib/images/404.gif);
			background-position: bottom;
		}
		.error-title {
			color: #fff;
			font-size: 3em;
			text-align: center;
			text-shadow: 1px 1px 15px #d8765d;
		}
	</style>
</head>

<body>
	<main class="page container">
		<h1 class="error-title">Страница не найдена</h1>
		<h2 style="text-align:center;color:#fff;text-shadow: 1px 1px 15px #d8765d;">Вы ошиблись при наборе адреса или мы удалили эту страницу</h2>
		<h3 style="text-align:center;text-shadow: 1px 1px 15px #d8765d;"><a href="/" style="color:#fff;border-bottom: 1px solid">Начните с главной</a></h3>
	</main>
	<footer class="footer">
		<?=$sitename?>
	</footer>
</body>
</html>
