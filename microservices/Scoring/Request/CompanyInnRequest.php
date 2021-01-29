<?php


namespace Kubersoftware\Microservices\Scoring\Request;


use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\MessageBroker\MessageDto;
use Kubersoftware\Microservices\MessageBroker\MessageDtoInterface;

class CompanyInnRequest extends BaseObject implements MessageDtoInterface
{
    private string $inn;

    /**
     * @var MessageDto
     */
    private MessageDto $messageDto;

    /**
     * @param MessageDto $messageDto
     * @return $this
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

    /**
     * @return string
     */
    public function getInn(): string
    {
        return $this->inn;
    }

    /**
     * @param string $inn
     * @return CompanyInnRequest
     */
    public function setInn(string $inn): CompanyInnRequest
    {
        $this->inn = $inn;
        return $this;
    }

}