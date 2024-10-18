<?php

namespace Noel\Component\Aiwfc\Api\View\Souhaits;

use Joomla\CMS\MVC\View\JsonApiView as BaseApiView;

class JsonapiView extends BaseApiView
{
        protected $fieldsToRenderList = [
                'id',
                'titre',
                'description',
                'creado'
        ];

        protected $fieldsToRenderItem = [
                'id',
                'titre',
                'description'
        ];
}
