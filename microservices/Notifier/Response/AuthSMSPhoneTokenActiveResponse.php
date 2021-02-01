<?php

namespace Kubersoftware\Microservices\Notifier\Response;

use Kubersoftware\Microservices\BaseObject;

class AuthSMSPhoneTokenActiveResponse extends BaseObject
{

    /**
     * @var bool
     */
    private bool $isActive;

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     * @return AuthSMSPhoneTokenActiveResponse
     */
    public function setIsActive(bool $isActive): AuthSMSPhoneTokenActiveResponse
    {
        $this->isActive = $isActive;
        return $this;
    }

}