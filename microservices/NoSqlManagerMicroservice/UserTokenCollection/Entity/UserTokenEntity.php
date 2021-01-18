<?php


namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Entity;


use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Ramsey\Uuid\UuidInterface;

class UserTokenEntity
{
    /**
     * @var UuidInterface
     */
    private UuidInterface $userUuid;

    /**
     * @var string
     */
    private string $token;

    /**
     * @var DateTime
     */
    private DateTime $createdAt;

    /**
     * Действителен до
     * @var DateTime
     */
    private DateTime $expiresAt;

    /**
     * Информация о сессии: браузер, язык, ip и тд
     * @var ArrayCollection
     */
    private ArrayCollection $userInformation;


    /**
     * @return UuidInterface
     */
    public function getUserUuid(): UuidInterface
    {
        return $this->userUuid;
    }

    /**
     * @param UuidInterface $userUuid
     * @return UserTokenEntity
     */
    public function setUserUuid(UuidInterface $userUuid): UserTokenEntity
    {
        $this->userUuid = $userUuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @param string $token
     * @return UserTokenEntity
     */
    public function setToken(string $token): UserTokenEntity
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return UserTokenEntity
     */
    public function setCreatedAt(DateTime $createdAt): UserTokenEntity
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getExpiresAt(): DateTime
    {
        return $this->expiresAt;
    }

    /**
     * @param DateTime $expiresAt
     * @return UserTokenEntity
     */
    public function setExpiresAt(DateTime $expiresAt): UserTokenEntity
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getUserInformation(): ArrayCollection
    {
        return $this->userInformation;
    }

    /**
     * @param ArrayCollection $userInformation
     * @return UserTokenEntity
     */
    public function setUserInformation(ArrayCollection $userInformation): UserTokenEntity
    {
        $this->userInformation = $userInformation;
        return $this;
    }
}