<?php

return [
    'table'      => 'amethyst_skus',
    'comment'    => 'Sku',
    'model'      => Railken\Amethyst\Models\Sku::class,
    'schema'     => Railken\Amethyst\Schemas\SkuSchema::class,
    'repository' => Railken\Amethyst\Repositories\SkuRepository::class,
    'serializer' => Railken\Amethyst\Serializers\SkuSerializer::class,
    'validator'  => Railken\Amethyst\Validators\SkuValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\SkuAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\SkuFaker::class,
    'manager'    => Railken\Amethyst\Managers\SkuManager::class,
];
