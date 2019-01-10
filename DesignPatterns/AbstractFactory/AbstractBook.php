<?php
namespace Patterns\AbstractFactory;

abstract class AbstractBook
{
    abstract function getAuthor();
    abstract function getTitle();
}