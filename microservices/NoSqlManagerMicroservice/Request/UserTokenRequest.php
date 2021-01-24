<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Request;

use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;

class UserTokenRequest extends BaseObject implements MessageDtoInterface
{
    private UserTokenEntity $userTokenEntity;

    private MessageDto $messageDto;

    /**
     * @return UserTokenEntity
     */
    public function getUserTokenEntity(): UserTokenEntity
    {
        return $this->userTokenEntity;
    }

    /**
     * @param UserTokenEntity $userTokenEntity
     * @return UserTokenRequest
     */
    public function setUserTokenEntity(UserTokenEntity $userTokenEntity): UserTokenRequest
    {
        $this->userTokenEntity = $userTokenEntity;
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

    /**
     * @return bool
     */
    public function isNull(): bool
    {
        return $this->isNull;
    }

    /**
     * @param bool $isNull
     * @return UserTokenRequest
     */
    public function setIsNull(bool $isNull): UserTokenRequest
    {
        $this->isNull = $isNull;
        return $this;
    }
}