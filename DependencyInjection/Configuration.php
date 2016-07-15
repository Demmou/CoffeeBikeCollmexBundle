<?php

namespace CoffeeBike\CollmexBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('coffee_bike_collmex');

        $rootNote
            ->children()
                ->scalarNode('user')->end()
                ->scalarNode('password')->end()
                ->scalarNode('customer_id')->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
