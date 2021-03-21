<?php

namespace Domain\SomeModule;

use Domain\SomeModule\Types\SomeProcessIdentifier;
use EventSauce\LaravelEventSauce\AggregateRootRepository;

/**
 * @method \Domain\SomeModule\SomeProcess retrieve(SomeProcessIdentifier $aggregateRootId)
 */
class SomeProcessRepository extends AggregateRootRepository
{
    protected static string $inputFile = __DIR__.'/commands_and_events.yml';
    protected static string $outputFile = __DIR__.'/commands_and_events.php';

    protected string $aggregateRoot = SomeProcess::class;
    protected string $table = 'some_process_domain_messages';

    protected array $consumers = [];
    protected array $projectors = [];
}
