<?php


namespace Kubersoftware\Microservices\Scrutinizer\Entity;


use DateTime;
use Kubersoftware\Microservices\EnumStatus;

class TaskEntity
{
    /**
     * Название микросервиса, который создаёт задачу
     * @var string
     */
    private string $createTaskMicroserviceName;

    /**
     * Название микросервиса, который выполняет задачу
     * @var string
     */
    private string $doTasKMicroserviceName;

    /**
     * Объект задачи
     * @var string
     */
    private string $objectTasK;

    /**
     * Текущее время запроса
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Время последнего обновления
     * @var DateTime
     */
    private DateTime $upAt;

    /**
     * Дедлайн выполнения задачи
     * @var DateTime
     */
    private DateTime $deadLineTasK;

    /**
     * Пауза между попытками в секундах
     * @var int
     */
    private int $pauseBetweenTry;

    /**
     * Статус выполнения задачи
     * @var EnumStatus
     */
    private EnumStatus $statusTasK;

    /**
     * Имя метода
     * @var string
     */
    private string $methodName;

    /**
     * Результат выполненной задачи
     * @var string
     */
    private string $resultTasK;

    /**
     * @return string
     */
    public function getCreateTaskMicroserviceName(): string
    {
        return $this->createTaskMicroserviceName;
    }

    /**
     * @param string $createTaskMicroserviceName
     * @return TaskEntity
     */
    public function setCreateTaskMicroserviceName(string $createTaskMicroserviceName): TaskEntity
    {
        $this->createTaskMicroserviceName = $createTaskMicroserviceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getDoTasKMicroserviceName(): string
    {
        return $this->doTasKMicroserviceName;
    }

    /**
     * @param string $doTasKMicroserviceName
     * @return TaskEntity
     */
    public function setDoTasKMicroserviceName(string $doTasKMicroserviceName): TaskEntity
    {
        $this->doTasKMicroserviceName = $doTasKMicroserviceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectTasK(): string
    {
        return $this->objectTasK;
    }

    /**
     * @param string $objectTasK
     * @return TaskEntity
     */
    public function setObjectTasK(string $objectTasK): TaskEntity
    {
        $this->objectTasK = $objectTasK;
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
     * @param DateTime $createdAt
     * @return TaskEntity
     */
    public function setCreatedAt(DateTime $createdAt): TaskEntity
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getUpAt(): DateTime
    {
        return $this->upAt;
    }

    /**
     * @param DateTime $upAt
     * @return TaskEntity
     */
    public function setUpAt(DateTime $upAt): TaskEntity
    {
        $this->upAt = $upAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getDeadLineTasK(): DateTime
    {
        return $this->deadLineTasK;
    }

    /**
     * @param DateTime $deadLineTasK
     * @return TaskEntity
     */
    public function setDeadLineTasK(DateTime $deadLineTasK): TaskEntity
    {
        $this->deadLineTasK = $deadLineTasK;
        return $this;
    }

    /**
     * @return int
     */
    public function getPauseBetweenTry(): int
    {
        return $this->pauseBetweenTry;
    }

    /**
     * @param int $pauseBetweenTry
     * @return TaskEntity
     */
    public function setPauseBetweenTry(int $pauseBetweenTry): TaskEntity
    {
        $this->pauseBetweenTry = $pauseBetweenTry;
        return $this;
    }

    /**
     * @return EnumStatus
     */
    public function getStatusTasK(): EnumStatus
    {
        return $this->statusTasK;
    }

    /**
     * @param EnumStatus $statusTasK
     * @return TaskEntity
     */
    public function setStatusTasK(EnumStatus $statusTasK): TaskEntity
    {
        $this->statusTasK = $statusTasK;
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
     * @return TaskEntity
     */
    public function setMethodName(string $methodName): TaskEntity
    {
        $this->methodName = $methodName;
        return $this;
    }

    /**
     * @return string
     */
    public function getResultTasK(): string
    {
        return $this->resultTasK;
    }

    /**
     * @param string $resultTasK
     * @return TaskEntity
     */
    public function setResultTasK(string $resultTasK): TaskEntity
    {
        $this->resultTasK = $resultTasK;
        return $this;
    }


}