<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;

use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;
use Spatie\Typed\Collection;
use Spatie\Typed\T;

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

    /**
     * @return bool
     */
    public function isNull(): bool
    {
        return $this->isNull;
    }

    /**
     * @param bool $isNull
     * @return UserTokenEntitiesArrayResponse
     */
    public function setIsNull(bool $isNull): UserTokenEntitiesArrayResponse
    {
        $this->isNull = $isNull;
        return $this;
    }

}