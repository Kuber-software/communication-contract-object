<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;

use Kubersoftware\Microservices\BaseObject;
use Ramsey\Uuid\Uuid;

class CodeUuidResponse extends BaseObject
{

    /**
     * @var Uuid
     */
    private Uuid $codeUuid;

    /**
     * @return Uuid
     */
    public function getCodeUuid(): Uuid
    {
        return $this->codeUuid;
    }

    /**
     * @param Uuid $codeUuid
     * @return CodeUuidResponse
     */
    public function setCodeUuid(Uuid $codeUuid): CodeUuidResponse
    {
        $this->codeUuid = $codeUuid;
        return $this;
    }

}