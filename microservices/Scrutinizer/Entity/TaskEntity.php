<?php


namespace Kubersoftware\Microservices\Scrutinizer\Entity;


use DateTime;
use Kubersoftware\Microservices\EnumStatus;
use Ramsey\Uuid\UuidInterface;

class TaskEntity
{
    /**
     * Uuid задачи
     * @JMS\Type("uuid")
     * @var UuidInterface
     */
    private UuidInterface $taskUuid;

    /**
     * Название микросервиса, который создаёт задачу
     * @var string
     */
    private string $createTaskMicroserviceName;

    /**
     * Название микросервиса, который выполняет задачу
     * @var string
     */
    private string $doTaskMicroserviceName;

    /**
     * Объект задачи
     * @var string
     */
    private string $objectTask;

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
    private DateTime $deadLineTask;

    /**
     * Пауза между попытками в секундах
     * @var int
     */
    private int $pauseBetweenTry;

    /**
     * Статус выполнения задачи
     * @var EnumStatus
     */
    private EnumStatus $statusTask;

    /**
     * Имя метода
     * @var string
     */
    private string $methodName;

    /**
     * Результат выполненной задачи
     * @var string
     */
    private string $resultTask;


    public function __construct()
    {
        $this->upAt = new DateTime();
        $this->pauseBetweenTry = 600;
        $this->resultTask = 'null';
    }


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
    public function getDoTaskMicroserviceName(): string
    {
        return $this->doTaskMicroserviceName;
    }

    /**
     * @param string $doTaskMicroserviceName
     * @return TaskEntity
     */
    public function setDoTaskMicroserviceName(string $doTaskMicroserviceName): TaskEntity
    {
        $this->doTaskMicroserviceName = $doTaskMicroserviceName;
        return $this;
    }

    /**
     * @return string
     */
    public function getObjectTask(): string
    {
        return $this->objectTask;
    }

    /**
     * @param string $objectTask
     * @return TaskEntity
     */
    public function setObjectTask(string $objectTask): TaskEntity
    {
        $this->objectTask = $objectTask;
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
    public function getDeadLineTask(): DateTime
    {
        return $this->deadLineTask;
    }

    /**
     * @param DateTime $deadLineTask
     * @return TaskEntity
     */
    public function setDeadLineTask(DateTime $deadLineTask): TaskEntity
    {
        $this->deadLineTask = $deadLineTask;
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
    public function getStatusTask(): EnumStatus
    {
        return $this->statusTask;
    }

    /**
     * @param EnumStatus $statusTask
     * @return TaskEntity
     */
    public function setStatusTask(EnumStatus $statusTask): TaskEntity
    {
        $this->statusTask = $statusTask;
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
    public function getResultTask(): string
    {
        return $this->resultTask;
    }

    /**
     * @param string $resultTask
     * @return TaskEntity
     */
    public function setResultTask(string $resultTask): TaskEntity
    {
        $this->resultTask = $resultTask;
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
     * @return TaskEntity
     */
    public function setTaskUuid(UuidInterface $taskUuid): TaskEntity
    {
        $this->taskUuid = $taskUuid;
        return $this;
    }


}