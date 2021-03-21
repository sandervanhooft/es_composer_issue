<?php

declare(strict_types=1);

namespace Domain\SomeModule;

use EventSauce\EventSourcing\Serialization\SerializablePayload;

final class EventAOccurred implements SerializablePayload
{
    private Domain\SomeModule\Types\SomeProcessIdentifier $identifier;

    public function __construct(
        Domain\SomeModule\Types\SomeProcessIdentifier $identifier
    ) {
        $this->identifier = $identifier;
    }

    public function identifier(): Domain\SomeModule\Types\SomeProcessIdentifier
    {
        return $this->identifier;
    }

    public static function fromPayload(array $payload): SerializablePayload
    {
        return new EventAOccurred(
            SomeProcessIdentifier::fromString($payload['identifier'])
        );
    }

    public function toPayload(): array
    {
        return [
            'identifier' => $this->identifier->toString(),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public static function withIdentifier(Domain\SomeModule\Types\SomeProcessIdentifier $identifier): EventAOccurred
    {
        return new EventAOccurred(
            $identifier
        );
    }
}

final class EventBOccurred implements SerializablePayload
{
    public static function fromPayload(array $payload): SerializablePayload
    {
        return new EventBOccurred();
    }

    public function toPayload(): array
    {
        return [];
    }

    /**
     * @codeCoverageIgnore
     */
    public static function with(): EventBOccurred
    {
        return new EventBOccurred();
    }
}

final class InitiateSomeProcess implements SerializablePayload
{
    private Domain\SomeModule\Types\SomeProcessIdentifier $identifier;

    public function __construct(
        Domain\SomeModule\Types\SomeProcessIdentifier $identifier
    ) {
        $this->identifier = $identifier;
    }

    public function identifier(): Domain\SomeModule\Types\SomeProcessIdentifier
    {
        return $this->identifier;
    }

    public static function fromPayload(array $payload): SerializablePayload
    {
        return new InitiateSomeProcess(
            SomeProcessIdentifier::fromString($payload['identifier'])
        );
    }

    public function toPayload(): array
    {
        return [
            'identifier' => $this->identifier->toString(),
        ];
    }

    /**
     * @codeCoverageIgnore
     */
    public static function withIdentifier(Domain\SomeModule\Types\SomeProcessIdentifier $identifier): InitiateSomeProcess
    {
        return new InitiateSomeProcess(
            $identifier
        );
    }
}
