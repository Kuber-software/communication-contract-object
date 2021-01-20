<?php

namespace Kubersoftware\Utils\Serializer;


interface SerializerInterface
{
    public function serialize(object $data, string $format): string;

    public function deserialize(string $data, string $objectName, string $format): object;
}