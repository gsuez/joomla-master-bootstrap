<?php

/*------------------------------------------------------------------------
# author    Gonzalo Suez
# copyright Copyright © 2012 gsuez.cl. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.gsuez.cl
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;

// Column widths
$leftcolgrid   = $this->params->get('columnWidth', 3);
$rightcolgrid	= $this->params->get('columnWidth', 3);
?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" >
<head>

<jdoc:include type="head" />

<meta name="viewport" content="width=device-width, initial-scale=1.0"

<!-- Stylesheets -->

<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/joomla.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/bootstrap-responsive.css" >
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/style/docs.css" >
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/google-code-prettify/prettify.css" >
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />

<?php
if ($this->countModules('left') == 0):?>
<?php $leftcolgrid  = "0";?>
<?php endif; ?>

<?php
if ($this->countModules('right') == 0):?>
<?php $rightcolgrid  = "0";?>
<?php endif; ?>

<?php if ($this->params->get('template-width') == 1):?>
<?php $template_width = "-fluid" ;?>
<?php else :?>

<?php $template_width = "" ;?>
<?php endif; ?>

</head>

<body>

<!--top-->

<?php if($this->countModules('top')) : ?>
<div id="top">
<div class="container<?php echo $template_width; ?>">
<div class="row<?php echo $template_width; ?>">
<jdoc:include type="modules" name="top" style="block" />	
</div>
</div>
</div>
<?php endif; ?>

<!--top-->

<?php if($this->countModules('logo')) : ?>
<div id="logo">
<div class="container<?php echo $template_width; ?>">
<div class="row<?php echo $template_width; ?>">
<jdoc:include type="modules" name="logo" style="none" />
</div>
</div>
</div>
<?php endif; ?>

<!--Navigation-->

<div id="navigation">
<div class="container<?php echo $template_width; ?>"> 
<div class="navbar">
<div class="navbar-inner">

<?php if($this->countModules('navigation')) : ?>
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
<span class="icon-bar"></span> 
</a> 
<?php endif; ?>

<?php if($this->countModules('navigation')) : ?>
<div class="nav-collapse">
<jdoc:include type="modules" name="navigation" style="none" />
</div>
<?php endif; ?>
</div>
</div>
</div>
</div>

<!--Navigation-->

<!--Showcase-->

<?php if($this->countModules('showcase')) : ?>
<div id="showcase">
<div class="container<?php echo $template_width; ?>">
<div class="row<?php echo $template_width; ?>">
<jdoc:include type="modules" name="showcase" style="none"/>
</div>
</div>
</div>
<?php endif; ?>

<!--Showcase-->

<!--Feature-->

<?php if($this->countModules('feature')) : ?>
<div id="feature">
<div class="container<?php echo $template_width; ?>">
<div class="row<?php echo $template_width; ?>">
<jdoc:include type="modules" name="feature" style="block" />	
</div>
</div>
</div>
<?php endif; ?>

<!--Feature-->

<!--above-->

<?php if($this->countModules('above')) : ?>
<div id="above">
<div class="container<?php echo $template_width; ?>">
<div class="row<?php echo $template_width; ?>">
<jdoc:include type="modules" name="above" style="block" />	
</div>
</div>
</div>
<?php endif; ?>

<!--above-->

<!-- Content -->

<div id="content">
<div class="container<?php echo $template_width; ?>">
<jdoc:include type="message" />		
<?php if($this->countModules('breadcrumbs')) : ?>
<div id="breadcrumbs" class="row<?php echo $template_width; ?>">
<jdoc:include type="modules" name="breadcrumbs" style="block" />
</div>
<?php endif; ?>
<div id="main" class="row<?php echo $template_width; ?>">

<!-- Left -->

<?php if($this->countModules('left')) : ?>
<div id="sidebar" class="span<?php echo $leftcolgrid;?>">
<jdoc:include type="modules" name="left" style="block" />
</div>
<?php endif; ?>

<!-- Component -->

<div id="container" class="span<?php echo (12-$leftcolgrid-$rightcolgrid);?>">
<?php if($this->countModules('content-top')) : ?>

<!-- Content-top Module Position -->	

<div id="content-top">
<jdoc:include type="modules" name="content-top" style="block" />	
</div>
<?php endif; ?>
<div id="main" class="main-box">
<jdoc:include type="component" />
</div>
<?php if($this->countModules('content-bottom')) : ?>

<!-- Below Content Module Position -->	

<div id="content-bottom">
<jdoc:include type="modules" name="content-bottom" style="block" />	
</div>
<?php endif; ?>
</div>

<!-- Right -->

<?php if($this->countModules('right')) : ?>
<div id="sidebar-2" class="span<?php echo $rightcolgrid;?>">
<jdoc:include type="modules" name="right" style="block" />
</div>
<?php endif; ?>
</div>
</div>
</div>

<!-- Content -->

<!-- bottom -->

<?php if($this->countModules('bottom')) : ?>
<div id="bottom">
<div class="container<?php echo $template_width; ?>">
<div class="row<?php echo $template_width; ?>">
<jdoc:include type="modules" name="bottom" style="block" />
</div>
</div>
</div>
<?php endif; ?>

<!-- bottom -->

<!-- footer -->

<?php if($this->countModules('footer')) : ?>
<div id="footer">
<div class="container<?php echo $template_width; ?>">
<div class="row<?php echo $template_width; ?>">
<jdoc:include type="modules" name="footer" style="block" />
</div>
</div>
</div>
<?php endif; ?>

<!-- footer -->

</div>
</div>

<jdoc:include type="modules" name="debug" />

<!-- page -->	

<!-- JS -->

<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-transition.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-alert.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-modal.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-dropdown.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-scrollspy.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-tab.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-tooltip.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-popover.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-button.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-collapse.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-carousel.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-typeahead.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/bootstrap-affix.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/holder/holder.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/google-code-prettify/prettify.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/application.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/application.js"></script>

<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>

<script type="text/javascript">

jQuery.noConflict();

</script>

</body>

</html>
