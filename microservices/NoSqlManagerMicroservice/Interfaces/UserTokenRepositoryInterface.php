<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Interfaces;


use Kubersoftware\Microservices\NosqlManagerMicroservice\Request\UserTokenEntityRequest;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Request\UserTokenRequest;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Request\UserUuidRequest;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\UserTokenEntityResponse;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\UserTokenEntityBooleanResponse;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\UserTokenIdResponse;

interface UserTokenRepositoryInterface
{
    /**
     * @param UserTokenEntityRequest $userTokenEntityRequest
     * @return UserTokenIdResponse
     */
    public function insertOneUserTokenEntity(UserTokenEntityRequest $userTokenEntityRequest): UserTokenIdResponse;

    /**
     * @param UserTokenRequest $userTokenRequest
     * @return UserTokenEntityResponse
     */
    public function findOneByUserToken(UserTokenRequest $userTokenRequest): UserTokenEntityResponse;

    /**
     * @param UserTokenRequest $userTokenRequest
     * @return UserTokenEntityBooleanResponse
     */
    public function deleteOneByUserToken(UserTokenRequest $userTokenRequest): UserTokenEntityBooleanResponse;

    /**
     * @param UserUuidRequest $userUuidRequest
     * @return UserTokenEntityBooleanResponse
     */
    public function deleteOneByUserUuid(UserUuidRequest $userUuidRequest): UserTokenEntityBooleanResponse;

}