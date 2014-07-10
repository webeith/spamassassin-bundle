<?php

namespace Webeith\SpamassassinBundle\DependencyInjection;

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
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('webeith_spamassassin');

        $rootNode
            ->children()
                ->scalarNode('hostname')
                    ->defaultValue('localhost')->isRequired()->end()
                ->integerNode('port')
                    ->defaultValue('783')->isRequired()->end()
                ->scalarNode('socketPath')
                    ->defaultValue(null)->end()
                ->booleanNode('enableZlib')
                    ->defaultValue(false)->end()
                ->scalarNode('protocolVersion')
                    ->defaultValue('1.5')->end();

        return $treeBuilder;
    }
}
