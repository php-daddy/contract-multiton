<?php namespace PhpDaddy\Contract\Multiton;

use PhpDaddy\Contract\Singleton\SingletonTrait;

trait MultitonTrait
{
    use SingletonTrait;

    protected static $instances = [];

    /**
     * {@inheritdoc}
     */
    public static function getInstance($key)
    {
        if (!array_key_exists($key, static::$instances)) {
            static::$instances[$key] = new static();
        }

        return static::$instances[$key];
    }
}
