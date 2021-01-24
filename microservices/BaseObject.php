<?php


namespace Kubersoftware\Microservices;


abstract class BaseObject
{
    protected bool $isObjectNull = false;

    /**
     * @return bool
     */
    public function isObjectNull(): bool
    {
        return $this->isObjectNull;
    }

    /**
     * @param bool $isObjectNull
     * @return BaseObject
     */
    public function setIsObjectNull(bool $isObjectNull): BaseObject
    {
        $this->isObjectNull = $isObjectNull;
        return $this;
    }
}