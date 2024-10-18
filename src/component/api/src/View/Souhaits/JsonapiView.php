<?php

namespace Noel\Component\Aiwfc\Api\View\Souhaits;

use Joomla\CMS\MVC\View\JsonApiView as BaseApiView;

class JsonapiView extends BaseApiView
{
        protected $fieldsToRenderList = [
                'id',
                'titre',
                'description',
                'cree_le'
        ];

        protected $fieldsToRenderItem = [
                'id',
                'titre',
                'description'
        ];
}
