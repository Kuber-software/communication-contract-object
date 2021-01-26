<?php


namespace Kubersoftware\Microservices\Scrutinizer\Request;


use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\Scrutinizer\Entity\TaskEntity;

class TaskEntityRequest extends BaseObject
{

    private TaskEntity $taskEntity;

    /**
     * @return bool
     */
    public function isObjectNull(): bool
    {
        return $this->objectNull;
    }

    /**
     * @param bool $objectNull
     * @return TaskEntityRequest
     */
    public function setObjectNull(bool $objectNull): TaskEntityRequest
    {
        $this->objectNull = $objectNull;
        return $this;
    }

    /**
     * @return TaskEntity
     */
    public function getTaskEntity(): TaskEntity
    {
        return $this->taskEntity;
    }

    /**
     * @param TaskEntity $taskEntity
     * @return TaskEntityRequest
     */
    public function setTaskEntity(TaskEntity $taskEntity): TaskEntityRequest
    {
        $this->taskEntity = $taskEntity;
        return $this;
    }

}