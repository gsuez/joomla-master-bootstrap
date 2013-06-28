<?php 

/*------------------------------------------------------------------------
# author    Gonzalo Suez
# copyright Copyright © 2012 gsuez.cl. All rights reserved.
# @license  http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Website   http://www.gsuez.cl
-------------------------------------------------------------------------*/

defined('_JEXEC') or die;

function modChrome_standard($module, &$params, &$attribs)

{

	if (!empty ($module->content)): ?>

		<div class="block" style"none">

		<?php if ($module->showtitle != 0) : ?>

			<h1><?php echo $module->title; ?></h1>

		<?php endif; ?>

			<?php echo $module->content; ?>

		</div>

	<?php endif;

}

