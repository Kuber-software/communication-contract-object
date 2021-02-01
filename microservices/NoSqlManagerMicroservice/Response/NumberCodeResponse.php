<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;

use Kubersoftware\Microservices\BaseObject;

class NumberCodeResponse extends BaseObject
{

    /**
     * @var int
     */
    private int $code;

    /**
     * @var \DateTime
     */
    private \DateTime $dateTime;

    /**
     * @return int
     */
    public function getCode(): int
    {
        return $this->code;
    }

    /**
     * @param int $code
     * @return NumberCodeResponse
     */
    public function setCode(int $code): NumberCodeResponse
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDateTime(): \DateTime
    {
        return $this->dateTime;
    }

    /**
     * @param \DateTime $dateTime
     * @return NumberCodeResponse
     */
    public function setDateTime(\DateTime $dateTime): NumberCodeResponse
    {
        $this->dateTime = $dateTime;
        return $this;
    }

}