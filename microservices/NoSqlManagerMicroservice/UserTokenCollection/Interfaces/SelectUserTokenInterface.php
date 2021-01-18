<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Interfaces;

use Doctrine\Common\Collections\ArrayCollection;
use Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Entity\UserTokenEntity;

interface SelectUserTokenInterface
{
    public function selectFirst(ArrayCollection $creteria): UserTokenEntity;

    public function selectMany(ArrayCollection $creteria): ArrayCollection;
}