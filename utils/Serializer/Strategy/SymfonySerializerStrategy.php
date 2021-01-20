<?php


namespace Kubersoftware\Utils\Serializer\Strategy;


use Kubersoftware\Utils\Serializer\SerializerInterface;

class SymfonySerializerStrategy implements SerializerInterface
{

    public function serialize(object $data, string $format): string
    {
        return 'symfony_serilizer';
    }

    public function deserialize(string $data, string $objectName, string $format): object
    {
        // TODO: Implement deserialize() method.
    }
}