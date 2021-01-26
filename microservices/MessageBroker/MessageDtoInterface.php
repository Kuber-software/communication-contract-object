<?php


namespace Kubersoftware\Microservices\MessageBroker;


interface MessageDtoInterface
{
    public function setMessageDto(MessageDto $messageDto): self;

    public function getMessageDto(): MessageDto;
}