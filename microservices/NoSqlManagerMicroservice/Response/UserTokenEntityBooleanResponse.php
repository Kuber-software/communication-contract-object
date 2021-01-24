<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;


use Kubersoftware\Microservices\BaseObject;

class UserTokenEntityBooleanResponse extends BaseObject
{
    private bool $result;

    /**
     * @return bool
     */
    public function isNull(): bool
    {
        return $this->isNull;
    }

    /**
     * @param bool $isNull
     * @return UserTokenEntityBooleanResponse
     */
    public function setIsNull(bool $isNull): UserTokenEntityBooleanResponse
    {
        $this->isNull = $isNull;
        return $this;
    }

    /**
     * @return bool
     */
    public function isResult(): bool
    {
        return $this->result;
    }

    /**
     * @param bool $result
     * @return UserTokenEntityBooleanResponse
     */
    public function setResult(bool $result): UserTokenEntityBooleanResponse
    {
        $this->result = $result;
        return $this;
    }
}