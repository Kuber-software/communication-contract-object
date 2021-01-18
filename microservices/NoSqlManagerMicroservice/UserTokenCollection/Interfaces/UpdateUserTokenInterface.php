<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Interfaces;

use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Entity\UserTokenEntity;

interface UpdateUserTokenInterface
{
    public function updateOne(UserTokenEntity $userTokenEntity): UserTokenEntity;

    public function updateMany(UserTokenEntity $userTokenEntity): UserTokenEntity;
}