<?php


namespace Kubersoftware\Util\Serializer\Strategy;


use Kubersoftware\Util\Serializer\SerializerInterface;

class JmsSerializerStrategy implements SerializerInterface
{

    public function serialize(object $data, string $format): string
    {
        return 'jms_serilizer';
    }

    public function deserialize(string $data, string $objectName, string $format): object
    {
        // TODO: Implement deserialize() method.
    }
}