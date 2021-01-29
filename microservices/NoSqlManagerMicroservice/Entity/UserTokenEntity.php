<?php

namespace Kubersoftware\Microservices\NosqlManagerMicroservice\Entity;

use DateTime;
use JMS\Serializer\Annotation\Type;
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
    private string $userEmail;

    /**
     * @var array
     */
    private array $userRoles;

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
     * @Type("DateTime<'Y-m-d'>")
     * @var DateTime
     */
    private DateTime $expiresAt;

    /**
     * @Type("array<string>")
     * Информация о сессии: браузер, язык, ip и тд
     *
     * @var array
     */
    private array $userInformation;


    public function __construct()
    {
        $this->createdAt = new DateTime();
    }

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
     * @return array
     */
    public function getUserInformation(): array
    {
        return $this->userInformation;
    }

    /**
     * @param array $userInformation
     * @return UserTokenEntity
     */
    public function setUserInformation(array $userInformation): UserTokenEntity
    {
        $this->userInformation = $userInformation;
        return $this;
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
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }

    /**
     * @param string $userEmail
     * @return UserTokenEntity
     */
    public function setUserEmail(string $userEmail): UserTokenEntity
    {
        $this->userEmail = $userEmail;
        return $this;
    }

    /**
     * @return array
     */
    public function getUserRoles(): array
    {
        return $this->userRoles;
    }

    /**
     * @param array $userRoles
     * @return UserTokenEntity
     */
    public function setUserRoles(array $userRoles): UserTokenEntity
    {
        $this->userRoles = $userRoles;
        return $this;
    }

}