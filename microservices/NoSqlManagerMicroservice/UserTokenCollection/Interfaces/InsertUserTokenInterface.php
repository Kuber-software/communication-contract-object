<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Interfaces;

use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Entity\UserTokenEntity;

interface InsertUserTokenInterface
{
    public function insertOne(UserTokenEntity $userTokenEntity): string;

    public function insertMany(UserTokenEntity $userTokenEntity): string;
}