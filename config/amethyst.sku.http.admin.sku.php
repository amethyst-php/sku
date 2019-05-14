<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\SkusController::class,
    'router'     => [
        'as'     => 'sku.',
        'prefix' => '/skus',
    ],
];
