<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\SkuFaker;
use Railken\Amethyst\Managers\SkuManager;
use Railken\Amethyst\Tests\BaseTest;
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
