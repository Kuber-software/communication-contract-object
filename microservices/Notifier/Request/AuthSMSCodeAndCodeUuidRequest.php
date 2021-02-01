<?php

namespace Kubersoftware\Microservices\Notifier\Request;

use JMS\Serializer\Annotation as Serializer;
use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;
use Ramsey\Uuid\Uuid;

class AuthSMSCodeAndCodeUuidRequest extends BaseObject implements MessageDtoInterface
{

    /**
     * @var int
     */
    private int $code;

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
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return AuthSMSCodeAndCodeUuidRequest
     */
    public function setCode(int $code): AuthSMSCodeAndCodeUuidRequest
    {
        $this->code = $code;
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
     * @return AuthSMSCodeAndCodeUuidRequest
     */
    public function setCodeUuid(Uuid $codeUuid): AuthSMSCodeAndCodeUuidRequest
    {
        $this->codeUuid = $codeUuid;
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