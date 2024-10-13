<?php

namespace Noel\Component\aiwfc\Administrator\Table;

use Joomla\CMS\Table\Table;
use Joomla\Database\DatabaseDriver;

\defined('_JEXEC') or die;

class SouhaitTable extends Table
{
	public function __construct(DatabaseDriver $db)
	{
		parent::__construct('#__aiwfc_souhaits', 'id', $db);
	}
}
