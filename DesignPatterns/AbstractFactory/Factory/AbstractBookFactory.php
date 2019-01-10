<?php
namespace Patterns\AbstractFactory\Factory;

abstract class AbstractBookFactory
{
    abstract function makePHPBook();
    abstract function makeMySQLBook();
}