<?php

namespace Patterns\Observer\Observable;

use Patterns\Observer\Observers\ObserverInterface;

interface ObservableInterface
{
    public function addObserver(ObserverInterface $observer);
    public function removeObserver(ObserverInterface $observer);
    public function notify();
}