<?php

defined('_JEXEC') or die;

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Output as HTML5
$doc->setHtml5(true);

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// Add Stylesheets
$doc->addStyleSheetVersion($this->baseurl . '/templates/' . $this->template . '/css/template.css');

//$doc->addScriptVersion($this->baseurl . '/templates/' . $this->template . '/js/template.js');

if ($this->params->get('sitetitle')) {
    $logo = htmlspecialchars($this->params->get('sitetitle'), ENT_COMPAT, 'UTF-8');
} else {
    $logo = $sitename;
}
?>
<!DOCTYPE html>
<html lang="<?=$this->language;?>" class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<jdoc:include type="head" />
</head>

<body>
	<main class="page container">
		<header class="header">
			<div class="logo">
				<a class="logo__name" href="<?=$this->baseurl?>"><?=$logo?></a>
			</div>
		</header>

		<?php if ($this->countModules('position-1')) : ?>
		<nav class="main-menu">
			<jdoc:include type="modules" name="position-1" />
		</nav>
		<?php endif;?>

		<div class="layout">
			<article class="content">
				<!-- Begin Content -->
				<jdoc:include type="modules" name="position-2" />
				<jdoc:include type="modules" name="position-3" />

				<jdoc:include type="message" />
				<jdoc:include type="component" />

				<jdoc:include type="modules" name="position-22" />
				<!-- End Content -->
			</article>

			<aside class="main-sidebar">
				<jdoc:include type="modules" name="position-7" style="sidebar" />
				<jdoc:include type="modules" name="position-4" style="sidebar" />
				<jdoc:include type="modules" name="position-5" style="sidebar" />
			</aside>
			<aside class="secondary-sidebar">
				<jdoc:include type="modules" name="position-6" style="sidebar" />
			</aside>
		</div>

		<footer class="footer">
			<p><a href="http://www.nic.ru">Проект при поддержке компании RU-CENTER</a></p>
            <p><iframe width="150" height="20" src="http://all.culture.ru/widgets/embed/zsswmblidtnommnq" frameborder="0"></iframe></p>
			<jdoc:include type="modules" name="footer" />
		</footer>
	</main>
	<jdoc:include type="modules" name="debug" />
</body>
</html>
