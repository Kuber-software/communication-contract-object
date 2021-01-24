<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Interfaces;


use Kubersoftware\Microservices\NosqlManagerMicroservice\Request\UserTokenRequest;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\UserTokenEntitiesResponse;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Response\UserTokenIdResponse;

interface UserTokenRepositoryInterface
{
    /**
     * @param UserTokenRequest $userTokenRequest
     * @return UserTokenIdResponse
     */
    public function insertOneUserToken(UserTokenRequest $userTokenRequest): UserTokenIdResponse;

    /**
     * @param UserTokenRequest $userTokenRequest
     * @return UserTokenEntitiesResponse
     */
    public function findOneUserToken(UserTokenRequest $userTokenRequest): UserTokenEntitiesResponse;


    /**
     * @param UserTokenRequest $userTokenRequest
     * @return bool
     */
    public function deleteOneUserToken(UserTokenRequest $userTokenRequest): bool;

}