<?php

namespace Noel\Component\Aiwfc\Administrator\View\Souhait;

use Joomla\CMS\Factory;
use Joomla\CMS\Toolbar\Toolbar;
use Joomla\CMS\Toolbar\ToolbarHelper;
use Joomla\CMS\MVC\View\GenericDataException;
use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

\defined('_JEXEC') or die;

class HtmlView extends BaseHtmlView
{
    public $state;
    public $item;
    public $form;

    public function display($tpl = null): void
    {
        $this->form = $this->get('Form');
        $this->state = $this->get('State');
        $this->item = $this->get('Item');

        if (count($errors = $this->get('Errors'))) {
            throw new GenericDataException(implode('\n', $errors), 500);
        }

        $this->addToolbar();

        parent::display($tpl);
    }

    protected function addToolbar()
    {
        Factory::getApplication()->input->set('hidemainmenu', true);

        $estNouveau = ($this->item->id == 0);
        $toolbar = Toolbar::getInstance();

        ToolbarHelper::title($estNouveau ? 'Ajouter' : 'Modifier');

        if ($estNouveau) {
            $toolbar->apply('souhait.save');
        } else {
            $toolbar->apply('souhait.apply');
        }
        $toolbar->save('souhait.save');

        $toolbar->cancel('souhait.cancel', 'JTOOLBAR_CLOSE');
    }
}
