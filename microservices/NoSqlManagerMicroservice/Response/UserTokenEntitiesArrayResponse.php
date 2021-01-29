<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;

use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;

class UserTokenEntitiesArrayResponse extends BaseObject
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