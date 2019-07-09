<?php

return [
    'table'      => 'amethyst_skus',
    'comment'    => 'Sku',
    'model'      => Amethyst\Models\Sku::class,
    'schema'     => Amethyst\Schemas\SkuSchema::class,
    'repository' => Amethyst\Repositories\SkuRepository::class,
    'serializer' => Amethyst\Serializers\SkuSerializer::class,
    'validator'  => Amethyst\Validators\SkuValidator::class,
    'authorizer' => Amethyst\Authorizers\SkuAuthorizer::class,
    'faker'      => Amethyst\Fakers\SkuFaker::class,
    'manager'    => Amethyst\Managers\SkuManager::class,
];
