<?php

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Router\Route;

\defined('_JEXEC') or die;

HTMLHelper::_('behavior.formvalidator');
HTMLHelper::_('behavior.keepalive');

?>
<form action="<?php echo Route::_('index.php?option=com_aiwfc&view=souhaits&layout=edit&id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="souhaits-form" class="form-validate">
	<div>
		<div class="row">
			<div class="col-md-9">
				<div class="row">
					<div class="col-md-6">
						<?php echo $this->form->renderField('id'); ?>
						<?php echo $this->form->renderField('titre'); ?>
						<?php echo $this->form->renderField('description'); ?>
						<?php echo $this->form->renderField('cree_le'); ?>
						<?php echo $this->form->renderField('cree_par'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<input type="hidden" name="task" value="">
	<?php echo HTMLHelper::_('form.token'); ?>
</form>