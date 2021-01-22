<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Request;


use App\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;
use DateTime;
use JMS\Serializer\Annotation\Type;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;
use Ramsey\Uuid\UuidInterface;
use JMS\Serializer\Annotation as JMS;

class UserTokenRequest implements MessageDtoInterface
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
}