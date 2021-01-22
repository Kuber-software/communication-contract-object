<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;

use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;
use Spatie\Typed\Collection;
use Spatie\Typed\T;

class UserTokenEntitiesArrayResponse
{
    private array $collection = [];

    /**
     * @return array
     */
    public function getCollection(): array
    {
        return $this->collection;
    }

    /**
     * @param UserTokenEntity $userTokenEntity
     * @return UserTokenEntitiesArrayResponse
     */
    public function addToCollection(UserTokenEntity $userTokenEntity): UserTokenEntitiesArrayResponse
    {
        $this->collection[] = $userTokenEntity;
        return $this;
    }


}