<?php

/*
 * This file is part of [package name].
 *
 * (c) Jerome Metz V1
 *
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\ContaoMaterialBundle\Tests;

use Mediaquery\ContaoMaterialBundle\ContaoMaterialBundle;
use PHPUnit\Framework\TestCase;

class ContaoMaterialBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoMaterialBundle();

        $this->assertInstanceOf('Mediaquery\ContaoMaterialBundle\ContaoMaterialBundle4', $bundle);
    }
}
