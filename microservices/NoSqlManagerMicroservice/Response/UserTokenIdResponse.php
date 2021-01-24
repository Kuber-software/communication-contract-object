<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Response;

// todo добавить интерфейс объекта Logger
use Kubersoftware\Microservices\BaseObject;

class UserTokenIdResponse extends BaseObject
{
    private string $id;

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

    /**
     * @return bool
     */
    public function isNull(): bool
    {
        return $this->isNull;
    }

    /**
     * @param bool $isNull
     * @return UserTokenIdResponse
     */
    public function setIsNull(bool $isNull): UserTokenIdResponse
    {
        $this->isNull = $isNull;
        return $this;
    }

}