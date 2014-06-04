<?php

return array(
    'basePath'          => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name'              => 'State Administration',
    'defaultController' => 'index',
    'import'            => array(
        'application.models.*',
        'application.components.*',
    ),
    'components'        => array(
        'errorHandler' => array(
            'errorAction' => 'index/error',
        ),
        'urlManager'   => array(
            'urlFormat'      => 'path',
            'urlSuffix'      => '.html',
            'showScriptName' => false
        ),
    ),
);