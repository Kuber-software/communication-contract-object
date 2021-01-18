<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Interfaces;

use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Entity\UserTokenEntity;
use Ramsey\Uuid\UuidInterface;

interface FindUserTokenInterface
{
    public function findOneByUserUuid(UuidInterface $uuid): UserTokenEntity;

    public function findOneByUserToken(string $token): UserTokenEntity;

}