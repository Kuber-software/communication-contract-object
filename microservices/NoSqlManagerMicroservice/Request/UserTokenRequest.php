<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Request;

use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;

class UserTokenRequest extends BaseObject implements MessageDtoInterface
{
    private string $userToken;

    private MessageDto $messageDto;

    /**
     * @return string
     */
    public function getUserToken(): string
    {
        return $this->userToken;
    }

    /**
     * @param string $userToken
     * @return UserTokenRequest
     */
    public function setUserToken(string $userToken): UserTokenRequest
    {
        $this->userToken = $userToken;
        return $this;
    }

    public function setMessageDto(MessageDto $messageDto): MessageDtoInterface
    {
        $this->messageDto = $messageDto;
        return $this;
    }

    public function getMessageDto(): MessageDto
    {
        return $this->messageDto;
    }
}