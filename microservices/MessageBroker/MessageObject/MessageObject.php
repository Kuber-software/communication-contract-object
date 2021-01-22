<?php


namespace Kubersoftware\Microservices\MessageBroker\MessageObject;


use DateTime;

class MessageObject
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
     * Текущее время запроса
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Нужно ли фиксировать таску для скрутинайзера
     * @var bool
     */
    private bool $sendToScrutinizer;

    /**
     * Максимальное время отработки таски
     * @var int
     */
    private int $maxTimeOutInSec;

    /**
     * Максимальное время ожидание ответа на запрос
     * @var int
     */
    private int $maxWaitTimeInSec;

    /**
     * Роутинг-кей
     * @var string
     */
    private string $routingKey;

    /**
     * Отправляемый объект
     * @var object
     */
    private object $requestObject;

    /**
     * Имя отправляемого объекта
     * @var string
     */
    private string $requestObjectName;

    /**
     * Получаемый объект
     * @var object
     */
    private object $responseObject;

    /**
     * Имя получаемого объекта
     * @var string
     */
    private string $responseObjectName;

    /**
     * Объект с ошибкой
     * @var object
     */
    private object $error;


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
     * @return MessageObject
     */
    public function setFromMicroserviceName(string $fromMicroserviceName): MessageObject
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
     * @return MessageObject
     */
    public function setToMicroserviceName(string $toMicroserviceName): MessageObject
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
     * @return MessageObject
     */
    public function setSendToScrutinizer(bool $sendToScrutinizer): MessageObject
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
     * @return MessageObject
     */
    public function setMaxTimeOutInSec(int $maxTimeOutInSec): MessageObject
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
     * @return MessageObject
     */
    public function setMaxWaitTimeInSec(int $maxWaitTimeInSec): MessageObject
    {
        $this->maxWaitTimeInSec = $maxWaitTimeInSec;
        return $this;
    }

    /**
     * @return string
     */
    public function getRoutingKey(): string
    {
        return $this->routingKey;
    }

    /**
     * @param string $routingKey
     * @return MessageObject
     */
    public function setRoutingKey(string $routingKey): MessageObject
    {
        $this->routingKey = $routingKey;
        return $this;
    }

    /**
     * @return object
     */
    public function getRequestObject(): object
    {
        return $this->requestObject;
    }

    /**
     * @param object $requestObject
     * @return MessageObject
     */
    public function setRequestObject(object $requestObject): MessageObject
    {
        $this->requestObject = $requestObject;
        return $this;
    }

    /**
     * @return object
     */
    public function getResponseObject(): object
    {
        return $this->responseObject;
    }

    /**
     * @param object $responseObject
     * @return MessageObject
     */
    public function setResponseObject(object $responseObject): MessageObject
    {
        $this->responseObject = $responseObject;
        return $this;
    }

    /**
     * @return object
     */
    public function getError(): object
    {
        return $this->error;
    }

    /**
     * @param object $error
     * @return MessageObject
     */
    public function setError(object $error): MessageObject
    {
        $this->error = $error;
        return $this;
    }

    /**
     * @return string
     */
    public function getRequestObjectName(): string
    {
        return $this->requestObjectName;
    }

    /**
     * @param string $requestObjectName
     * @return MessageObject
     */
    public function setRequestObjectName(string $requestObjectName): MessageObject
    {
        $this->requestObjectName = $requestObjectName;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseObjectName(): string
    {
        return $this->responseObjectName;
    }

    /**
     * @param string $responseObjectName
     * @return MessageObject
     */
    public function setResponseObjectName(string $responseObjectName): MessageObject
    {
        $this->responseObjectName = $responseObjectName;
        return $this;
    }


}