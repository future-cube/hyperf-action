<?php

declare(strict_types=1);
namespace Wayhood\HyperfAction\Collector;


use Hyperf\Di\MetadataCollector;

class ActionCollector extends MetadataCollector
{
    /**
     * @var array
     */
    protected static $container = [];

    public static function collectClass(string $class, string $annotation, $value): void
    {
        static::$container[$value] = $class;
    }
}