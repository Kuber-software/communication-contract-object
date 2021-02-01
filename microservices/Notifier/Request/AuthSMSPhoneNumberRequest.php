<?php

namespace Kubersoftware\Microservices\Notifier\Request;

use JMS\Serializer\Annotation as Serializer;
use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;

class AuthSMSPhoneNumberRequest extends BaseObject implements MessageDtoInterface
{

    /**
     * @var string
     */
    private string $phoneNumber;

    /**
     * @Serializer\SkipWhenEmpty()
     * @var MessageDto
     */
    private MessageDto $messageDto;

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return AuthSMSPhoneNumberRequest
     */
    public function setPhoneNumber(string $phoneNumber): AuthSMSPhoneNumberRequest
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return MessageDto
     */
    public function getMessageDto(): MessageDto
    {
        return $this->messageDto;
    }

    /**
     * @param MessageDto $messageDto
     * @return $this|MessageDtoInterface
     */
    public function setMessageDto(MessageDto $messageDto): MessageDtoInterface
    {
        $this->messageDto = $messageDto;
        return $this;
    }

}