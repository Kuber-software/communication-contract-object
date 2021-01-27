<?php


namespace Kubersoftware\Microservices\MessageBroker;


use DateTime;
use Ramsey\Uuid\UuidInterface;

class MessageDto
{
    /**
     * Название микросервиса, который делает запрос
     * @var string
     */
    private string $fromMicroserviceName;

    /**
     * Название микросервиса, в который делает запрос
     * @var string
     */
    private string $toMicroserviceName;

    /**
     * Uuid задачи
     * @JMS\Type("uuid")
     * @var UuidInterface
     */
    private UuidInterface $taskUuid;

    /**
     * Текущее время запроса
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Нужно ли фиксировать задачу для скрутинайзера
     * @var bool
     */
    private bool $sendToScrutinizer;

    /**
     * Максимальное время отработки задачи
     * @var int
     */
    private int $maxTimeOutInSec;

    /**
     * Максимальное время ожидание ответа на запрос
     * @var int
     */
    private int $maxWaitTimeInSec;

    /**
     * Имя метода
     * @var string
     */
    private string $methodName;


    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

    /**
     * @return string
     */
    public function getFromMicroserviceName(): string
    {
        return $this->fromMicroserviceName;
    }

    /**
     * @param string $fromMicroserviceName
     * @return MessageDto
     */
    public function setFromMicroserviceName(string $fromMicroserviceName): MessageDto
    {
        $this->fromMicroserviceName = $fromMicroserviceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getToMicroserviceName(): string
    {
        return $this->toMicroserviceName;
    }

    /**
     * @param string $toMicroserviceName
     * @return MessageDto
     */
    public function setToMicroserviceName(string $toMicroserviceName): MessageDto
    {
        $this->toMicroserviceName = $toMicroserviceName;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @return bool
     */
    public function isSendToScrutinizer(): bool
    {
        return $this->sendToScrutinizer;
    }

    /**
     * @param bool $sendToScrutinizer
     * @return MessageDto
     */
    public function setSendToScrutinizer(bool $sendToScrutinizer): MessageDto
    {
        $this->sendToScrutinizer = $sendToScrutinizer;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxTimeOutInSec(): int
    {
        return $this->maxTimeOutInSec;
    }

    /**
     * @param int $maxTimeOutInSec
     * @return MessageDto
     */
    public function setMaxTimeOutInSec(int $maxTimeOutInSec): MessageDto
    {
        $this->maxTimeOutInSec = $maxTimeOutInSec;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxWaitTimeInSec(): int
    {
        return $this->maxWaitTimeInSec;
    }

    /**
     * @param int $maxWaitTimeInSec
     * @return MessageDto
     */
    public function setMaxWaitTimeInSec(int $maxWaitTimeInSec): MessageDto
    {
        $this->maxWaitTimeInSec = $maxWaitTimeInSec;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethodName(): string
    {
        return $this->methodName;
    }

    /**
     * @param string $methodName
     * @return MessageDto
     */
    public function setMethodName(string $methodName): MessageDto
    {
        $this->methodName = $methodName;
        return $this;
    }

    /**
     * @return UuidInterface
     */
    public function getTaskUuid(): UuidInterface
    {
        return $this->taskUuid;
    }

    /**
     * @param UuidInterface $taskUuid
     * @return MessageDto
     */
    public function setTaskUuid(UuidInterface $taskUuid): MessageDto
    {
        $this->taskUuid = $taskUuid;
        return $this;
    }


}