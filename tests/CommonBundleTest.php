<?php
/**
 * Created by Artem Holovanov.
 * Date: 21.08.2025 10:59.
 */

declare(strict_types=1);

namespace CommonBundle\Tests;

use PHPUnit\Framework\TestCase;
use CommonBundle\CommonBundle;

class CommonBundleTest extends TestCase
{
    public function testBundleCanBeInstantiated(): void
    {
        $bundle = new CommonBundle();
        $this->assertInstanceOf(CommonBundle::class, $bundle);
    }
}