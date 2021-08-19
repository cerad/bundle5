<?php

namespace MyBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface 
{
  public function getConfigTreeBuilder() 
  {
      $treeBuilder = new TreeBuilder('my');

      $rootNode = $treeBuilder->getRootNode();

      $rootNode
          ->children()
              ->scalarNode('root_namespace')->defaultValue('App')->end()
              ->arrayNode('params')->addDefaultsIfNotSet()
                  ->children()
                      ->integerNode('paramA')->defaultValue(100)->end()
                      ->integerNode('paramB')->defaultValue(222)->end()
                      ->scalarNode('paramC')->defaultValue('default')->end()
                  ->end()
              ->end()
          ->end()
      ;
      
      return $treeBuilder;
  }
}