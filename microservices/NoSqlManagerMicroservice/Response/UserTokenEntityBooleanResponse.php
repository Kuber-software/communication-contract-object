<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;


use Kubersoftware\Microservices\BaseObject;

class UserTokenEntityBooleanResponse extends BaseObject
{
    private bool $result = false;

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