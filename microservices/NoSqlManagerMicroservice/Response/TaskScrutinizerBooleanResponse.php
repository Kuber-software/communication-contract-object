<?php


namespace Kubersoftware\Microservices\Scrutinizer\Response;


use Kubersoftware\Microservices\BaseObject;

class TaskScrutinizerBooleanResponse  extends BaseObject
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
     * @return TaskScrutinizerBooleanResponse
     */
    public function setObjectNull(bool $objectNull): TaskScrutinizerBooleanResponse
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
     * @return TaskScrutinizerBooleanResponse
     */
    public function setBooleanResponse(bool $booleanResponse): TaskScrutinizerBooleanResponse
    {
        $this->booleanResponse = $booleanResponse;
        return $this;
    }

}