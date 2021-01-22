<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Interfaces;

use App\Microservices\NosqlManagerMicroservice\Response\UserTokenEntitiesResponse;
use App\Microservices\NosqlManagerMicroservice\Response\UserTokenIdResponse;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Request\UserTokenRequest;

interface UserTokenCollectionInterface
{
    /**
     * @param UserTokenRequest $userTokenEntity
     * @return UserTokenIdResponse
     */
    public function insertOne(UserTokenRequest $userTokenEntity): UserTokenIdResponse;

    /**
     * @param array $userTokenEntity - массив из объектов UserTokenRequest
     * @return array - массив из объектов UserTokenIdResponse
     */
    public function insertMany(array $userTokenEntity): array;

    public function findByUserUuid(string $userUuid): UserTokenEntitiesResponse;

    public function updateOne(UserTokenRequest $userTokenEntity): UserTokenRequest;

    public function updateMany(UserTokenRequest $userTokenEntity): UserTokenRequest;
}