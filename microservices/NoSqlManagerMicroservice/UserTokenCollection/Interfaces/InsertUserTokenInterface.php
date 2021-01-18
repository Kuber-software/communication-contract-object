<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Interfaces;

use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Entity\UserTokenEntity;

interface InsertUserTokenInterface
{
    public function insert(UserTokenEntity $userTokenEntity): string;
}