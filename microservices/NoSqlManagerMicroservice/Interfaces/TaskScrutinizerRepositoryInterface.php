<?php

namespace Kubersoftware\Microservices\Scrutinizer\Interfaces;


use Kubersoftware\Microservices\Scrutinizer\Request\TaskScrutinizerEntityRequest;
use Kubersoftware\Microservices\Scrutinizer\Request\TaskScrutinizerStatusRequest;
use Kubersoftware\Microservices\Scrutinizer\Request\TaskScrutinizerUuidEntityRequest;
use Kubersoftware\Microservices\Scrutinizer\Request\TaskScrutinizerUuidRequest;
use Kubersoftware\Microservices\Scrutinizer\Response\TaskScrutinizerBooleanResponse;
use Kubersoftware\Microservices\Scrutinizer\Response\TaskScrutinizerEntityResponse;
use Kubersoftware\Microservices\Scrutinizer\Response\TaskScrutinizerEntitysResponse;

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