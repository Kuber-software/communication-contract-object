<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;

use Kubersoftware\Microservices\BaseObject;

class UserTokenIdResponse extends BaseObject
{
    private string $id = 'null';

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return UserTokenIdResponse
     */
    public function setId(string $id): UserTokenIdResponse
    {
        $this->id = $id;
        return $this;
    }

}