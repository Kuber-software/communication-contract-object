<?php


namespace App\Microservices\NosqlManagerMicroservice\Response;

// todo добавить интерфейс объекта Logger
class UserTokenIdResponse
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
}