<?php

namespace Noel\Component\Aiwfc\Administrator\Model;

use Joomla\CMS\MVC\Model\ListModel;

\defined('_JEXEC') or die;

class SouhaitsModel extends ListModel
{
    protected function getListQuery()
    {
        $db    = $this->getDatabase();
        $query = $db->getQuery(true);
        $query->select(
            $this->getState(
                'list.select',
                [
                    $db->quoteName('a.id'),
                    $db->quoteName('a.titre'),
                    $db->quoteName('a.description'),
                    $db->quoteName('a.etat'),
                    $db->quoteName('a.cree_le'),
                ]
            )
        )->from($db->quoteName('#__aiwfc_souhaits', 'a'));

        $orderCol = $this->state->get('list.ordering', 'a.cree_le');
        $orderDirn = $this->state->get('list.direction', 'ASC');
        $query->order($db->escape($orderCol) . ' ' . $db->escape($orderDirn));

        return $query;
    }
}
