<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\AdminBundle\Tests\Block;

use Sonata\AdminBundle\Admin\Pool;
use Sonata\AdminBundle\Block\AdminStatsBlockService;
use Sonata\BlockBundle\Test\BlockServiceTestCase;
use Twig\Environment;

/**
 * NEXT_MAJOR: Remove this class.
 *
 * @group legacy
 *
 * @author Sullivan Senechal <soullivaneuh@gmail.com>
 */
class DeprecatedAdminStatsBlockServiceTest extends BlockServiceTestCase
{
    /**
     * @var Pool
     */
    private $pool;

    protected function setUp(): void
    {
        parent::setUp();

        $this->pool = $this->createMock(Pool::class);
    }

    /**
     * @expectedDeprecation Passing null as argument 2 to Sonata\AdminBundle\Block\AdminStatsBlockService::__construct() is deprecated since sonata-project/admin-bundle 3.76 and will throw a \TypeError in version 4.0. You must pass an instance of Sonata\AdminBundle\Admin\Pool instead.
     */
    public function testDefaultSettings(): void
    {
        $blockService = new AdminStatsBlockService(
            $this->createMock(Environment::class),
            null,
            $this->pool
        );
        $blockContext = $this->getBlockContext($blockService);

        $this->assertSettings([
            'icon' => 'fa fa-line-chart',
            'text' => 'Statistics',
            'translation_domain' => null,
            'color' => 'bg-aqua',
            'code' => false,
            'filters' => [],
            'limit' => 1000,
            'template' => '@SonataAdmin/Block/block_stats.html.twig',
        ], $blockContext);
    }
}
