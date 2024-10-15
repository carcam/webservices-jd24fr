<?php

use Joomla\CMS\Router\Route;

\defined('_JEXEC') or die;

?>
<form action="<?php echo Route::_('index.php?option=com_aiwfc&view=souhaits'); ?>" method="post" name="adminForm" id="adminForm">
    <?php if ($this->items) : ?>
        <div class="table-responsive">
            <table class="table table-striped">
                <caption>Liste de souhaits</caption>
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>Souhait</td>
                        <td>Créé le</td>
                    </tr>
                </thead>
                <tfoot>
                    <?php echo $this->pagination->getListFooter(); ?>
                </tfoot>
                <tbody>
                    <?php foreach ($this->items as $item) : ?>
                        <tr>
                            <td><?php echo $item->id; ?></td>
                            <td>
                                <div class="item-title">
                                    <a href="<?php echo Route::_('index.php?option=com_aiwfc&view=souhaits&layout=edit&id=' . (int) $item->id); ?>">
                                        <?php echo $item->titre; ?>
                                    </a>
                                </div>
                                <p class="item-description"><?php echo $item->description; ?></p>
                            </td>
                            <td><?php echo $item->cree_le; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else : ?>
        <div class="text-large">
            <p>Vous n'avez pas de désirs. Rappelez-vous cela:</p>
            <blockquote cite="https://es.wikiquote.org/wiki/Deseo#cite_ref-senor135-9_2-2">
                Avant que de désirer fortement une chose, il faut examiner quel bonheur en ont ceux qui la possèdent.
                <footer>
                    <a href="">François de La Rochefoucauld</a>
                </footer>
            </blockquote>
        </div>
    <?php endif; ?>
    <input type="hidden" name="task" value="">
</form>