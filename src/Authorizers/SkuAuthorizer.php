<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class SkuAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'sku.create',
        Tokens::PERMISSION_UPDATE => 'sku.update',
        Tokens::PERMISSION_SHOW   => 'sku.show',
        Tokens::PERMISSION_REMOVE => 'sku.remove',
    ];
}
