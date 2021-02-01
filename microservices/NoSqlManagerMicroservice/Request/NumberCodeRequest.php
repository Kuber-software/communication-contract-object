<?php

namespace Kubersoftware\Microservices\NoSqlManagerMicroservice\Request;

use JMS\Serializer\Annotation as Serializer;
use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;

class NumberCodeRequest extends BaseObject implements MessageDtoInterface
{

    /**
     * @var int
     */
    private int $code;
    
    /**
     * @var \DateTime
     */
    private \DateTime $dateTime;

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
     * @return NumberCodeRequest
     */
    public function setCode(int $code): NumberCodeRequest
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTime $dateTime
     * @return NumberCodeRequest
     */
    public function setDateTime(\DateTime $dateTime): NumberCodeRequest
    {
        $this->dateTime = $dateTime;
        return $this;
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
     * @return MessageDto
     */
    public function getMessageDto(): MessageDto
    {
        return $this->messageDto;
    }

}