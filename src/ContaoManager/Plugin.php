<?php

/*
 * This file is part of [package name].
 *
 * (c) Jerome Metz
 *
 * @license LGPL-3.0-or-later
 */

namespace Mediaquery\ContaoMaterialBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Material\ContaoMaterialBundle\ContaoMaterialBundle1;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoMaterialBundle2::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
