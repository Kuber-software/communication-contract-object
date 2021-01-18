<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Interfaces;

use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Dto\ArrayObjectIdDto;
use MongoDB\BSON\ObjectId;

interface DeleteUserTokenInterface
{
    public function deleteOne(ObjectId $id): bool;

    public function deleteMany(ArrayObjectIdDto $arrayObjectIdDto): bool;
}