<?php
namespace Kubersoftware\Microservices\NosqlManagerMicroservice\UserTokenCollection\Interfaces;

interface DeleteUserTokenInterface
{
    public function delete(string $id): bool;
}