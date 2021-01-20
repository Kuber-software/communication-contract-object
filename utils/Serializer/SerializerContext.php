<?php


namespace Kubersoftware\Utils\Serializer;


class SerializerContext
{
    private SerializerInterface $serializerTool;

    public function __construct(SerializerInterface $serializerTool)
    {
        $this->serializerTool = $serializerTool;
    }

    public function doSerialize(object $data, string $format): string
    {
        return $this->serializerTool->serialize($data, $format);
    }
}