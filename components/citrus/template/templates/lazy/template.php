<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$this->setFrameMode(true);

?>

<div id="<?= $arParams['DATA']['COMPONENT_HTML_ID'] ?>">
	<div align="center" style="margin-bottom: 40px;"><img width="20" src="<?= $templateFolder ?>/images/loading.gif"></div>
</div>

<script>
	new BX.Citrus.Template.Component(<?= CUtil::PhpToJSObject([
		'signedParameters' => $component->getSignedParameters(),
		'htmlId' => $arParams['DATA']['COMPONENT_HTML_ID'],
	]) ?>);
</script>