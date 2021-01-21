<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Interfaces;


use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;

interface UserTokenCollectionInterface
{
    public function insertOne(UserTokenEntity $userTokenEntity): string;

    public function insertMany(UserTokenEntity $userTokenEntity): string;

    public function updateOne(UserTokenEntity $userTokenEntity): UserTokenEntity;

    public function updateMany(UserTokenEntity $userTokenEntity): UserTokenEntity;
}