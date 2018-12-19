<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\MaterialBundle\Tests;

use Mediaquery\MaterialBundle\ContaoSkeletonBundle;
use PHPUnit\Framework\TestCase;

class ContaoMaterialBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoMaterialBundle();

        $this->assertInstanceOf('Mediaquery\MaterialBundle\ContaoMaterialBundle', $bundle);
    }
}
