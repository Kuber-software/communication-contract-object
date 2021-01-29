<?php


namespace Kubersoftware\Microservices\Scrutinizer\Request;


use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;

class TaskScrutinizerUuidRequest extends BaseObject implements MessageDtoInterface
{

    /**
     * @param MessageDto $messageDto
     * @return $this
     */
    public function setMessageDto(MessageDto $messageDto): MessageDtoInterface
    {
        // TODO: Implement setMessageDto() method.
    }

    /**
     * @return MessageDto
     */
    public function getMessageDto(): MessageDto
    {
        // TODO: Implement getMessageDto() method.
    }
}