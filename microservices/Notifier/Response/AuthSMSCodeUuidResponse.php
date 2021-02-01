<?php

namespace Kubersoftware\Microservices\Notifier\Response;

use Kubersoftware\Microservices\BaseObject;

class AuthSMSCodeUuidResponse extends BaseObject
{

    /**
     * @var int
     */
    private int $codeId;

    /**
     * @return int
     */
    public function getCodeId(): int
    {
        return $this->codeId;
    }

    /**
     * @param int $codeId
     * @return AuthSMSCodeUuidResponse
     */
    public function setCodeId(int $codeId): AuthSMSCodeUuidResponse
    {
        $this->codeId = $codeId;
        return $this;
    }

}