<?php

namespace Kubersoftware\Microservices\Notifier\Response;

use Kubersoftware\Microservices\BaseObject;
use Ramsey\Uuid\Uuid;

class AuthSMSPhoneTokenResponse extends BaseObject
{

    /**
     * @var Uuid
     */
    private Uuid $token;

    /**
     * @return Uuid
     */
    public function getToken(): Uuid
    {
        return $this->token;
    }

    /**
     * @param Uuid $token
     * @return AuthSMSPhoneTokenResponse
     */
    public function setToken(Uuid $token): AuthSMSPhoneTokenResponse
    {
        $this->token = $token;
        return $this;
    }

}