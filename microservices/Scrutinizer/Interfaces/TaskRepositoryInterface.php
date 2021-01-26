<?php

namespace Kubersoftware\Microservices\Scrutinizer\Interfaces;


use Kubersoftware\Microservices\Scrutinizer\Request\TaskEntityRequest;
use Kubersoftware\Microservices\Scrutinizer\Response\TaskBooleanResponse;

interface TaskRepositoryInterface
{
    /**
     * @param TaskEntityRequest $taskEntityRequest
     * @return TaskBooleanResponse
     */
    public function insertTaskEntity(TaskEntityRequest $taskEntityRequest): TaskBooleanResponse;

}