<?php


namespace Kubersoftware\Microservices;


class BaseObject
{
    protected bool $objectNull;

    /**
     * @return bool
     */
    public function getObjectNull(): bool
    {
        return $this->objectNull;
    }

    /**
     * @param bool $objectNull
     */
    public function setObjectNull(bool $objectNull): void
    {
        $this->objectNull = $objectNull;
    }
}