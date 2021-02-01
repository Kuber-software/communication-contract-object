<?php

namespace Kubersoftware\Microservices\Notifier\Request;

use JMS\Serializer\Annotation as Serializer;
use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;
use Ramsey\Uuid\Uuid;

class AuthSMSPhoneTokenRequest extends BaseObject implements MessageDtoInterface
{

    /**
     * @var Uuid
     */
    private Uuid $token;

    /**
     * @Serializer\SkipWhenEmpty()
     * @var MessageDto
     */
    private MessageDto $messageDto;

    /**
     * @return Uuid
     */
    public function getToken(): Uuid
    {
        return $this->token;
    }

    /**
     * @param Uuid $token
     * @return AuthSMSPhoneTokenRequest
     */
    public function setToken(Uuid $token): AuthSMSPhoneTokenRequest
    {
        $this->token = $token;
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