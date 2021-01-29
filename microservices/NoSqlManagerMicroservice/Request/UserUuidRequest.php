<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Request;

use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;
use Ramsey\Uuid\UuidInterface;

class UserUuidRequest extends BaseObject implements MessageDtoInterface
{
    private UuidInterface $userUuid;

    private MessageDto $messageDto;

    /**
     * @return UuidInterface
     */
    public function getUserUuid(): UuidInterface
    {
        return $this->userUuid;
    }

    /**
     * @param UuidInterface $userUuid
     * @return UserUuidRequest
     */
    public function setUserUuid(UuidInterface $userUuid): UserUuidRequest
    {
        $this->userUuid = $userUuid;
        return $this;
    }

    public function setMessageDto(MessageDto $messageDto): UserUuidRequest
    {
        $this->messageDto = $messageDto;
        return $this;
    }

    public function getMessageDto(): MessageDto
    {
        return $this->messageDto;
    }
}