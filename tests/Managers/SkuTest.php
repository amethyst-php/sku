<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\SkuFaker;
use Amethyst\Managers\SkuManager;
use Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class SkuTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = SkuManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = SkuFaker::class;
}
