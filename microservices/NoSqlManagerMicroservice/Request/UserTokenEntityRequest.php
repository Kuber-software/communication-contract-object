<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Request;

use JMS\Serializer\Annotation as Serializer;
use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;

class UserTokenEntityRequest extends BaseObject implements MessageDtoInterface
{
    /**
     * @Serializer\SkipWhenEmpty()
     * @var UserTokenEntity
     */
    private UserTokenEntity $userTokenEntity;

    /**
     * @Serializer\SkipWhenEmpty()
     * @var MessageDto
     */
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
     * @return UserTokenEntityRequest
     */
    public function setUserTokenEntity(UserTokenEntity $userTokenEntity): UserTokenEntityRequest
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