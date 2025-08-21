<?php
/**
 * Created by Artem Holovanov.
 * Date: 21.08.2025 10:57.
 */

declare(strict_types=1);

namespace CommonBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('common');
        $treeBuilder->getRootNode();
        return $treeBuilder;
    }
}