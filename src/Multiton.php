<?php namespace PhpDaddy\Contract\Multiton;

interface Multiton
{
    /**
     * Creates an instance if instance doesn't exists yet.
     *
     * @param string $key Instance key
     * @return Object
     */
    public static function getInstance($key='default');
}
