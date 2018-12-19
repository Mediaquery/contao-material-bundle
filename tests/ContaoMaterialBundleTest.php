<?php

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\ContaoMaterialBundle\Tests;

use DMediaquery\DContaoMaterialBundle\DContaoMaterialBundle;
use PHPUnit\Framework\TestCase;

class ContaoMaterialBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoMaterialBundle();

        $this->assertInstanceOf('Mediaquery\ContaoMaterialBundle\ContaoMaterialBundle', $bundle);
    }
}
