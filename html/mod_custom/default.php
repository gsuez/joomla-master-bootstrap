<?php  
/*------------------------------------------------------------------------
# author    Gonzalo Suez
# copyright Copyright © 2012 gsuez.cl. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.gsuez.cl
-------------------------------------------------------------------------*/

// no direct access
defined('_JEXEC') or die;
?>
 <div class="moduletable <?php if ($params->get('moduleclass_sfx')!='') : ?><?php echo $params->get('moduleclass_sfx'); ?><?php endif; ?>">
		<div class="block">
			<?php if ($module->showtitle != 0) : ?>
<div class="module-title">
			<h3 class="title"><?php echo $module->title; ?></h3>	
	</div>
<?php endif; ?>
			<div class="modulcontent"><?php echo $module->content; ?></div>
		</div>
	</div>
