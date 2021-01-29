<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;

use Kubersoftware\Microservices\BaseObject;
use Kubersoftware\Microservices\NosqlManagerMicroservice\Entity\UserTokenEntity;
use Spatie\Typed\Collection;
use Spatie\Typed\T;

class UserTokenEntityResponse extends BaseObject
{
    private UserTokenEntity $userTokenEntity;

    /**
     * @return UserTokenEntity
     */
    public function getUserTokenEntity(): UserTokenEntity
    {
        return $this->userTokenEntity;
    }

    /**
     * @param UserTokenEntity $userTokenEntity
     * @return UserTokenEntityResponse
     */
    public function setUserTokenEntity(UserTokenEntity $userTokenEntity): UserTokenEntityResponse
    {
        $this->userTokenEntity = $userTokenEntity;
        return $this;
    }
}