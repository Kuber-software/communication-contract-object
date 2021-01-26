<?php


namespace Kubersoftware\Microservices\Scrutinizer\Response;


use Kubersoftware\Microservices\BaseObject;

class TaskBooleanResponse  extends BaseObject
{
    private bool $booleanResponse;

    /**
     * @return bool
     */
    public function isObjectNull(): bool
    {
        return $this->objectNull;
    }

    /**
     * @param bool $objectNull
     * @return TaskBooleanResponse
     */
    public function setObjectNull(bool $objectNull): TaskBooleanResponse
    {
        $this->objectNull = $objectNull;
        return $this;
    }

    /**
     * @return bool
     */
    public function isBooleanResponse(): bool
    {
        return $this->booleanResponse;
    }

    /**
     * @param bool $booleanResponse
     * @return TaskBooleanResponse
     */
    public function setBooleanResponse(bool $booleanResponse): TaskBooleanResponse
    {
        $this->booleanResponse = $booleanResponse;
        return $this;
    }

}