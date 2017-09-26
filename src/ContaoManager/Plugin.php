<?php

/**
 * Contao Bootstrap card.
 *
 * @package    contao-bootstrap
 * @subpackage Card
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2017 netzmacht David Molineus. All rights reserved.
 * @license    LGPL 3.0
 * @filesource
 */

declare(strict_types=1);

namespace ContaoBootstrap\Card\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoBootstrap\Card\ContaoBootstrapCardBundle;
use ContaoBootstrap\Core\ContaoBootstrapCoreBundle;

/**
 * Contao Manager plugin.
 */
class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoBootstrapCardBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class, ContaoBootstrapCoreBundle::class])
        ];
    }
}
