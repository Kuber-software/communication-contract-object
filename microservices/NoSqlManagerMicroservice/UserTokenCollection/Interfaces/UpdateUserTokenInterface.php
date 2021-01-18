<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Interfaces;

use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Entity\UserTokenEntity;

interface UpdateUserTokenInterface
{
    public function update(UserTokenEntity $userTokenEntity): UserTokenEntity;
}