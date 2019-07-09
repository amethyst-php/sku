<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\SkusController::class,
    'router'     => [
        'as'     => 'sku.',
        'prefix' => '/skus',
    ],
];
