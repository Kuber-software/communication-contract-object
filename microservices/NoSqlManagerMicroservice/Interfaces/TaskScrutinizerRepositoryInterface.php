<?php

namespace Kubersoftware\Microservices\NoSqlManagerMicroservice\Interfaces;


use Kubersoftware\Microservices\NoSqlManagerMicroservice\Request\TaskScrutinizerEntityRequest;
use Kubersoftware\Microservices\NoSqlManagerMicroservice\Request\TaskScrutinizerStatusRequest;
use Kubersoftware\Microservices\NoSqlManagerMicroservice\Request\TaskScrutinizerUuidEntityRequest;
use Kubersoftware\Microservices\NoSqlManagerMicroservice\Request\TaskScrutinizerUuidRequest;
use Kubersoftware\Microservices\NoSqlManagerMicroservice\Response\TaskScrutinizerBooleanResponse;
use Kubersoftware\Microservices\NoSqlManagerMicroservice\Response\TaskScrutinizerEntityResponse;
use Kubersoftware\Microservices\NoSqlManagerMicroservice\Response\TaskScrutinizerEntitysResponse;

interface TaskScrutinizerRepositoryInterface
{
    /**
     * @param TaskScrutinizerEntityRequest $taskScrutinizerEntityRequest
     * @return TaskScrutinizerBooleanResponse
     */
    public function insertTaskScrutinizer(TaskScrutinizerEntityRequest $taskScrutinizerEntityRequest): TaskScrutinizerBooleanResponse;

    /**
     * @param TaskScrutinizerUuidRequest $taskScrutinizerUuidRequest
     * @return TaskScrutinizerEntityResponse
     */
    public function findOneByTaskUuidTaskScrutinizer(TaskScrutinizerUuidRequest $taskScrutinizerUuidRequest): TaskScrutinizerEntityResponse;

    /**
     * @param TaskScrutinizerStatusRequest $taskScrutinizerStatusRequest
     * @return TaskScrutinizerEntitysResponse
     */
    public function findManyByStatusTaskTaskScrutinizer(TaskScrutinizerStatusRequest $taskScrutinizerStatusRequest): TaskScrutinizerEntitysResponse;

    /**
     * @param TaskScrutinizerUuidEntityRequest $taskScrutinizerUuidEntityRequest
     * @return TaskScrutinizerBooleanResponse
     */
    public function updateOneByTaskUuidTaskScrutinizer(TaskScrutinizerUuidEntityRequest $taskScrutinizerUuidEntityRequest): TaskScrutinizerBooleanResponse;


}