<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Interfaces;

use Kubersoftware\Microservices\NoSqlManagerMicroservice\Request\CodeUuidRequest;
use Kubersoftware\Microservices\NoSqlManagerMicroservice\Request\NumberCodeRequest;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\CodeUuidResponse;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\NumberCodeResponse;

interface CodeRepositoryInterface
{

    /**
     * @param NumberCodeRequest $userTokenEntityRequest
     * @return CodeUuidResponse
     */
    public function insertOneUserNumberCode(NumberCodeRequest $userTokenEntityRequest): CodeUuidResponse;

    /**
     * @param CodeUuidRequest $userTokenRequest
     * @return NumberCodeResponse
     */
    public function findOneByCodeId(CodeUuidRequest $userTokenRequest): NumberCodeResponse;

}