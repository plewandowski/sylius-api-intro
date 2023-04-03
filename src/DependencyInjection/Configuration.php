<?php

declare(strict_types=1);

namespace Acme\SyliusExamplePlugin\DependencyInjection;

use Acme\SyliusExamplePlugin\Entity\BlogPost;
use Acme\SyliusExamplePlugin\Entity\BlogPostInterface;
use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

final class Configuration implements ConfigurationInterface
{
    /**
     * @psalm-suppress UnusedVariable
     */
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('acme_sylius_example_plugin');
        $rootNode = $treeBuilder->getRootNode();

        $rootNode
            ->children()
                ->arrayNode('resources')
                    ->addDefaultsIfNotSet()

                    ->children()

                        ->arrayNode('blog_post')
                            ->addDefaultsIfNotSet()
                            ->children()
                                ->variableNode('options')->end()
                                ->arrayNode('classes')
                                    ->addDefaultsIfNotSet()
                                    ->children()
                                    ->scalarNode('model')->defaultValue(BlogPost::class)->cannotBeEmpty()->end()
                                    ->scalarNode('interface')->defaultValue(BlogPostInterface::class)->cannotBeEmpty()->end()
                                ->end()
                                ->end()
                            ->end()
                        ->end()

                    ->end()
                    ->end()
                ->end()
            ->end();

        return $treeBuilder;
    }
}
