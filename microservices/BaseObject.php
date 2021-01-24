<?php


namespace Kubersoftware\Microservices;


class BaseObject
{
    protected bool $objectNull = false;

    /**
     * @return bool
     */
    public function getObjectNull(): bool
    {
        return $this->objectNull;
    }

    /**
     * @param bool $objectNull
     * @return BaseObject
     */
    public function setObjectNull(bool $objectNull): self
    {
        $this->objectNull = $objectNull;
        return $this;
    }
}