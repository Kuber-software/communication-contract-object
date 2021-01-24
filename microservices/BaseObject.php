<?php


namespace Kubersoftware\Microservices;


abstract class BaseObject
{
    protected bool $isNull = false;

    /**
     * @return bool
     */
    public function isNull(): bool
    {
        return $this->isNull;
    }

    /**
     * @param bool $isNull
     * @return BaseObject
     */
    public function setIsNull(bool $isNull): BaseObject
    {
        $this->isNull = $isNull;
        return $this;
    }
}