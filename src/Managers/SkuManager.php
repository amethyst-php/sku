<?php

namespace Amethyst\Managers;

use Amethyst\Common\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Sku                 newEntity()
 * @method \Amethyst\Schemas\SkuSchema          getSchema()
 * @method \Amethyst\Repositories\SkuRepository getRepository()
 * @method \Amethyst\Serializers\SkuSerializer  getSerializer()
 * @method \Amethyst\Validators\SkuValidator    getValidator()
 * @method \Amethyst\Authorizers\SkuAuthorizer  getAuthorizer()
 */
class SkuManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.sku.data.sku';
}
