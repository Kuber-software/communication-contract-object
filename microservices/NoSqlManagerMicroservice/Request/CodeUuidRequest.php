<?php

namespace Kubersoftware\Microservices\NoSqlManagerMicroservice\Request;

use JMS\Serializer\Annotation as Serializer;
use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;
use Ramsey\Uuid\Uuid;

class CodeUuidRequest extends BaseObject implements MessageDtoInterface
{

    /**
     * @var Uuid
     */
    private Uuid $codeUuid;

    /**
     * @Serializer\SkipWhenEmpty()
     * @var MessageDto
     */
    private MessageDto $messageDto;

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

    /**
     * @return Uuid
     */
    public function getCodeUuid(): Uuid
    {
        return $this->codeUuid;
    }

    /**
     * @param Uuid $codeUuid
     * @return CodeUuidRequest
     */
    public function setCodeUuid(Uuid $codeUuid): CodeUuidRequest
    {
        $this->codeUuid = $codeUuid;
        return $this;
    }

}