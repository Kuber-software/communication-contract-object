<?php


namespace Kubersoftware\Microservices\NoSqlManagerMicroservice\Entity;


use DateTime;
use Kubersoftware\Microservices\Scrutinizer\EnumScrutinizerStatus;
use Ramsey\Uuid\UuidInterface;

class TaskScrutinizerEntity
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
     * @var EnumScrutinizerStatus
     */
    private EnumScrutinizerStatus $statusTask;

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
     * @return TaskScrutinizerEntity
     */
    public function setCreateTaskMicroserviceName(string $createTaskMicroserviceName): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setDoTaskMicroserviceName(string $doTaskMicroserviceName): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setObjectTask(string $objectTask): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setCreatedAt(DateTime $createdAt): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setUpAt(DateTime $upAt): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setDeadLineTask(DateTime $deadLineTask): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setPauseBetweenTry(int $pauseBetweenTry): TaskScrutinizerEntity
    {
        $this->pauseBetweenTry = $pauseBetweenTry;
        return $this;
    }

    /**
     * @return EnumScrutinizerStatus
     */
    public function getStatusTask(): EnumScrutinizerStatus
    {
        return $this->statusTask;
    }

    /**
     * @param EnumScrutinizerStatus $statusTask
     * @return TaskScrutinizerEntity
     */
    public function setStatusTask(EnumScrutinizerStatus $statusTask): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setMethodName(string $methodName): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setResultTask(string $resultTask): TaskScrutinizerEntity
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
     * @return TaskScrutinizerEntity
     */
    public function setTaskUuid(UuidInterface $taskUuid): TaskScrutinizerEntity
    {
        $this->taskUuid = $taskUuid;
        return $this;
    }


}