<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Dto;


use Doctrine\Common\Collections\ArrayCollection;
use MongoDB\BSON\ObjectId;

class ArrayObjectIdDto
{
    private ArrayCollection $arrayCollection;

    public function __construct()
    {
        $this->arrayCollection = new ArrayCollection();
    }

    public function addObjectId(ObjectId $objectId)
    {
        $this->arrayCollection->add($objectId);
        return $this;
    }

    public function getObjectIds(): array
    {
        return $this->arrayCollection->getValues();
    }
}