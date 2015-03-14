# Multiton

[![Build Status](https://travis-ci.org/php-daddy/contract-multiton.svg)](https://travis-ci.org/php-daddy/contract-multiton)

## Requirements

* Install [Composer](https://getcomposer.org/download/)

## Installation

```bash
$ composer require "php-daddy/contract-multiton":"*"
```

## Usage

```php
<?php

use PhpDaddy\Contract\Multiton\AbstractMultiton;

class MultitonStub extends AbstractMultiton
{

}

$obj = MultitonStub::getInstance('yourkeyhere');

```

or

```php
<?php

use PhpDaddy\Contract\Multiton\Multiton;
use PhpDaddy\Contract\Multiton\MultitonTrait;

class MultitonStub implements Multiton
{
    use MultitonTrait;
}

$obj = MultitonStub::getInstance('your_key_here');
$obj = MultitonStub::getInstance('your_another_key_here');
```
