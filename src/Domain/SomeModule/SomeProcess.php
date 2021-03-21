<?php

declare(strict_types=1);

namespace Domain\SomeModule;

use EventSauce\EventSourcing\AggregateRoot;
use EventSauce\EventSourcing\AggregateRootBehaviour;

class SomeProcess implements AggregateRoot
{
    use AggregateRootBehaviour;
}
