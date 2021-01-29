<?php


namespace Kubersoftware\Microservices\NoSqlManagerMicroservice\Request;


use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\NoSqlManagerMicroservice\Entity\TaskScrutinizerEntity;

class TaskScrutinizerEntityRequest extends BaseObject
{

    private TaskScrutinizerEntity $taskEntity;

    /**
     * @return bool
     */
    public function isObjectNull(): bool
    {
        return $this->objectNull;
    }

    /**
     * @param bool $objectNull
     * @return TaskScrutinizerEntityRequest
     */
    public function setObjectNull(bool $objectNull): TaskScrutinizerEntityRequest
    {
        $this->objectNull = $objectNull;
        return $this;
    }

    /**
     * @return TaskScrutinizerEntity
     */
    public function getTaskEntity(): TaskScrutinizerEntity
    {
        return $this->taskEntity;
    }

    /**
     * @param TaskScrutinizerEntity $taskEntity
     * @return TaskScrutinizerEntityRequest
     */
    public function setTaskEntity(TaskScrutinizerEntity $taskEntity): TaskScrutinizerEntityRequest
    {
        $this->taskEntity = $taskEntity;
        return $this;
    }

}